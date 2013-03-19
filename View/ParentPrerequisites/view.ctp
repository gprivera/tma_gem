<div class="parentPrerequisites view">
<h2><?php  echo __('Parent Prerequisite'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($parentPrerequisite['ParentPrerequisite']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parentPrerequisite['Requirement']['id'], array('controller' => 'requirements', 'action' => 'view', $parentPrerequisite['Requirement']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($parentPrerequisite['ParentPrerequisite']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Folk'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parentPrerequisite['Folk']['id'], array('controller' => 'folks', 'action' => 'view', $parentPrerequisite['Folk']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parent Prerequisite'), array('action' => 'edit', $parentPrerequisite['ParentPrerequisite']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Parent Prerequisite'), array('action' => 'delete', $parentPrerequisite['ParentPrerequisite']['id']), null, __('Are you sure you want to delete # %s?', $parentPrerequisite['ParentPrerequisite']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parent Prerequisites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Prerequisite'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
	</ul>
</div>
