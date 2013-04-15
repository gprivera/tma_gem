<?php

?>

<div>
<h2> Family: <?php echo h($folk['Folk']['surname']) ?> </h2>

</div>
<div>


<table id="gradient-style">
	<tr>
		<th>Image</th>
		<th>Surname</th>
		<th>Given Name</th>
		<th>Middle Name</th>
		<th>Address</th>
		<th>City</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Status</th>
		<th>Occupation</th>
		<th>Business Address</th>
		<th>Office Number</th>
		<th>Gender</th>
		<th>Training Date</th>
		<th>Actions</th>
	</tr>
	<tr>
		<td><?php echo $this->Html->image("/f_profile/{$folk['Folk']['image']}",array('height'=>'75px','width'=>'px')); ?></td>
		<td><?php echo h($folk['Folk']['surname']); ?></td>
		<td><?php echo h($folk['Folk']['middle_name']); ?></td>
		<td><?php echo h($folk['Folk']['given_name']); ?></td>
		<td><?php echo h($folk['Folk']['address']); ?></td>
		<td><?php echo h($folk['Folk']['city']); ?></td>
		<td><?php echo h($folk['Folk']['mobile_number']); ?></td>
		<td><?php echo h($folk['Folk']['email']); ?></td>
		<td><?php echo h($folk['Folk']['status']); ?></td>
		<td><?php echo h($folk['Folk']['occupation']); ?></td>
		<td><?php echo h($folk['Folk']['business_address']); ?></td>
		<td><?php echo h($folk['Folk']['office_number']); ?></td>
		<td><?php echo h($folk['Folk']['gender']); ?></td>
		<td><?php echo h($folk['Folk']['training']); ?></td>
		<td class="actions">			
				<?php echo $this->Html->image('edit.png', array('alt' => 'edit', 'width' => '29px', 'height' => '30px', 'url' => array('action' => 'edit', $folk['Folk']['id'])))?>
			</td>
	</tr>
</table>




<div class="related">
	<table>
	<h3><?php echo __('Related Answers'); ?></h3>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'families','action' => 'addAnswer')); ?> </li>
		</ul>
	</div>
	<?php if (!empty($folk['Answer'])): ?>
	<table id="gradient-style">
	<tr>

		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Answer'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>

	</tr>


	<?php

		$i = 0;
		foreach ($folk['Answer'] as $answer): ?>

		<tr>
			<td><?php echo $answer['question_id']; ?>

			</td>
			<td><?php echo $answer['answer']; ?></td>
			<td class="actions">

				<?php echo $this->Html->image('view.png', array('alt' => 'view', 'width' => '29px', 'height' => '30px', 'url' =>array('controller' => 'answers', 'action' => 'view', $answer['id'])))?>
				<?php echo $this->Html->image('edit.png', array('alt' => 'edit', 'width' => '29px', 'height' => '30px', 'url' =>array('controller' => 'answers', 'action' => 'edit', $answer['id'])))?>
				<?php echo $this->Form->postLink(
					$this->Html->image('delete.png',
					 array("alt" => __('Delete'), "title" => __('Delete'), 'width' => '29px', 'height' => '30px',)), 
					 array('controller' => 'answers', 'action' => 'delete', $answer['id']), 
					 array('escape' => false, 'confirm' => __('Are you sure you want to delete # %s?')))?>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>
<div class="related">
	<h3><?php echo __('Related Coop Members'); ?></h3>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('New Coop Member'), array('controller' => 'families', 'action' => 'addCoop')); ?> </li>
			</ul>
		</div>
	<?php if (!empty($folk['CoopMember'])): ?>
	<table id="gradient-style">
	<tr>
		
		<th><?php echo __('Coop Id'); ?></th>
		<th><?php echo __('Date Joined'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($folk['CoopMember'] as $coopMember): ?>
		<tr>
			
			<td><?php echo $coopMember['coop_id']; ?></td>
		
			<td><?php echo $coopMember['date_joined']; ?></td>
			<td class="actions">
				<?php echo $this->Html->image('view.png', array('alt' => 'view', 'width' => '29px', 'height' => '30px', 'url' =>array('controller' => 'coop_members', 'action' => 'view', $coopMember['id'])))?>
				<?php echo $this->Html->image('edit.png', array('alt' => 'edit', 'width' => '29px', 'height' => '30px', 'url' =>array('controller' => 'coop_members', 'action' => 'edit', $coopMember['id'])))?>
				<?php echo $this->Form->postLink(
					$this->Html->image('delete.png',
					 array("alt" => __('Delete'), "title" => __('Delete'), 'width' => '29px', 'height' => '30px',)), 
					 array('controller' => 'coop_members', 'action' => 'delete', $coopMember['id']), 
					 array('escape' => false, 'confirm' => __('Are you sure you want to delete # %s?')))?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3><?php echo __('Related Folk Prerequisites'); ?></h3>
		<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Folk Prerequisite'), array('controller' => 'families', 'action' => 'addPrerequisite')); ?> </li>
		</ul>
	</div>
	<?php if (!empty($folk['FolkPrerequisite'])): ?>
	<table id="gradient-style">
	<tr>
	
		<th><?php echo __('Requirement Id'); ?></th>
		<th><?php echo __('Is Accomplished'); ?></th>

		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($folk['FolkPrerequisite'] as $folkPrerequisite): ?>
		<tr>
		
			<td><?php echo $folkPrerequisite['requirement_id']; ?></td>
			<td><?php echo $folkPrerequisite['is_accomplished']; ?></td>
		
			<td class="actions">

				<?php echo $this->Html->image('view.png', array('alt' => 'view', 'width' => '29px', 'height' => '30px', 'url' => array('controller' => 'folk_prerequisites', 'action' => 'view', $folkPrerequisite['id'])))?>
				<?php echo $this->Html->image('edit.png', array('alt' => 'edit', 'width' => '29px', 'height' => '30px', 'url' => array('controller' => 'folk_prerequisites', 'action' => 'edit', $folkPrerequisite['id'])))?>
				<?php echo $this->Form->postLink(
					$this->Html->image('delete.png',
					 array("alt" => __('Delete'), "title" => __('Delete'), 'width' => '29px', 'height' => '30px',)), 
					  array('controller' => 'folk_prerequisites', 'action' => 'delete', $folkPrerequisite['id']), 
					 array('escape' => false, 'confirm' => __('Are you sure you want to delete # %s?')))?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3><?php echo __('Related Notifications'); ?></h3>
		<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'families', 'action' => 'addNotification')); ?> </li>
		</ul>
	</div>
	<?php if (!empty($folk['Notification'])): ?>
	<table id="gradient-style">
	<tr>

		<th><?php echo __('Notification'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Date'); ?></th>

		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($folk['Notification'] as $notification): ?>
		<tr>

			<td><?php echo $notification['notification']; ?></td>
			<td><?php echo $notification['description']; ?></td>
			<td><?php echo $notification['date']; ?></td>

			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'notifications', 'action' => 'view', $notification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'notifications', 'action' => 'edit', $notification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'notifications', 'action' => 'delete', $notification['id']), null, __('Are you sure you want to delete # %s?', $notification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3><?php echo __('Related Participants'); ?></h3>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('New Participant'), array('controller' => 'families', 'action' => 'addParticipant')); ?> </li>
			</ul>
		</div>
	<?php if (!empty($folk['Participant'])): ?>
	<table id="gradient-style">
	<tr>

		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Participant'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($folk['Participant'] as $participant): ?>
		<tr>
			
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

	
</div>
<div class="related">
	<h3><?php echo __('Related Children'); ?></h3>
		<div class="actions">
		<ul>

			<li><?php echo $this->Html->link(__('New Child'), array('controller' => 'families','action' => 'addChild')); ?> </li>
		</ul>
	</div>
	<?php if (!empty($folk['Child'])): ?>
	<table id="gradient-style">
	<tr>
		
		<th><?php echo __('Surname'); ?></th>
		<th><?php echo __('Middle Name'); ?></th>
		<th><?php echo __('Given Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Birthdate'); ?></th>
		<th><?php echo __('Religion'); ?></th>

		<th><?php echo __('Is Enrolled'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($folk['Child'] as $child): ?>
		<tr>
			
			<td><?php echo $child['surname']; ?></td>
			<td><?php echo $child['middle_name']; ?></td>
			<td><?php echo $child['given_name']; ?></td>
			<td><?php echo $child['address']; ?></td>
			<td><?php echo $child['birthdate']; ?></td>
			<td><?php echo $child['religion']; ?></td>
		
			<td><?php echo $child['is_enrolled']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'children', 'action' => 'view', $child['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'children', 'action' => 'edit', $child['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'children', 'action' => 'delete', $child['id']), null, __('Are you sure you want to delete # %s?', $child['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
