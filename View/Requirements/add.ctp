<div class="requirements form">
<?php echo $this->Form->create('Requirement'); ?>
	<fieldset>
		<legend><?php echo __('Add Requirement'); ?></legend>
	<?php
		echo $this->Form->input('requirement_category_id');
		echo $this->Form->input('requirement');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Requirements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Requirement Categories'), array('controller' => 'requirement_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement Category'), array('controller' => 'requirement_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folk Prerequisites'), array('controller' => 'folk_prerequisites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk Prerequisite'), array('controller' => 'folk_prerequisites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Prerequisites'), array('controller' => 'student_prerequisites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Prerequisite'), array('controller' => 'student_prerequisites', 'action' => 'add')); ?> </li>
	</ul>
</div>
