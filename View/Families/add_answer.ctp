<?php
	debug($url);
	debug($explode);

?>


<div class="answers form">
<?php echo $this->Form->create('Answer'); ?>
	<fieldset>
		<legend><?php echo __('Add Answer'); ?></legend>
	<?php
		$id = "2";
		echo $this->Form->input('folk_id');
		echo $this->Form->input('question_id');
		echo $this->Form->input('answer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>