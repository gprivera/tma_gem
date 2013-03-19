<div class="talents view">
<h2><?php  echo __('Talent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($talent['Talent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talents'); ?></dt>
		<dd>
			<?php echo h($talent['Talent']['talents']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($talent['Student']['id'], array('controller' => 'students', 'action' => 'view', $talent['Student']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Talent'), array('action' => 'edit', $talent['Talent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Talent'), array('action' => 'delete', $talent['Talent']['id']), null, __('Are you sure you want to delete # %s?', $talent['Talent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Talents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
