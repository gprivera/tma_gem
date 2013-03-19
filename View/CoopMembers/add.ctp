<div class="coopMembers form">
<?php echo $this->Form->create('CoopMember'); ?>
	<fieldset>
		<legend><?php echo __('Add Coop Member'); ?></legend>
	<?php
		echo $this->Form->input('coop_id');
		echo $this->Form->input('folk_id');
		echo $this->Form->input('date_joined');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Coop Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Coops'), array('controller' => 'coops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coop'), array('controller' => 'coops', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
	</ul>
</div>
