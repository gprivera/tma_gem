<div class="coops form">
<?php echo $this->Form->create('Coop'); ?>
	<fieldset>
		<legend><?php echo __('Add Coop'); ?></legend>
	<?php
		echo $this->Form->input('coop');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Coops'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Coop Members'), array('controller' => 'coop_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coop Member'), array('controller' => 'coop_members', 'action' => 'add')); ?> </li>
	</ul>
</div>
