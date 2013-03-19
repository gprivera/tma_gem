<div class="prerequisites index">
	<h2><?php echo __('Prerequisites'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('requirement_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($prerequisites as $prerequisite): ?>
	<tr>
		<td><?php echo h($prerequisite['Prerequisite']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($prerequisite['Requirement']['id'], array('controller' => 'requirements', 'action' => 'view', $prerequisite['Requirement']['id'])); ?>
		</td>
		<td><?php echo h($prerequisite['Prerequisite']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($prerequisite['Student']['id'], array('controller' => 'students', 'action' => 'view', $prerequisite['Student']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $prerequisite['Prerequisite']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $prerequisite['Prerequisite']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $prerequisite['Prerequisite']['id']), null, __('Are you sure you want to delete # %s?', $prerequisite['Prerequisite']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Prerequisite'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
