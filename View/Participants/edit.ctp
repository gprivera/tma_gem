<div class="participants form">
<?php echo $this->Form->create('Participant'); ?>
	<fieldset>
		<legend><?php echo __('Edit Participant'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('event_id');
		echo $this->Form->input('folk_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Participant.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Participant.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Participants'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
	</ul>
</div>
