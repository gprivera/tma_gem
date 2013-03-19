<div class="coops view">
<h2><?php  echo __('Coop'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coop['Coop']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coop'); ?></dt>
		<dd>
			<?php echo h($coop['Coop']['coop']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coop'), array('action' => 'edit', $coop['Coop']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coop'), array('action' => 'delete', $coop['Coop']['id']), null, __('Are you sure you want to delete # %s?', $coop['Coop']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coops'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coop'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coop Members'), array('controller' => 'coop_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coop Member'), array('controller' => 'coop_members', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Coop Members'); ?></h3>
	<?php if (!empty($coop['CoopMember'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Coop Id'); ?></th>
		<th><?php echo __('Folk Id'); ?></th>
		<th><?php echo __('Date Joined'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($coop['CoopMember'] as $coopMember): ?>
		<tr>
			<td><?php echo $coopMember['id']; ?></td>
			<td><?php echo $coopMember['coop_id']; ?></td>
			<td><?php echo $coopMember['folk_id']; ?></td>
			<td><?php echo $coopMember['date_joined']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'coop_members', 'action' => 'view', $coopMember['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'coop_members', 'action' => 'edit', $coopMember['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'coop_members', 'action' => 'delete', $coopMember['id']), null, __('Are you sure you want to delete # %s?', $coopMember['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Coop Member'), array('controller' => 'coop_members', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
