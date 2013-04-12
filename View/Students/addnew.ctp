<?php
debug($explode);
?>

<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
		<legend><?php echo __('Add Student'); ?></legend>
	<?php
		echo $this->Form->input('student_number');
		//echo $this->Form->input('image',array('type' => 'file'));
		echo $this->Form->input('entry_date');
		echo $this->Form->input('child_id');
	?>
	</fieldset
><?php echo $this->Form->end(__('Submit')); ?>
</div>