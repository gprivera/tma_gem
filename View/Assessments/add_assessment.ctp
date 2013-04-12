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