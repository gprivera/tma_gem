<div class="folkPrerequisites form">
<?php echo $this->Form->create('FolkPrerequisite'); ?>
	<fieldset>
		<legend><?php echo __('Edit Folk Prerequisite'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('requirement_id');
		echo $this->Form->input('is_accomplished');
		echo $this->Form->input('folk_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FolkPrerequisite.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FolkPrerequisite.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Folk Prerequisites'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
	</ul>
</div>
