<?php
	debug($explode);
?>


<div class="folkPrerequisites form">
<?php echo $this->Form->create('FolkPrerequisite'); ?>
	<fieldset>
		<legend><?php echo __('Add Folk Prerequisite'); ?></legend>
	<?php
		echo $this->Form->input('requirement_id');
		echo $this->Form->input('is_accomplished');
		echo $this->Form->input('folk_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>