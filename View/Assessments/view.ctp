<div class="assessments view">
<h2><?php  echo __('Assessment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Quarter'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['first_quarter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Date'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['first_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Second Quarter'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['second_quarter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Second Date'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['second_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Third Quarter'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['third_quarter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Third Date'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['third_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fourth Quarter'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['fourth_quarter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fourth Date'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['fourth_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assessment['SchoolYear']['id'], array('controller' => 'school_years', 'action' => 'view', $assessment['SchoolYear']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assessment'), array('action' => 'edit', $assessment['Assessment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assessment'), array('action' => 'delete', $assessment['Assessment']['id']), null, __('Are you sure you want to delete # %s?', $assessment['Assessment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assessments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assessment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List School Years'), array('controller' => 'school_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School Year'), array('controller' => 'school_years', 'action' => 'add')); ?> </li>
	</ul>
</div>
