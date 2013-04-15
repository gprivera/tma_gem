<html>
<div id="main">
	<h2><?php echo __('Families'); ?></h2>
<table id="gradient-style">
		<thead>
			<tr>
				<th scope="col"><?php echo $this->Paginator->sort('surname'); ?></th>
				<th scope="col">Contact's Name</th>
				<th scope="col">Email</th>
				<th scope="col">Mobile Number</th>
			</tr>
		</thead>
	
		 <tbody>
			<?php foreach ($folks as $folk): ?>
					<tr>
						<td>
							<?php echo $this->Html->link($folk['Folk']['surname'], array('controller' => 'families', 'action'=> 'view',$folk['Folk']['id'])); ?></td>
						<td><?php echo h($folk['Folk']['surname']); 
							echo ", ";
							echo h($folk['Folk']['middle_name']);
							echo " ";
							echo h($folk['Folk']['given_name']);?>
						<td>
							<?php	echo h($folk['Folk']['email']); ?> </td>
						</td>

						<td>
							<?php	echo h($folk['Folk']['mobile_number']); ?> </td>
						</td>
					
					</tr>
			<?php endforeach; ?>
		</tbody>

	</table>
	<center>
		<p>
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
		</div>
	</center>

</html>