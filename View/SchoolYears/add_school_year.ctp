<div class="schoolYears form">
<?php echo $this->Form->create('SchoolYear'); ?>
	<fieldset>
		<legend><?php echo __('Add School Year'); ?></legend>
	<?php
		echo $this->Form->input('student_id');
		echo $this->Form->input('level_id');
		echo $this->Form->input('enrollment_date');
		echo $this->Form->input('year_end');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>