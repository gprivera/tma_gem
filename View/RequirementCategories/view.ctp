<div class="requirementCategories view">
<h2><?php  echo __('Requirement Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($requirementCategory['RequirementCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($requirementCategory['RequirementCategory']['category']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Requirement Category'), array('action' => 'edit', $requirementCategory['RequirementCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Requirement Category'), array('action' => 'delete', $requirementCategory['RequirementCategory']['id']), null, __('Are you sure you want to delete # %s?', $requirementCategory['RequirementCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirement Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Requirements'); ?></h3>
	<?php if (!empty($requirementCategory['Requirement'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Requirement Category Id'); ?></th>
		<th><?php echo __('Requirement'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($requirementCategory['Requirement'] as $requirement): ?>
		<tr>
			<td><?php echo $requirement['id']; ?></td>
			<td><?php echo $requirement['requirement_category_id']; ?></td>
			<td><?php echo $requirement['requirement']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'requirements', 'action' => 'view', $requirement['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'requirements', 'action' => 'edit', $requirement['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'requirements', 'action' => 'delete', $requirement['id']), null, __('Are you sure you want to delete # %s?', $requirement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
