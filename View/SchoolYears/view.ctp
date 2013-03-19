<div class="schoolYears view">
<h2><?php  echo __('School Year'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($schoolYear['SchoolYear']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($schoolYear['Student']['id'], array('controller' => 'students', 'action' => 'view', $schoolYear['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo $this->Html->link($schoolYear['Level']['id'], array('controller' => 'levels', 'action' => 'view', $schoolYear['Level']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enrollment Date'); ?></dt>
		<dd>
			<?php echo h($schoolYear['SchoolYear']['enrollment_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year End'); ?></dt>
		<dd>
			<?php echo h($schoolYear['SchoolYear']['year_end']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit School Year'), array('action' => 'edit', $schoolYear['SchoolYear']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete School Year'), array('action' => 'delete', $schoolYear['SchoolYear']['id']), null, __('Are you sure you want to delete # %s?', $schoolYear['SchoolYear']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List School Years'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School Year'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assessments'), array('controller' => 'assessments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assessment'), array('controller' => 'assessments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educational Backgrounds'), array('controller' => 'educational_backgrounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Background'), array('controller' => 'educational_backgrounds', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Assessments'); ?></h3>
	<?php if (!empty($schoolYear['Assessment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Quarter'); ?></th>
		<th><?php echo __('First Date'); ?></th>
		<th><?php echo __('Second Quarter'); ?></th>
		<th><?php echo __('Second Date'); ?></th>
		<th><?php echo __('Third Quarter'); ?></th>
		<th><?php echo __('Third Date'); ?></th>
		<th><?php echo __('Fourth Quarter'); ?></th>
		<th><?php echo __('Fourth Date'); ?></th>
		<th><?php echo __('School Year Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($schoolYear['Assessment'] as $assessment): ?>
		<tr>
			<td><?php echo $assessment['id']; ?></td>
			<td><?php echo $assessment['first_quarter']; ?></td>
			<td><?php echo $assessment['first_date']; ?></td>
			<td><?php echo $assessment['second_quarter']; ?></td>
			<td><?php echo $assessment['second_date']; ?></td>
			<td><?php echo $assessment['third_quarter']; ?></td>
			<td><?php echo $assessment['third_date']; ?></td>
			<td><?php echo $assessment['fourth_quarter']; ?></td>
			<td><?php echo $assessment['fourth_date']; ?></td>
			<td><?php echo $assessment['school_year_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'assessments', 'action' => 'view', $assessment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'assessments', 'action' => 'edit', $assessment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'assessments', 'action' => 'delete', $assessment['id']), null, __('Are you sure you want to delete # %s?', $assessment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Assessment'), array('controller' => 'assessments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Educational Backgrounds'); ?></h3>
	<?php if (!empty($schoolYear['EducationalBackground'])): ?>
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
		foreach ($schoolYear['EducationalBackground'] as $educationalBackground): ?>
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
