<div class="coopMembers index">
	<h2><?php echo __('Coop Members'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('coop_id'); ?></th>
			<th><?php echo $this->Paginator->sort('folk_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_joined'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($coopMembers as $coopMember): ?>
	<tr>
		<td><?php echo h($coopMember['CoopMember']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($coopMember['Coop']['id'], array('controller' => 'coops', 'action' => 'view', $coopMember['Coop']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($coopMember['Folk']['full_name'], array('controller' => 'folks', 'action' => 'view', $coopMember['Folk']['id'])); ?>
		</td>
		<td><?php echo h($coopMember['CoopMember']['date_joined']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coopMember['CoopMember']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coopMember['CoopMember']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coopMember['CoopMember']['id']), null, __('Are you sure you want to delete # %s?', $coopMember['CoopMember']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Coop Member'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Coops'), array('controller' => 'coops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coop'), array('controller' => 'coops', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
	</ul>
</div>
