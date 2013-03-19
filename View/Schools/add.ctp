<div class="schools form">
<?php echo $this->Form->create('School'); ?>
	<fieldset>
		<legend><?php echo __('Add School'); ?></legend>
	<?php
		echo $this->Form->input('school_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Schools'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Educational Backgrounds'), array('controller' => 'educational_backgrounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Background'), array('controller' => 'educational_backgrounds', 'action' => 'add')); ?> </li>
	</ul>
</div>
