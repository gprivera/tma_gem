<div class="folks view">
<h2><?php  echo __('Folk'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Name'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['middle_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Given Name'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['given_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Number'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['mobile_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Occupation'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['occupation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Business Address'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['business_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Office Number'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['office_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Training'); ?></dt>
		<dd>
			<?php echo h($folk['Folk']['training']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Folk'), array('action' => 'edit', $folk['Folk']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Folk'), array('action' => 'delete', $folk['Folk']['id']), null, __('Are you sure you want to delete # %s?', $folk['Folk']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Folks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Answers'); ?></h3>
	<?php if (!empty($folk['Answer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Folk Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Answer'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($folk['Answer'] as $answer): ?>
		<tr>
			<td><?php echo $answer['id']; ?></td>
			<td><?php echo $answer['folk_id']; ?></td>
			<td><?php echo $answer['question_id']; ?></td>
			<td><?php echo $answer['answer']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'answers', 'action' => 'view', $answer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'answers', 'action' => 'edit', $answer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'answers', 'action' => 'delete', $answer['id']), null, __('Are you sure you want to delete # %s?', $answer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Coop Members'); ?></h3>
	<?php if (!empty($folk['CoopMember'])): ?>
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
		foreach ($folk['CoopMember'] as $coopMember): ?>
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
<div class="related">
	<h3><?php echo __('Related Folk Prerequisites'); ?></h3>
	<?php if (!empty($folk['FolkPrerequisite'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Requirement Id'); ?></th>
		<th><?php echo __('Is Accomplished'); ?></th>
		<th><?php echo __('Folk Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($folk['FolkPrerequisite'] as $folkPrerequisite): ?>
		<tr>
			<td><?php echo $folkPrerequisite['id']; ?></td>
			<td><?php echo $folkPrerequisite['requirement_id']; ?></td>
			<td><?php echo $folkPrerequisite['is_accomplished']; ?></td>
			<td><?php echo $folkPrerequisite['folk_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'folk_prerequisites', 'action' => 'view', $folkPrerequisite['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'folk_prerequisites', 'action' => 'edit', $folkPrerequisite['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'folk_prerequisites', 'action' => 'delete', $folkPrerequisite['id']), null, __('Are you sure you want to delete # %s?', $folkPrerequisite['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Folk Prerequisite'), array('controller' => 'folk_prerequisites', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Notifications'); ?></h3>
	<?php if (!empty($folk['Notification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Folk Id'); ?></th>
		<th><?php echo __('Notification'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($folk['Notification'] as $notification): ?>
		<tr>
			<td><?php echo $notification['id']; ?></td>
			<td><?php echo $notification['folk_id']; ?></td>
			<td><?php echo $notification['notification']; ?></td>
			<td><?php echo $notification['description']; ?></td>
			<td><?php echo $notification['date']; ?></td>
			<td><?php echo $notification['created']; ?></td>
			<td><?php echo $notification['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'notifications', 'action' => 'view', $notification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'notifications', 'action' => 'edit', $notification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'notifications', 'action' => 'delete', $notification['id']), null, __('Are you sure you want to delete # %s?', $notification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Participants'); ?></h3>
	<?php if (!empty($folk['Participant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Folk Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($folk['Participant'] as $participant): ?>
		<tr>
			<td><?php echo $participant['id']; ?></td>
			<td><?php echo $participant['event_id']; ?></td>
			<td><?php echo $participant['folk_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'participants', 'action' => 'view', $participant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'participants', 'action' => 'edit', $participant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'participants', 'action' => 'delete', $participant['id']), null, __('Are you sure you want to delete # %s?', $participant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Participant'), array('controller' => 'participants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
