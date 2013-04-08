<div>
<p>
<?php echo $this->Html->link('Students', array('controller' => 'reports', 'action' => 'students', '')); ?> &nbsp;
<?php echo $this->Html->link('Enrolled Student', array('controller' => 'reports', 'action' => 'students', 'enrolled_students')); ?> &nbsp;
<?php echo $this->Html->link('Enrolled Student: level', array('controller' => 'reports','action'=> 'students', 'level')); ?> &nbsp;
<?php echo $this->Html->link('Enrolled Student: talents', array('controller' => 'reports','action'=> 'students', 'talents')); ?> &nbsp;
<br/>
<?php
	echo $id;
?>
</p>

<?php

if($id == null){ ?>
	</div>
<h2><?php echo __('Students'); ?></h2>
	<table cellpadding="0" cellspacing="0" border="1">
	<tr>
			
			<th><?php echo $this->Paginator->sort('Student.student_number'); ?></th>
			<th><?php echo $this->Paginator->sort('Child.Surname'); ?></th>
			<th><?php echo $this->Paginator->sort('Student.image'); ?></th>
			<th><?php echo $this->Paginator->sort('Student.entry_date'); ?></th>

			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($students as $student): ?>
	<tr>
	
		<td><?php echo h($student['Student']['student_number']); ?>&nbsp;</td>
		<td>
<?php echo h("{$student['Child']['surname']}, {$student['Child']['given_name']} {$student['Child']['middle_name']}");?>&nbsp;</td>&nbsp;</td>
		<td><?php echo h($student['Student']['image']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['entry_date']); ?>&nbsp;</td>
	
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $student['Student']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $student['Student']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $student['Student']['id']), null, __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>


<div>

<?php }elseif($id == "enrolled_students"){
	?>

<h2><?php echo __('Currently Enrolled Students'); ?></h2>
	<table cellpadding="0" cellspacing="0" border="1">
	<tr>
			
			<th><?php echo $this->Paginator->sort('Student.student_number'); ?></th>
			<th><?php echo $this->Paginator->sort('SchoolYear.Surname'); ?></th>
			<th><?php echo $this->Paginator->sort('Student.image'); ?></th>
			<th><?php echo $this->Paginator->sort('Student.entry_date'); ?></th>
			<th><?php echo $this->Paginator->sort('Student.child_id'); ?></th>
			<th><?php echo $this->Paginator->sort('SchoolYear.level_id'); ?></th>
			<th><?php echo $this->Paginator->sort('SchoolYear.enrollment_date'); ?></th>
			<th><?php echo $this->Paginator->sort('SchoolYear.year_end'); ?></th>
			<th><?php echo $this->Paginator->sort('Level.level'); ?></th>
			

			
	</tr>
	<?php foreach ($schoolYears as $schoolYear):?>
	<tr>
	
		<td><?php echo h($schoolYear['Student']['student_number']); ?>&nbsp;</td>
		
<td>
<?php echo h("{$schoolYear['Student']['Child']['surname']}, {$schoolYear['Student']['Child']['given_name']} {$schoolYear['Student']['Child']['middle_name']}");?>&nbsp;</td>
		<td><?php echo h($schoolYear['Student']['image']); ?>&nbsp;</td>
		<td><?php echo h($schoolYear['Student']['entry_date']); ?>&nbsp;</td>
		<td>
	<?php echo $this->Html->link($schoolYear['Student']['child_id'], array('controller' => 'children', 'action' => 'view', $schoolYear['Student']['child_id'])); ?>
		</td>
		<td><?php echo h($schoolYear['SchoolYear']['level_id']); ?>&nbsp;</td>
		<td><?php echo h($schoolYear['SchoolYear']['enrollment_date']); ?>&nbsp;</td>
		<td><?php echo h($schoolYear['SchoolYear']['year_end']); ?>&nbsp;</td>
		<td><?php echo h($schoolYear['Level']['level']); ?>&nbsp;</td>
	
	</tr>
<?php endforeach; ?>
</table>
</div>

<div>
	
<?php }elseif($id == "talents"){ ?>
<?php

?>
<?php } ?>
	