<div class="assessments index">
	<h2><?php echo __('Assessments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_quarter'); ?></th>
			<th><?php echo $this->Paginator->sort('first_date'); ?></th>
			<th><?php echo $this->Paginator->sort('second_quarter'); ?></th>
			<th><?php echo $this->Paginator->sort('second_date'); ?></th>
			<th><?php echo $this->Paginator->sort('third_quarter'); ?></th>
			<th><?php echo $this->Paginator->sort('third_date'); ?></th>
			<th><?php echo $this->Paginator->sort('fourth_quarter'); ?></th>
			<th><?php echo $this->Paginator->sort('fourth_date'); ?></th>
			<th><?php echo $this->Paginator->sort('school_year_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assessments as $assessment): ?>
	<tr>
		<td><?php echo h($assessment['Assessment']['id']); ?>&nbsp;</td>
		<td><?php echo h($assessment['Assessment']['first_quarter']); ?>&nbsp;</td>
		<td><?php echo h($assessment['Assessment']['first_date']); ?>&nbsp;</td>
		<td><?php echo h($assessment['Assessment']['second_quarter']); ?>&nbsp;</td>
		<td><?php echo h($assessment['Assessment']['second_date']); ?>&nbsp;</td>
		<td><?php echo h($assessment['Assessment']['third_quarter']); ?>&nbsp;</td>
		<td><?php echo h($assessment['Assessment']['third_date']); ?>&nbsp;</td>
		<td><?php echo h($assessment['Assessment']['fourth_quarter']); ?>&nbsp;</td>
		<td><?php echo h($assessment['Assessment']['fourth_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assessment['SchoolYear']['id'], array('controller' => 'school_years', 'action' => 'view', $assessment['SchoolYear']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assessment['Assessment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assessment['Assessment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assessment['Assessment']['id']), null, __('Are you sure you want to delete # %s?', $assessment['Assessment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Assessment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List School Years'), array('controller' => 'school_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School Year'), array('controller' => 'school_years', 'action' => 'add')); ?> </li>
	</ul>
</div>
