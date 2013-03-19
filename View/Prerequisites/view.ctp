<div class="prerequisites view">
<h2><?php  echo __('Prerequisite'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($prerequisite['Prerequisite']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($prerequisite['Requirement']['id'], array('controller' => 'requirements', 'action' => 'view', $prerequisite['Requirement']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($prerequisite['Prerequisite']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($prerequisite['Student']['id'], array('controller' => 'students', 'action' => 'view', $prerequisite['Student']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prerequisite'), array('action' => 'edit', $prerequisite['Prerequisite']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Prerequisite'), array('action' => 'delete', $prerequisite['Prerequisite']['id']), null, __('Are you sure you want to delete # %s?', $prerequisite['Prerequisite']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Prerequisites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prerequisite'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
