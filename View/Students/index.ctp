<div id="main">
	<h2><?php echo __('Students'); ?></h2>
	<table id="gradient-style">
		<thead>
			<tr>
					<th scope="col"><?php echo $this->Paginator->sort('id'); ?></th>
					<th scope="col"><?php echo $this->Paginator->sort('student_number'); ?></th>
					<th scope="col"><?php echo $this->Paginator->sort('entry_date'); ?></th>
					<th scope="col"><?php echo $this->Paginator->sort('child_id'); ?></th>
					<th scope="col" class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($students as $student): ?>
				<tr>
					<td><?php echo h($student['Student']['id']); ?>&nbsp;</td>
					<td><?php echo h($student['Student']['student_number']); ?>&nbsp;</td>
					<td><?php echo h($student['Student']['entry_date']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($student['Child']['full_name'], array('controller' => 'children', 'action' => 'view', $student['Child']['id'])); ?>
					</td>

					<td class="actions">
						<?php echo $this->Html->image('view.png', array('alt' => 'view', 'width' => '29px', 'height' => '30px', 'url' =>array('action' => 'view', $student['Student']['id'])))?>
						<?php echo $this->Html->image('edit.png', array('alt' => 'edit', 'width' => '29px', 'height' => '30px', 'url' =>array('action' => 'view', $student['Student']['id'])))?>
				

				<?php echo $this->Form->postLink(
				$this->Html->image('delete.png',
				 array("alt" => __('Delete'), "title" => __('Delete'), 'width' => '29px', 'height' => '30px',)), 
				 array('action' => 'delete', $student['Student']['id']), 
				 array('escape' => false, 'confirm' => __('Are you sure you want to delete # %s?')))?>

						
					</td>
				</tr>
			<?php endforeach; ?>
		<tbody>
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