<div class="folkPrerequisites index">
	<h2><?php echo __('Folk Prerequisites'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('requirement_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_accomplished'); ?></th>
			<th><?php echo $this->Paginator->sort('folk_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($folkPrerequisites as $folkPrerequisite): ?>
	<tr>
		<td><?php echo h($folkPrerequisite['FolkPrerequisite']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($folkPrerequisite['Requirement']['id'], array('controller' => 'requirements', 'action' => 'view', $folkPrerequisite['Requirement']['id'])); ?>
		</td>
		<td><?php echo h($folkPrerequisite['FolkPrerequisite']['is_accomplished']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($folkPrerequisite['Folk']['id'], array('controller' => 'folks', 'action' => 'view', $folkPrerequisite['Folk']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $folkPrerequisite['FolkPrerequisite']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $folkPrerequisite['FolkPrerequisite']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $folkPrerequisite['FolkPrerequisite']['id']), null, __('Are you sure you want to delete # %s?', $folkPrerequisite['FolkPrerequisite']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Folk Prerequisite'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
	</ul>
</div>
