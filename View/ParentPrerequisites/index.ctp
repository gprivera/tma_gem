<div class="parentPrerequisites index">
	<h2><?php echo __('Parent Prerequisites'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('requirement_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('folk_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($parentPrerequisites as $parentPrerequisite): ?>
	<tr>
		<td><?php echo h($parentPrerequisite['ParentPrerequisite']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($parentPrerequisite['Requirement']['id'], array('controller' => 'requirements', 'action' => 'view', $parentPrerequisite['Requirement']['id'])); ?>
		</td>
		<td><?php echo h($parentPrerequisite['ParentPrerequisite']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($parentPrerequisite['Folk']['id'], array('controller' => 'folks', 'action' => 'view', $parentPrerequisite['Folk']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $parentPrerequisite['ParentPrerequisite']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $parentPrerequisite['ParentPrerequisite']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $parentPrerequisite['ParentPrerequisite']['id']), null, __('Are you sure you want to delete # %s?', $parentPrerequisite['ParentPrerequisite']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Parent Prerequisite'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
	</ul>
</div>
