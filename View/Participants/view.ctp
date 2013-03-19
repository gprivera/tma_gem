<div class="participants view">
<h2><?php  echo __('Participant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($participant['Participant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participant['Event']['id'], array('controller' => 'events', 'action' => 'view', $participant['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Folk'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participant['Folk']['id'], array('controller' => 'folks', 'action' => 'view', $participant['Folk']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participant'), array('action' => 'edit', $participant['Participant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participant'), array('action' => 'delete', $participant['Participant']['id']), null, __('Are you sure you want to delete # %s?', $participant['Participant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
	</ul>
</div>
