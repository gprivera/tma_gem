<div>
	<table border="1">
		<tr>

			
			<th>Task</th>
			<th>Is Accomplished</th>
			<th>User</th>
			<th>Due Date</th>
			<th>Created</th>
			<th>Modified</th>
			<th>Creator</th>
		
	</tr>
	<?php foreach ($tasks as $task): ?>
	<tr>
		<!-- <td><?php echo h($task['Task']['id']); ?>&nbsp;</td> -->
	
		<td><?php echo h($task['Task']['task']); ?>&nbsp;</td>
		<td>
			<?php echo h($task['Task']['is_accomplished']); ?>
			<?php
				if (($task['Task']['is_accomplished'] == "")){
					echo "Pending";
				}else{

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


	<h1>MY CODE!</h1>

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
