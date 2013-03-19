<div class="studentPrerequisites view">
<h2><?php  echo __('Student Prerequisite'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentPrerequisite['StudentPrerequisite']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentPrerequisite['Requirement']['id'], array('controller' => 'requirements', 'action' => 'view', $studentPrerequisite['Requirement']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Accomplished'); ?></dt>
		<dd>
			<?php echo h($studentPrerequisite['StudentPrerequisite']['is_accomplished']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentPrerequisite['Student']['id'], array('controller' => 'students', 'action' => 'view', $studentPrerequisite['Student']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student Prerequisite'), array('action' => 'edit', $studentPrerequisite['StudentPrerequisite']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Prerequisite'), array('action' => 'delete', $studentPrerequisite['StudentPrerequisite']['id']), null, __('Are you sure you want to delete # %s?', $studentPrerequisite['StudentPrerequisite']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Prerequisites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Prerequisite'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
