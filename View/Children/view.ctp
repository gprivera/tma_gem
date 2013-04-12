<div class="children view">
<h2><?php  echo __('Child'); ?>

</h2>

<?php echo $this->Html->link(__('Enroll Child'), array('controller' => 'children', 'action' => 'enrollChild', $child['Child']['id'])); ?>
<?php echo $this->Html->link(__('Graduate'), array('controller' => 'children', 'action' => 'graduate', $child['Child']['id'])); ?>

	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($child['Child']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($child['Child']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Name'); ?></dt>
		<dd>
			<?php echo h($child['Child']['middle_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Given Name'); ?></dt>
		<dd>
			<?php echo h($child['Child']['given_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($child['Child']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthdate'); ?></dt>
		<dd>
			<?php echo h($child['Child']['birthdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Religion'); ?></dt>
		<dd>
			<?php echo h($child['Child']['religion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Folk'); ?></dt>
		<dd>
			<?php echo $this->Html->link($child['Folk']['full_name'], array('controller' => 'folks', 'action' => 'view', $child['Folk']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Enrolled'); ?></dt>
		<dd>
			<?php echo h($child['Child']['is_enrolled']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Graduate'); ?></dt>
		<dd>
			<?php echo h($child['Child']['is_graduate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Child'), array('action' => 'edit', $child['Child']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Child'), array('action' => 'delete', $child['Child']['id']), null, __('Are you sure you want to delete # %s?', $child['Child']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Children'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Child'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Students'); ?></h3>
	<?php if (!empty($child['Student'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Number'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Entry Date'); ?></th>
		<th><?php echo __('Child Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($child['Student'] as $student): ?>
		<tr>
			<td><?php echo $student['id']; ?></td>
			<td><?php echo $student['student_number']; ?></td>
			<td><?php echo $student['image']; ?></td>
			<td><?php echo $student['entry_date']; ?></td>
			<td><?php echo $student['child_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'students', 'action' => 'delete', $student['id']), null, __('Are you sure you want to delete # %s?', $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
