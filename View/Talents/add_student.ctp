<div class="talents form">
<?php echo $this->Form->create('Talent'); ?>
	<fieldset>
		<legend><?php echo __('Add Talent'); ?></legend>
	<?php
		echo $this->Form->input('talents');
		echo $this->Form->input('student_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>