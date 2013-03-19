<div class="coops form">
<?php echo $this->Form->create('Coop'); ?>
	<fieldset>
		<legend><?php echo __('Edit Coop'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('coop');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Coop.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Coop.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Coops'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Coop Members'), array('controller' => 'coop_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coop Member'), array('controller' => 'coop_members', 'action' => 'add')); ?> </li>
	</ul>
</div>
