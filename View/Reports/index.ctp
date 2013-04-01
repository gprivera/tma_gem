	<h2><?php echo __('Talents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('talents'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($talents as $talent): ?>
	<tr>
		<td><?php echo h($talent['Talent']['id']); ?>&nbsp;</td>
		<td><?php echo h($talent['Talent']['talents']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($talent['Student']['id'], array('controller' => 'students', 'action' => 'view', $talent['Student']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $talent['Talent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $talent['Talent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $talent['Talent']['id']), null, __('Are you sure you want to delete # %s?', $talent['Talent']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>