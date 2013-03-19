<div class="educationalBackgrounds index">
	<h2><?php echo __('Educational Backgrounds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('level_id'); ?></th>
			<th><?php echo $this->Paginator->sort('awards'); ?></th>
			<th><?php echo $this->Paginator->sort('school_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('school_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($educationalBackgrounds as $educationalBackground): ?>
	<tr>
		<td><?php echo h($educationalBackground['EducationalBackground']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($educationalBackground['Level']['id'], array('controller' => 'levels', 'action' => 'view', $educationalBackground['Level']['id'])); ?>
		</td>
		<td><?php echo h($educationalBackground['EducationalBackground']['awards']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($educationalBackground['SchoolYear']['id'], array('controller' => 'school_years', 'action' => 'view', $educationalBackground['SchoolYear']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($educationalBackground['Student']['id'], array('controller' => 'students', 'action' => 'view', $educationalBackground['Student']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($educationalBackground['School']['id'], array('controller' => 'schools', 'action' => 'view', $educationalBackground['School']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $educationalBackground['EducationalBackground']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $educationalBackground['EducationalBackground']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $educationalBackground['EducationalBackground']['id']), null, __('Are you sure you want to delete # %s?', $educationalBackground['EducationalBackground']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Educational Background'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List School Years'), array('controller' => 'school_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School Year'), array('controller' => 'school_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
	</ul>
</div>
