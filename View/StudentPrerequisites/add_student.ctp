
<div class="studentPrerequisites form">
<?php echo $this->Form->create('StudentPrerequisite'); ?>
	<fieldset>
		<legend><?php echo __('Add Student Prerequisite'); ?></legend>
	<?php
		echo $this->Form->input('requirement_id');
		echo $this->Form->input('is_accomplished');
		echo $this->Form->input('student_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>