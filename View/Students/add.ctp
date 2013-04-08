<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
		<legend><?php echo __('Add Student'); ?></legend>
	<?php
		echo $this->Form->input('student_number');
		echo $this->Form->input('image',array('type' => 'file'));
		echo $this->Form->input('entry_date');
		echo $this->Form->input('child_id');
	?>
	</fieldset
><?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Children'), array('controller' => 'children', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Child'), array('controller' => 'children', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educational Backgrounds'), array('controller' => 'educational_backgrounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Background'), array('controller' => 'educational_backgrounds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List School Years'), array('controller' => 'school_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School Year'), array('controller' => 'school_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Prerequisites'), array('controller' => 'student_prerequisites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Prerequisite'), array('controller' => 'student_prerequisites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talents'), array('controller' => 'talents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talents', 'action' => 'add')); ?> </li>
	</ul>
