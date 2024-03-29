<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>

	<?php echo $this->Html->charset(); ?>

		<div id="logo">
			<?php echo $this->Html->image('tma_logo.png', array('alt' => 'TMA LOGO'))?>
		</div>
		<div id="crm">
			<?php echo $this->Html->image('crm.png', array('alt' => 'CRM'))?>
		</div>


	<title>
		
		<?php echo $title_for_layout; ?>
		
	</title>
	<?php
	//	echo $this->Html->meta('icon');

		echo $this->Html->css('theme');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<div id="logged">

	<?php
	if($logged_user){
		echo $logged_user;
		echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); 
	}else{
		
		echo $this->Html->link(__(''), array('controller' => 'users', 'action' => 'login')); 
	}
?>
</div>

<body>

	<div id="container">
		<div id="content">
			<div id="loginField">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
					</div>
		</div>
	</div>
	<!-- <?php echo $this->element('sql_dump'); ?> -->
</body>
</html>
