<div class="participants index">
	<h2><?php echo __('Participants'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('event_id'); ?></th>
			<th><?php echo $this->Paginator->sort('folk_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($participants as $participant): ?>
	<tr>
		<td><?php echo h($participant['Participant']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($participant['Event']['id'], array('controller' => 'events', 'action' => 'view', $participant['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($participant['Folk']['id'], array('controller' => 'folks', 'action' => 'view', $participant['Folk']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $participant['Participant']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $participant['Participant']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $participant['Participant']['id']), null, __('Are you sure you want to delete # %s?', $participant['Participant']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Participant'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
	</ul>
</div>
