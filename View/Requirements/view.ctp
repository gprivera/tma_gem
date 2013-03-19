<div class="requirements view">
<h2><?php  echo __('Requirement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirement Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requirement['RequirementCategory']['id'], array('controller' => 'requirement_categories', 'action' => 'view', $requirement['RequirementCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirement'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['requirement']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Requirement'), array('action' => 'edit', $requirement['Requirement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Requirement'), array('action' => 'delete', $requirement['Requirement']['id']), null, __('Are you sure you want to delete # %s?', $requirement['Requirement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirement Categories'), array('controller' => 'requirement_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement Category'), array('controller' => 'requirement_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folk Prerequisites'), array('controller' => 'folk_prerequisites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk Prerequisite'), array('controller' => 'folk_prerequisites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Prerequisites'), array('controller' => 'student_prerequisites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Prerequisite'), array('controller' => 'student_prerequisites', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Folk Prerequisites'); ?></h3>
	<?php if (!empty($requirement['FolkPrerequisite'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Requirement Id'); ?></th>
		<th><?php echo __('Is Accomplished'); ?></th>
		<th><?php echo __('Folk Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($requirement['FolkPrerequisite'] as $folkPrerequisite): ?>
		<tr>
			<td><?php echo $folkPrerequisite['id']; ?></td>
			<td><?php echo $folkPrerequisite['requirement_id']; ?></td>
			<td><?php echo $folkPrerequisite['is_accomplished']; ?></td>
			<td><?php echo $folkPrerequisite['folk_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'folk_prerequisites', 'action' => 'view', $folkPrerequisite['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'folk_prerequisites', 'action' => 'edit', $folkPrerequisite['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'folk_prerequisites', 'action' => 'delete', $folkPrerequisite['id']), null, __('Are you sure you want to delete # %s?', $folkPrerequisite['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Folk Prerequisite'), array('controller' => 'folk_prerequisites', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Student Prerequisites'); ?></h3>
	<?php if (!empty($requirement['StudentPrerequisite'])): ?>
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
		foreach ($requirement['StudentPrerequisite'] as $studentPrerequisite): ?>
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
