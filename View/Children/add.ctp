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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Children'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		
	</ul>
</div>
