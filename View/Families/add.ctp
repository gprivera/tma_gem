<div>
<?php echo $this->Form->create('Folk', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Folk'); ?></legend>
	<?php
		echo $this->Form->input('surname');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('given_name');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('mobile_number');
		echo $this->Form->input('email');
		echo $this->Form->input('status');
		echo $this->Form->input('occupation');
		echo $this->Form->input('business_address');
		echo $this->Form->input('office_number');
		echo $this->Form->input('gender');
		echo $this->Form->input('image', array('type' => 'file'));
		echo $this->Form->input('training');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>