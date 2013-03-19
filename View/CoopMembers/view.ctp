<div class="coopMembers view">
<h2><?php  echo __('Coop Member'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coopMember['CoopMember']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coop'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coopMember['Coop']['id'], array('controller' => 'coops', 'action' => 'view', $coopMember['Coop']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Folk'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coopMember['Folk']['id'], array('controller' => 'folks', 'action' => 'view', $coopMember['Folk']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Joined'); ?></dt>
		<dd>
			<?php echo h($coopMember['CoopMember']['date_joined']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coop Member'), array('action' => 'edit', $coopMember['CoopMember']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coop Member'), array('action' => 'delete', $coopMember['CoopMember']['id']), null, __('Are you sure you want to delete # %s?', $coopMember['CoopMember']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coop Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coop Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coops'), array('controller' => 'coops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coop'), array('controller' => 'coops', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
	</ul>
</div>
