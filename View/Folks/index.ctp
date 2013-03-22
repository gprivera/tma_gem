<div class="folks index">
	<h2><?php echo __('Folks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('surname'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_name'); ?></th>
			<th><?php echo $this->Paginator->sort('given_name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile_number'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('occupation'); ?></th>
			<th><?php echo $this->Paginator->sort('business_address'); ?></th>
			<th><?php echo $this->Paginator->sort('office_number'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('training'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($folks as $folk): ?>
	<tr>
		<td><?php echo h($folk['Folk']['id']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['surname']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['middle_name']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['given_name']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['address']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['city']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['mobile_number']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['email']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['status']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['occupation']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['business_address']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['office_number']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['gender']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['image']); ?>&nbsp;</td>
		<td><?php echo h($folk['Folk']['training']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $folk['Folk']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $folk['Folk']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $folk['Folk']['id']), null, __('Are you sure you want to delete # %s?', $folk['Folk']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Folk'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coop Members'), array('controller' => 'coop_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coop Member'), array('controller' => 'coop_members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folk Prerequisites'), array('controller' => 'folk_prerequisites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk Prerequisite'), array('controller' => 'folk_prerequisites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participants'), array('controller' => 'participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participant'), array('controller' => 'participants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Children'), array('controller' => 'children', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Child'), array('controller' => 'children', 'action' => 'add')); ?> </li>
	</ul>
</div>
