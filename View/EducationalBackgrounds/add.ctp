<div class="educationalBackgrounds form">
<?php echo $this->Form->create('EducationalBackground'); ?>
	<fieldset>
		<legend><?php echo __('Add Educational Background'); ?></legend>
	<?php
		echo $this->Form->input('level_id');
		echo $this->Form->input('awards');
		echo $this->Form->input('school_year_id');
		echo $this->Form->input('student_id');
		echo $this->Form->input('school_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Educational Backgrounds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List School Years'), array('controller' => 'school_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School Year'), array('controller' => 'school_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
	</ul>
</div>
