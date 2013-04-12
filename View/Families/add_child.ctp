<?php
debug($folks);
debug($explode);
?>
<div class="children form">
<?php echo $this->Form->create('Child'); ?>
	<fieldset>
		<legend><?php echo __('Add Child'); ?></legend>
	<?php
		echo $this->Form->input('surname');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('given_name');
		echo $this->Form->input('address');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('religion');
		echo $this->Form->input('folk_id');
		echo $this->Form->input('is_enrolled');
		echo $this->Form->input('is_graduate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>