<?php
	debug($explode);
?>

<div class="notifications form">
<?php echo $this->Form->create('Notification'); ?>
	<fieldset>
		<legend><?php echo __('Add Notification'); ?></legend>
	<?php
		echo $this->Form->input('folk_id');
		echo $this->Form->input('notification');
		echo $this->Form->input('description');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>