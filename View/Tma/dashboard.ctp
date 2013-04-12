<html>
	
<?php
$size=count($dates);
$size--;

?>
	<head>
	</head>
<div>	
<div>
		<table border="1">
		<tr>
			<th>Family</th>
			<th>Training Schedule</th>
			<th>Email
			<?php
			if ($schedule_count == 0){
				echo "";
			}else{
				echo $schedule_count;
			}
			?>



		</th>
		
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
			<th>Completed
		<?php
			if ($task_count == 0){
				echo "";
			}else{
				echo $task_count;
			}
			?>

			</th>
		
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
			<th>date
				<?php
				if ($event_count == 0){
				echo "";
			}else{
				echo $event_count;
			}
				?>

			</th>
			
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

<div>

<table border="1">
		<tr>
			<th>Notification</th>
			<th>Folk_id</th>
		
			<th>
		<?php
			if ($notification_count == 0){
				echo "";
			}else{
				echo $notification_count;
			}
			?>

			</th>
		
	</tr>

	<?php foreach ($notifications as $notification): ?>
	<tr>
		
		<td><?php echo h($notification['Notification']['notification']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['folk_id']); ?>&nbsp;</td>
		
			
	
		
	</tr>
<?php endforeach; ?>
	</table>
</div>

</html>