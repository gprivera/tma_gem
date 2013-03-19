<div class="assessments form">
<?php echo $this->Form->create('Assessment'); ?>
	<fieldset>
		<legend><?php echo __('Add Assessment'); ?></legend>
	<?php
		echo $this->Form->input('first_quarter');
		echo $this->Form->input('first_date');
		echo $this->Form->input('second_quarter');
		echo $this->Form->input('second_date');
		echo $this->Form->input('third_quarter');
		echo $this->Form->input('third_date');
		echo $this->Form->input('fourth_quarter');
		echo $this->Form->input('fourth_date');
		echo $this->Form->input('school_year_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Assessments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List School Years'), array('controller' => 'school_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School Year'), array('controller' => 'school_years', 'action' => 'add')); ?> </li>
	</ul>
</div>
