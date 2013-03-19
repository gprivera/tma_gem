<div class="schools view">
<h2><?php  echo __('School'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($school['School']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School Name'); ?></dt>
		<dd>
			<?php echo h($school['School']['school_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit School'), array('action' => 'edit', $school['School']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete School'), array('action' => 'delete', $school['School']['id']), null, __('Are you sure you want to delete # %s?', $school['School']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educational Backgrounds'), array('controller' => 'educational_backgrounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Background'), array('controller' => 'educational_backgrounds', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Educational Backgrounds'); ?></h3>
	<?php if (!empty($school['EducationalBackground'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Level Id'); ?></th>
		<th><?php echo __('Awards'); ?></th>
		<th><?php echo __('School Year Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('School Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($school['EducationalBackground'] as $educationalBackground): ?>
		<tr>
			<td><?php echo $educationalBackground['id']; ?></td>
			<td><?php echo $educationalBackground['level_id']; ?></td>
			<td><?php echo $educationalBackground['awards']; ?></td>
			<td><?php echo $educationalBackground['school_year_id']; ?></td>
			<td><?php echo $educationalBackground['student_id']; ?></td>
			<td><?php echo $educationalBackground['school_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'educational_backgrounds', 'action' => 'view', $educationalBackground['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'educational_backgrounds', 'action' => 'edit', $educationalBackground['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'educational_backgrounds', 'action' => 'delete', $educationalBackground['id']), null, __('Are you sure you want to delete # %s?', $educationalBackground['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Educational Background'), array('controller' => 'educational_backgrounds', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
