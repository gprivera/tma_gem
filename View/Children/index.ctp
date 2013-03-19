<div class="children index">
	<h2><?php echo __('Children'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('surname'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_name'); ?></th>
			<th><?php echo $this->Paginator->sort('given_name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('birthdate'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('religion'); ?></th>
			<th><?php echo $this->Paginator->sort('folk_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_enrolled'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($children as $child): ?>
	<tr>
		<td><?php echo h($child['Child']['id']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['surname']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['middle_name']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['given_name']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['address']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['birthdate']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['age']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['religion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($child['Folk']['id'], array('controller' => 'folks', 'action' => 'view', $child['Folk']['id'])); ?>
		</td>
		<td><?php echo h($child['Child']['is_enrolled']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $child['Child']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $child['Child']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $child['Child']['id']), null, __('Are you sure you want to delete # %s?', $child['Child']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Child'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folks'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
