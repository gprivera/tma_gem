<div class="levels view">
<h2><?php  echo __('Level'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($level['Level']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo h($level['Level']['level']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Level'), array('action' => 'edit', $level['Level']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Level'), array('action' => 'delete', $level['Level']['id']), null, __('Are you sure you want to delete # %s?', $level['Level']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Levels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educational Backgrounds'), array('controller' => 'educational_backgrounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Background'), array('controller' => 'educational_backgrounds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List School Years'), array('controller' => 'school_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School Year'), array('controller' => 'school_years', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Books'); ?></h3>
	<?php if (!empty($level['Book'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Author'); ?></th>
		<th><?php echo __('Level Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($level['Book'] as $book): ?>
		<tr>
			<td><?php echo $book['id']; ?></td>
			<td><?php echo $book['title']; ?></td>
			<td><?php echo $book['author']; ?></td>
			<td><?php echo $book['level_id']; ?></td>
			<td><?php echo $book['price']; ?></td>
			<td><?php echo $book['category_id']; ?></td>
			<td><?php echo $book['created']; ?></td>
			<td><?php echo $book['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'books', 'action' => 'view', $book['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'books', 'action' => 'edit', $book['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'books', 'action' => 'delete', $book['id']), null, __('Are you sure you want to delete # %s?', $book['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Educational Backgrounds'); ?></h3>
	<?php if (!empty($level['EducationalBackground'])): ?>
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
		foreach ($level['EducationalBackground'] as $educationalBackground): ?>
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
<div class="related">
	<h3><?php echo __('Related School Years'); ?></h3>
	<?php if (!empty($level['SchoolYear'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Level Id'); ?></th>
		<th><?php echo __('Enrollment Date'); ?></th>
		<th><?php echo __('Year End'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($level['SchoolYear'] as $schoolYear): ?>
		<tr>
			<td><?php echo $schoolYear['id']; ?></td>
			<td><?php echo $schoolYear['student_id']; ?></td>
			<td><?php echo $schoolYear['level_id']; ?></td>
			<td><?php echo $schoolYear['enrollment_date']; ?></td>
			<td><?php echo $schoolYear['year_end']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'school_years', 'action' => 'view', $schoolYear['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'school_years', 'action' => 'edit', $schoolYear['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'school_years', 'action' => 'delete', $schoolYear['id']), null, __('Are you sure you want to delete # %s?', $schoolYear['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New School Year'), array('controller' => 'school_years', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
