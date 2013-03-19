<div class="folkPrerequisites view">
<h2><?php  echo __('Folk Prerequisite'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($folkPrerequisite['FolkPrerequisite']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($folkPrerequisite['Requirement']['id'], array('controller' => 'requirements', 'action' => 'view', $folkPrerequisite['Requirement']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Accomplished'); ?></dt>
		<dd>
			<?php echo h($folkPrerequisite['FolkPrerequisite']['is_accomplished']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Folk'); ?></dt>
		<dd>
			<?php echo $this->Html->link($folkPrerequisite['Folk']['id'], array('controller' => 'folks', 'action' => 'view', $folkPrerequisite['Folk']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Folk Prerequisite'), array('action' => 'edit', $folkPrerequisite['FolkPrerequisite']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Folk Prerequisite'), array('action' => 'delete', $folkPrerequisite['FolkPrerequisite']['id']), null, __('Are you sure you want to delete # %s?', $folkPrerequisite['FolkPrerequisite']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Folk Prerequisites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk Prerequisite'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
	</ul>
</div>
