<html>
	<head>
	</head>
	<body>
		<div id="main">	
			<div id="status">
				<table id="gradient-style">
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
							?></th>
					</tr>
					<?php foreach ($tasks as $task): ?>
						<tr>
						<!-- <td><?php echo h($task['Task']['id']); ?>&nbsp;</td> -->
							<td><?php echo h($task['Task']['task']); ?>&nbsp;</td>
							<td><?php echo h($task['Task']['is_accomplished']); ?>
								<?php
									if (($task['Task']['is_accomplished'] == "")){
										$status = "Pending";
										echo $this->Html->link($status, array('controller' => 'tasks', 'action' => 'approve', $task['Task']['id']));}
								?></td>
							<td><?php echo $this->Html->link($task['User']['username'], array('controller' => 'users', 'action' => 'view', $task['User']['id'])); ?></td>
							<td><?php echo h($task['Task']['due_date']); ?></td>
							<td><?php echo h($task['Task']['created']); ?></td>
							<td><?php echo h($task['Task']['modified']); ?></td>
							<td><?php echo $this->Html->link($task['Creator']['username'], array('controller' => 'users', 'action' => 'view', $task['Creator']['id'])); ?></td>
							<td><?php echo "done"; ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
			<div id="training">
				<table id="gradient-style">
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
							?></th>
					
					</tr>
					<?php foreach ($schedules as $schedule): ?>
						<tr>
							<td><?php echo $this->Html->link("{$schedule['Folk']['surname']},{$schedule['Folk']['given_name']} {$schedule['Folk']['middle_name']}", array('controller' => 'folks', 'action'=> 'view',$schedule['Folk']['id']));?></td> 
										<td><?php echo h($schedule['Folk']['training']); ?></td>
										<td><?php echo h($schedule['Folk']['email']); ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>

			<div id="date">
				<table id="gradient-style">
					<tr>
						<th>Name</th>
						<th>Date
							<?php
								if ($event_count == 0){
									echo "";
								}else{
									echo $event_count;
								}
							?></th>
					</tr>
					<?php foreach ($events as $event): ?>
					<tr>
						<td><?php echo h($event['Event']['event_name']); ?>&nbsp;</td>
						<td><?php echo h($event['Event']['event_date']); ?>&nbsp;</td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>

			<br><br><br><br><br><br>
			<!-- Leads -->
			<div>
				Leads: <?php echo $leads;?>
			</div>
				<?php $role = $this->Session->read('Auth.User.role_id'); ?>
			<div class="dashboard">

				<?php foreach($users as $user): ?>

					<div class="user">
						<h2><?php echo "{$user['User']['username']}"; ?></h2>
						<div class="tasks">
							<h3>Assigned Tasks</h3>
							<strong>Completed Tasks: <?php echo count($user['Task']) ?></strong>
							<ul>
								<?php foreach($user['Task'] as $task): ?>
									<li><?php echo $task['task'] ?></li>
								<?php endforeach; ?>	
							</ul>
							<!--<strong>Pending Tasks: </strong>
								<ul><?php
										//debug($tasks1);
										//echo $tasks1['id'];
									?>
								<?php foreach ($tasks1 as $task1): ?>
								<li><?php echo $task1['Task']['task'] ?></li>
								<?php endforeach; ?> 
							</ul>-->
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
			<div id="graph">
			    <div id="results" style="width: 100%; height: 70%; margin: 0 auto"></div>
			</div>
  		</div>
	</body>
</html>