<?php
debug($levels);

?>
<?php foreach ($levels as $level): ?>
	<?php echo $this->Html->link($level['Level']['level'], array('controller' => 'reports','action'=> 'levels',$level['Level']['level'])); ?> &nbsp;	
<?php endforeach; ?>
<?php if($id != null){ ?>
</div>
<h2><?php echo __('Students by Year Level:'.$id); ?></h2>
	<table cellpadding="0" cellspacing="0" border="1">
	<tr>
			<th>Student ID</th>
			<th>Level</th>	
	</tr>
	<?php foreach ($gaps as $gap): ?>
	<tr>
		<td><?php echo h($gap['SchoolYear']['id']); ?>&nbsp;</td>
		<td><?php echo h($gap['Level']['level']); ?>&nbsp;</td>
	
	
		
	</tr>
<?php endforeach; ?>
</table>
</div>
<?php }?>

<?php


?>


