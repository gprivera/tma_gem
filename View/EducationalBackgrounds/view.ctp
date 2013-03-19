<div class="educationalBackgrounds view">
<h2><?php  echo __('Educational Background'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($educationalBackground['EducationalBackground']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educationalBackground['Level']['id'], array('controller' => 'levels', 'action' => 'view', $educationalBackground['Level']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Awards'); ?></dt>
		<dd>
			<?php echo h($educationalBackground['EducationalBackground']['awards']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educationalBackground['SchoolYear']['id'], array('controller' => 'school_years', 'action' => 'view', $educationalBackground['SchoolYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educationalBackground['Student']['id'], array('controller' => 'students', 'action' => 'view', $educationalBackground['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educationalBackground['School']['id'], array('controller' => 'schools', 'action' => 'view', $educationalBackground['School']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Educational Background'), array('action' => 'edit', $educationalBackground['EducationalBackground']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Educational Background'), array('action' => 'delete', $educationalBackground['EducationalBackground']['id']), null, __('Are you sure you want to delete # %s?', $educationalBackground['EducationalBackground']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Educational Backgrounds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Background'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List School Years'), array('controller' => 'school_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School Year'), array('controller' => 'school_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
	</ul>
</div>
