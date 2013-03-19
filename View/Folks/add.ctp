<div class="folks form">
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
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Folks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coop Members'), array('controller' => 'coop_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coop Member'), array('controller' => 'coop_members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Folk Prerequisites'), array('controller' => 'folk_prerequisites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk Prerequisite'), array('controller' => 'folk_prerequisites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participants'), array('controller' => 'participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participant'), array('controller' => 'participants', 'action' => 'add')); ?> </li>
	</ul>
</div>
