<?php debug($explode); ?>

<div class="coopMembers form">
<?php echo $this->Form->create('CoopMember'); ?>
	<fieldset>
		<legend><?php echo __('Add Coop Member'); ?></legend>
	<?php
		echo $this->Form->input('coop_id');
		echo $this->Form->input('folk_id');
		echo $this->Form->input('date_joined');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>