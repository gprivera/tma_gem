<div class="schoolYears form">
<?php echo $this->Form->create('SchoolYear'); ?>
	<fieldset>
		<legend><?php echo __('Add School Year'); ?></legend>
	<?php
		echo $this->Form->input('student_id');
		echo $this->Form->input('level_id');
		echo $this->Form->input('enrollment_date');
		echo $this->Form->input('year_end');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List School Years'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assessments'), array('controller' => 'assessments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assessment'), array('controller' => 'assessments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educational Backgrounds'), array('controller' => 'educational_backgrounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Background'), array('controller' => 'educational_backgrounds', 'action' => 'add')); ?> </li>
	</ul>
</div>
