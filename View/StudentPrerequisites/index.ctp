<div class="studentPrerequisites index">
	<h2><?php echo __('Student Prerequisites'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('requirement_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_accomplished'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($studentPrerequisites as $studentPrerequisite): ?>
	<tr>
		<td><?php echo h($studentPrerequisite['StudentPrerequisite']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($studentPrerequisite['Requirement']['id'], array('controller' => 'requirements', 'action' => 'view', $studentPrerequisite['Requirement']['id'])); ?>
		</td>
		<td><?php echo h($studentPrerequisite['StudentPrerequisite']['is_accomplished']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($studentPrerequisite['Student']['id'], array('controller' => 'students', 'action' => 'view', $studentPrerequisite['Student']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentPrerequisite['StudentPrerequisite']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentPrerequisite['StudentPrerequisite']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentPrerequisite['StudentPrerequisite']['id']), null, __('Are you sure you want to delete # %s?', $studentPrerequisite['StudentPrerequisite']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Student Prerequisite'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
