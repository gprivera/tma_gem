<div class="parentPrerequisites form">
<?php echo $this->Form->create('ParentPrerequisite'); ?>
	<fieldset>
		<legend><?php echo __('Edit Parent Prerequisite'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('requirement_id');
		echo $this->Form->input('status');
		echo $this->Form->input('folk_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ParentPrerequisite.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ParentPrerequisite.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Parent Prerequisites'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
	</ul>
</div>
