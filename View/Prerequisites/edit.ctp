<div class="prerequisites form">
<?php echo $this->Form->create('Prerequisite'); ?>
	<fieldset>
		<legend><?php echo __('Edit Prerequisite'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('requirement_id');
		echo $this->Form->input('status');
		echo $this->Form->input('student_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Prerequisite.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Prerequisite.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Prerequisites'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
