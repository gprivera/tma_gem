<div id="main">
	<h2><?php echo __('Children'); ?></h2>
	<table id="gradient-style">
		<thead>
			<tr>
					<th scope="col"><?php echo $this->Paginator->sort('id'); ?></th>
					<th scope="col"><?php echo $this->Paginator->sort('surname'); ?></th>
					<th scope="col"><?php echo $this->Paginator->sort('middle_name'); ?></th>
					<th scope="col"><?php echo $this->Paginator->sort('given_name'); ?></th>
					<th scope="col"><?php echo $this->Paginator->sort('address'); ?></th>
					<th scope="col"><?php echo $this->Paginator->sort('birthdate'); ?></th>
					<th scope="col"><?php echo $this->Paginator->sort('religion'); ?></th>
					<th scope="col"><?php echo $this->Paginator->sort('folk_id'); ?></th>
					<th scope="col"><?php echo $this->Paginator->sort('is_enrolled'); ?></th>
					<th scope="col"><?php echo $this->Paginator->sort('is_graduate'); ?></th>
					<th scope="col" class="actions"><?php echo __('Actions'); ?></th>
					<th></th>
			</tr>
		</thead>

 <tbody>
	    	<?php foreach ($children as $child): ?>
	<tr>
		<td><?php echo h($child['Child']['id']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['surname']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['middle_name']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['given_name']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['address']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['birthdate']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['religion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($child['Folk']['full_name'], array('controller' => 'folks', 'action' => 'view', $child['Folk']['id'])); ?>
		</td>
		<td><?php echo h($child['Child']['is_enrolled']); ?>&nbsp;</td>
		<td><?php echo h($child['Child']['is_graduate']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->image('view.png', array('alt' => 'view', 'width' => '29px', 'height' => '30px', 'url' =>array('action' => 'view', $child['Child']['id'])))?>
			
			<?php echo $this->Html->image('edit.png', array('alt' => 'edit', 'width' => '29px', 'height' => '30px', 'url' => array('action' => 'edit', $child['Child']['id'])))?>

			<?php echo $this->Form->postLink(
			$this->Html->image('delete.png',
			 array("alt" => __('Delete'), "title" => __('Delete'), 'width' => '29px', 'height' => '30px',)), 
			 array('action' => 'delete', $child['Child']['id']), 
			 array('escape' => false, 'confirm' => __('Are you sure you want to delete # %s?')))?>


		</td><td>
		<?php
	$enrolled = $child['Child']['is_enrolled'];
	$graduate = $child['Child']['is_graduate'];
	if ($enrolled == 1){
		echo " ENROLLED ";
	}else {
		echo $this->Html->link(__(' Enroll '), array('action' => 'enroll', $child['Child']['id']));
	}
	if ($graduate == 1){
		echo " GRADUATE ";
	}else {
		echo $this->Html->link(__(' Graduate '), array('action' => 'graduate', $child['Child']['id']));
	}

?>
			
</td>
	</tr>
<?php endforeach; ?>

	    </tbody>
	
	</table>
	<p>
		<center>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>	</p>
				<div class="paging">
				<?php
					echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
					echo $this->Paginator->numbers(array('separator' => ''));
					echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
				?>
		</center>
	</div>
	
</div>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Child'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Folks'), array('controller' => 'folks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Folk'), array('controller' => 'folks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
