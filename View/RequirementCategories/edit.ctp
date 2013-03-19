<div class="requirementCategories form">
<?php echo $this->Form->create('RequirementCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Requirement Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RequirementCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RequirementCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Requirement Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
	</ul>
</div>
