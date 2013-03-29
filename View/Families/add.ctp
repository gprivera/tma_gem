<div>
<?php echo $this->Form->create('Folk'); ?>
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
		echo $this->Form->input('image');
		echo $this->Form->input('training');
	?>
	</fieldset>

	<fieldset>
		<legend><?php echo __('Add Child'); ?></legend>
	<?php
		echo $this->Form->input('Child.surname');
		echo $this->Form->input('Child.middle_name');
		echo $this->Form->input('Child.given_name');
		echo $this->Form->input('Child.address');
		echo $this->Form->input('Child.birthdate');
		echo $this->Form->input('Child.religion');
		echo $this->Form->input('Child.is_enrolled');
		echo $this->Form->input('Child.is_graduate');
	?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>