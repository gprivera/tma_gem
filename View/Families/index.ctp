<html>
<div>
	<table border="1">
		<tr>

			
			<th>Family Name</th>
			<th>Contact's Name</th>
			<th>Email</th>
			<th>Mobile Number</th>
			<th>Office Number</th>
		
		
	</tr>
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
			<td>
			<?php	echo h($folk['Folk']['office_number']); ?> </td>
		</td>
		
		
	</tr>
<?php endforeach; ?>
	</table>

</html>