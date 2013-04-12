<div class="students view">
<h2><?php  echo __('Student'); ?></h2>
<?php echo $this->Html->link(__('Add School Year'), array('controller' => 'schoolYears', 'action' => 'addSchoolYear')); ?>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Number'); ?></dt>
		<dd>
			<?php echo h($student['Student']['student_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($student['Student']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry Date'); ?></dt>
		<dd>
			<?php echo h($student['Student']['entry_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child'); ?></dt>
		<dd>
			<?php echo $this->Html->link($student['Child']['full_name'], array('controller' => 'children', 'action' => 'view', $student['Child']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['id']), null, __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Children'), array('controller' => 'children', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Child'), array('controller' => 'children', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educational Backgrounds'), array('controller' => 'educational_backgrounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Background'), array('controller' => 'educational_backgrounds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List School Years'), array('controller' => 'school_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School Year'), array('controller' => 'school_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Prerequisites'), array('controller' => 'student_prerequisites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Prerequisite'), array('controller' => 'student_prerequisites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talents'), array('controller' => 'talents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Educational Backgrounds'); ?></h3>
	<?php if (!empty($student['EducationalBackground'])): ?>
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
		foreach ($student['EducationalBackground'] as $educationalBackground): ?>
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
	<h3><?php echo __('Related Sales'); ?></h3>
	<?php if (!empty($student['Sale'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Date Purchased'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($student['Sale'] as $sale): ?>
		<tr>
			<td><?php echo $sale['id']; ?></td>
			<td><?php echo $sale['book_id']; ?></td>
			<td><?php echo $sale['student_id']; ?></td>
			<td><?php echo $sale['date_purchased']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sales', 'action' => 'view', $sale['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sales', 'action' => 'edit', $sale['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sales', 'action' => 'delete', $sale['id']), null, __('Are you sure you want to delete # %s?', $sale['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related School Years'); ?></h3>
	<?php if (!empty($student['SchoolYear'])): ?>
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
		foreach ($student['SchoolYear'] as $schoolYear): ?>
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
<div class="related">
	<h3><?php echo __('Related Student Prerequisites'); ?></h3>
	<?php if (!empty($student['StudentPrerequisite'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Requirement Id'); ?></th>
		<th><?php echo __('Is Accomplished'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($student['StudentPrerequisite'] as $studentPrerequisite): ?>
		<tr>
			<td><?php echo $studentPrerequisite['id']; ?></td>
			<td><?php echo $studentPrerequisite['requirement_id']; ?></td>
			<td><?php echo $studentPrerequisite['is_accomplished']; ?></td>
			<td><?php echo $studentPrerequisite['student_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'student_prerequisites', 'action' => 'view', $studentPrerequisite['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'student_prerequisites', 'action' => 'edit', $studentPrerequisite['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'student_prerequisites', 'action' => 'delete', $studentPrerequisite['id']), null, __('Are you sure you want to delete # %s?', $studentPrerequisite['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student Prerequisite'), array('controller' => 'student_prerequisites', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Talents'); ?></h3>
	<?php if (!empty($student['Talent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Talents'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($student['Talent'] as $talent): ?>
		<tr>
			<td><?php echo $talent['id']; ?></td>
			<td><?php echo $talent['talents']; ?></td>
			<td><?php echo $talent['student_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'talents', 'action' => 'view', $talent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'talents', 'action' => 'edit', $talent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'talents', 'action' => 'delete', $talent['id']), null, __('Are you sure you want to delete # %s?', $talent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
