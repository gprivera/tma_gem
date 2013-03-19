<div class="events view">
<h2><?php  echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Name'); ?></dt>
		<dd>
			<?php echo h($event['Event']['event_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Description'); ?></dt>
		<dd>
			<?php echo h($event['Event']['event_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Date'); ?></dt>
		<dd>
			<?php echo h($event['Event']['event_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), null, __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participants'), array('controller' => 'participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participant'), array('controller' => 'participants', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Participants'); ?></h3>
	<?php if (!empty($event['Participant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Folk Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($event['Participant'] as $participant): ?>
		<tr>
			<td><?php echo $participant['id']; ?></td>
			<td><?php echo $participant['event_id']; ?></td>
			<td><?php echo $participant['folk_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'participants', 'action' => 'view', $participant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'participants', 'action' => 'edit', $participant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'participants', 'action' => 'delete', $participant['id']), null, __('Are you sure you want to delete # %s?', $participant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Participant'), array('controller' => 'participants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
