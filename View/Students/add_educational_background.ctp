div class="educationalBackgrounds form">
<?php echo $this->Form->create('EducationalBackground'); ?>
	<fieldset>
		<legend><?php echo __('Add Educational Background'); ?></legend>
	<?php
		echo $this->Form->input('level_id');
		echo $this->Form->input('awards');
		echo $this->Form->input('school_year_id');
		echo $this->Form->input('student_id');
		echo $this->Form->input('school_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>