<html>
<div>
	<table border="1">
		<tr>

			
			<th>Family Name</th>
			<th>Contact's Name</th>
		
		
		
	</tr>
	<?php foreach ($folks as $folk): ?>
	<tr>
		<td>
<?php echo $this->Html->link($folk['Folk']['surname'], array('controller' => 'families', 'action'=> 'view',$folk['Folk']['id'])); ?></td>
		<td><?php echo h($folk['Folk']['surname']); 
		echo ", ";
				echo h($folk['Folk']['middle_name']);
			echo " ";
				echo h($folk['Folk']['given_name']);
		?></td>
		
		
	</tr>
<?php endforeach; ?>
	</table>

</html>