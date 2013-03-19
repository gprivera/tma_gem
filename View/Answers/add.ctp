<div class="answers form">
<?php echo $this->Form->create('Answer'); ?>
	<fieldset>
		<legend><?php echo __('Add Answer'); ?></legend>
	<?php
		echo $this->Form->input('folk_id');
		echo $this->Form->input('question_id');
		echo $this->Form->input('answer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Answers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
