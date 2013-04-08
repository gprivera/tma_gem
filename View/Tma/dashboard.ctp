<html>
	
<?php
$size=count($dates);
$size--;

?>
	<head>
				<script type="text/javascript">
                    $(function () {
                        var chart;
                        $(document).ready(function() {
                        
                            var colors = Highcharts.getOptions().colors,
                                categories = ['School Years'],
                                name = 'Click bar to view breakdown',
                                data = [{
                                        y: <?php echo($overall);?>, //total
                                        color: colors[0],
                                        drilldown: {
                                            name: 'School Years',
                                            categories: [<?php foreach ($dates as $i => $value) {
                                                if($i==$size){
                                                    echo("'$dates[$i]'");
                                                }else{
                                                    echo("'$dates[$i]',");
                                                }
                                            }?>],
                                            data: [<?php foreach ($enrolled as $i => $value) {
                                                if($i==$size){
                                                    echo("$enrolled[$i]");
                                                }else{
                                                    echo("$enrolled[$i],");
                                                }
                                            }?>],
                                            color: colors[0]
                                        }
                                    }];
                        
                            function setChart(name, categories, data, color) {
                                chart.xAxis[0].setCategories(categories, false);
                                chart.series[0].remove(false);
                                chart.addSeries({name: name, data: data, color: color || 'white' }, false);
                                chart.redraw();
                            }
                        
                            chart = new Highcharts.Chart({
                                chart: { renderTo: 'results', type: 'column' },
                                credits: {enabled: false},
                                title: { text: 'Overall Students Enrolled' },
                                subtitle: { text: '# of students enrolled at TMA' },
                                xAxis: { categories: categories},
                                yAxis: { title: { text: '# of students enrolled' } },
                                plotOptions: { column: { cursor: 'pointer', point: { events: {
                                                click: function() {
                                                    var drilldown = this.drilldown;
                                                    if (drilldown) { // drill down
                                                        setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                                    } else { // restore
                                                        setChart(name, categories, data);
                                                    }
                                                }
                                            }
                                        },
                                        dataLabels: {
                                            enabled: true, color: colors[0], style: { fontWeight: 'bold' },
                                            formatter: function() { return this.y +''; }
                                        }
                                    }
                                },
                                tooltip: {
                                    formatter: function() {
                                        var point = this.point,
                                            s = this.x +':<b>'+ this.y +'</b><br/>';
                                        if (point.drilldown) {
                                            s += 'Click to view '+ point.category +'';
                                        } else {
                                            s += 'Click to return to Overall';
                                        }
                                        return s;
                                    }
                                },
                                series: [{
                                    name: name,
                                    data: data,
                                    color: 'white'
                                }],
                                exporting: {
                                    enabled: false
                                }
                            });
                        });
                        
                    });
                </script>
	</head>
<div>	
<div>
		<table border="1">
		<tr>
			<th>Family</th>
			<th>Training Schedule</th>
			<th>Email</th>
		
	</tr>
	<?php foreach ($schedules as $schedule): ?>
	<tr>
		<td>

<?php echo $this->Html->link("{$schedule['Folk']['surname']},{$schedule['Folk']['given_name']} {$schedule['Folk']['middle_name']}", array('controller' => 'folks', 'action'=> 'view',$schedule['Folk']['id']));?>		&nbsp;</td> 
		<td><?php echo h($schedule['Folk']['training']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Folk']['email']); ?>&nbsp;</td>
		
		
	</tr>
<?php endforeach; ?>
	</table>
</div>


	<table border="1">
		<tr>

			
			<th>Task</th>
			<th>Status</th>
			<th>User</th>
			<th>Due Date</th>
			<th>Created</th>
			<th>Modified</th>
			<th>Creator</th>
			<th>Completed</th>
		
	</tr>
	<?php foreach ($tasks as $task): ?>
	<tr>
		<!-- <td><?php echo h($task['Task']['id']); ?>&nbsp;</td> -->
	
		<td><?php echo h($task['Task']['task']); ?>&nbsp;</td>
		<td>
			<?php echo h($task['Task']['is_accomplished']); ?>
			<?php
				if (($task['Task']['is_accomplished'] == "")){
					$status = "Pending";
					echo $this->Html->link($status, array('controller' => 'tasks', 'action' => 'approve', $task['Task']['id']));
				}

			?>

			&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['User']['username'], array('controller' => 'users', 'action' => 'view', $task['User']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['due_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['created']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['modified']); ?>&nbsp;</td>
			<td>
			<?php echo $this->Html->link($task['Creator']['username'], array('controller' => 'users', 'action' => 'view', $task['Creator']['id'])); ?>
		</td>
		<td>
			<?php echo "done"; ?>
		</td>
		
	</tr>
<?php endforeach; ?>
	</table>
</div>
<br/>
<div class="events index">

	<table border="1">
	<tr>

			<th>name</th>
	
			<th>date</th>
			
	</tr>
	<?php foreach ($events as $event): ?>
	<tr>

		<td><?php echo h($event['Event']['event_name']); ?>&nbsp;</td>

		<td><?php echo h($event['Event']['event_date']); ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</table>
	

</div>

</div>
<div>
	number of enrolled students:
		<?php echo $school_Years2; ?>
		<br/>
	over all number of students: 
		<?php echo $school_Years3; ?>
</div>

<div>
	Leads: <?php
		echo $leads;
	?>
</div>


<?php

$role = $this->Session->read('Auth.User.role_id'); ?>

	<div class="dashboard">

		<?php foreach($users as $user): ?>

			<div class="user">
				<h2><?php echo "{$user['User']['username']}"; ?></h2>
	

				<div class="tasks">
					<h3>Assigned Tasks</h3>
					<strong>Completed Tasks: 	
						<?php echo count($user['Task']) ?></strong>
					<ul>
					<?php foreach($user['Task'] as $task): ?>
						<li><?php echo $task['task'] ?></li>
					<?php endforeach; ?>	
					</ul>
					<!-- <strong>Pending Tasks: </strong>
					<ul>
					<!-- 		<?php
								//debug($tasks1);
								//echo $tasks1['id'];
								
							?>
						<?php foreach ($tasks1 as $task1): ?>
						<li><?php echo $task1['Task']['task'] ?></li>
						<?php endforeach; ?> -->
					</ul>
				</div>
				<div class="created-tasks">
					<h3>Created Tasks</h3>
					<ul>
						<?php foreach($user['CreatedTasks'] as $task): ?>
							<li><?php echo $task['task'] ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>

		<?php endforeach; ?>

	</div>
</div>
 <div id="graph">
            <div id="results" style="width: 100%; height: 70%; margin: 0 auto"></div>
        </div>

</html>