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
			<li><?php echo $this->Html->link(__('Add Educational Background'), array('controller' => 'EducationalBackgrounds', 'action' => 'addEducationalBackground')); ?> </li>
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
			<li><?php echo $this->Html->link(__('New School Year'), array('controller' => 'school_years', 'action' => 'addSchoolYear')); ?> </li>
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
			<li><?php echo $this->Html->link(__('New Student Prerequisite'), array('controller' => 'student_prerequisites', 'action' => 'add_student')); ?> </li>
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
			<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talents', 'action' => 'add_student')); ?> </li>
		</ul>
	</div>
</div>
