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



		<div id="logo">
			<?php echo $this->Html->image('tma_logo.png', array('alt' => 'TMA LOGO'))?>
		</div>
		<div id="crm">
			<?php echo $this->Html->image('crm.png', array('alt' => 'CRM'))?>
		</div>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>
	<?php
	//	echo $this->Html->meta('icon');

		echo $this->Html->css('theme');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('highcharts');
		echo $this->Html->script('exporting');
	?>
	
</head>
<div class="head">

	
<?php
	//debug($this->validationErrors);
	// echo $this->User->role_id;
	if($logged_user){
		echo $logged_user['username'];		
		echo " [".$logged_user['Role']['roles']."] ";
		echo $this->Html->link('Edit', array('controller' => 'users', 'action' => 'edit', $logged_user['id']));
		if ($logged_user['Role']['roles'] == "Administrator"){
			echo $this->Html->link(' Add ', array('controller' => 'users', 'action' => 'add'));
			echo $this->Html->link(' View All ', array('controller' => 'users', 'action' => 'index'));
		}

		echo $this->Html->link(__(' Logout '), array('controller' => 'users', 'action' => 'logout')); 
	}else{
		
		echo $this->Html->link(__(' Login '), array('controller' => 'users', 'action' => 'login')); 
	}
?>
</div>

<div>
<center>
<ul id="menu">
  <li class="menu-item">
   <?php echo $this->Html->link('Home', array('controller' => 'tma', 'action' => 'dashboard')); ?>
	</li>
  <li class="menu-item">
     <?php echo $this->Html->link('Families', array('controller' => 'families', 'action' => 'index')); ?>
    <ul class="sub-menu">
      <li class="sub-item">
        <?php echo $this->Html->link('Add', array('controller' => 'families', 'action' => 'add')); ?>
      </li>
      <li class="sub-item">
        <?php echo $this->Html->link('List', array('controller' => 'families', 'action' => 'index')); ?>
      </li>
    </ul>
  </li>


  <li class="menu-item">
     <?php echo $this->Html->link('Children', array('controller' => 'children', 'action' => 'index')); ?>
    <ul class="sub-menu">
      <li class="sub-item">
        <?php echo $this->Html->link('Add', array('controller' => 'children', 'action' => 'add')); ?>
      </li>
      <li class="sub-item">
        <?php echo $this->Html->link('List', array('controller' => 'children', 'action' => 'index')); ?>
      </li>
    </ul>
  </li>

    <li class="menu-item">
     <?php echo $this->Html->link('Students', array('controller' => 'students', 'action' => 'index')); ?>
    <ul class="sub-menu">
      <li class="sub-item">
        <?php echo $this->Html->link('Add', array('controller' => 'students', 'action' => 'add')); ?>
      </li>
      <li class="sub-item">
        <?php echo $this->Html->link('List', array('controller' => 'students', 'action' => 'index')); ?>
      </li>
    </ul>
  </li>


    <li class="menu-item">
     <?php echo $this->Html->link('Survey', array('controller' => 'questions', 'action' => 'index')); ?>
    <ul class="sub-menu">
      <li class="sub-item">
        <?php echo $this->Html->link('Answers', array('controller' => 'answers', 'action' => 'add')); ?>
         <ul class="third-menu">
          <li><?php echo $this->Html->link('Add', array('controller' => 'answers', 'action' => 'add')); ?></li>
          <li><?php echo $this->Html->link('list', array('controller' => 'answers', 'action' => 'index')); ?></li>
        </ul>

      </li>
      <li class="sub-item">
        <?php echo $this->Html->link('Questions', array('controller' => 'questions', 'action' => 'index')); ?>
        <ul class="third-menu">
          <li><?php echo $this->Html->link('Add', array('controller' => 'questions', 'action' => 'add')); ?></li>
          <li><?php echo $this->Html->link('list', array('controller' => 'questions', 'action' => 'index')); ?></li>
        </ul>
       <li class="sub-item">
        <?php echo $this->Html->link('Question Types', array('controller' => 'question_types', 'action' => 'index')); ?>
        <ul class="third-menu">
          <li><?php echo $this->Html->link('Add', array('controller' => 'question_types', 'action' => 'add')); ?></li>
          <li><?php echo $this->Html->link('list', array('controller' => 'question_types', 'action' => 'index')); ?></li>
        </ul>
      </li>
    </ul>
  </li>


    <li class="menu-item">
     <?php echo $this->Html->link('Events', array('controller' => 'events', 'action' => 'index')); ?>
    <ul class="sub-menu">
      <li class="sub-item">
        <?php echo $this->Html->link('Add', array('controller' => 'events', 'action' => 'add')); ?>
      </li>
      <li class="sub-item">
        <?php echo $this->Html->link('List', array('controller' => 'events', 'action' => 'index')); ?>
      </li>
    </ul>
  </li>


  </li>
    <li class="menu-item">
     <?php echo $this->Html->link('Books', array('controller' => 'books', 'action' => 'index')); ?>
    <ul class="sub-menu">
      <li class="sub-item">
        <?php echo $this->Html->link('Books', array('controller' => 'books', 'action' => 'index')); ?>
         <ul class="third-menu">
          <li><?php echo $this->Html->link('Add', array('controller' => 'books', 'action' => 'add')); ?></li>
          <li><?php echo $this->Html->link('list', array('controller' => 'books', 'action' => 'index')); ?></li>
        </ul>
        <li class="sub-item">
        <?php echo $this->Html->link('Category', array('controller' => 'categories', 'action' => 'index')); ?>
         <ul class="third-menu">
          <li><?php echo $this->Html->link('Add', array('controller' => 'categories', 'action' => 'add')); ?></li>
          <li><?php echo $this->Html->link('list', array('controller' => 'categories', 'action' => 'index')); ?></li>
        </ul>
      </li>
    </ul>
  </li>



    <li class="menu-item">
     <?php echo $this->Html->link('Tasks', array('controller' => 'tasks', 'action' => 'index')); ?>
    <ul class="sub-menu">
      <li class="sub-item">
        <?php echo $this->Html->link('Add', array('controller' => 'tasks', 'action' => 'add')); ?>
      </li>
      <li class="sub-item">
        <?php echo $this->Html->link('List', array('controller' => 'tasks', 'action' => 'index')); ?>
      </li>
    </ul>
  </li>

    <li class="menu-item">
     <?php echo $this->Html->link('Schools', array('controller' => 'schools', 'action' => 'index')); ?>
    <ul class="sub-menu">
      <li class="sub-item">
        <?php echo $this->Html->link('Add', array('controller' => 'schools', 'action' => 'add')); ?>
      </li>
      <li class="sub-item">
        <?php echo $this->Html->link('List', array('controller' => 'schools', 'action' => 'index')); ?>
      </li>
    </ul>
  </li>

    <li class="menu-item">
     <?php echo $this->Html->link('Levels', array('controller' => 'levels', 'action' => 'index')); ?>
    <ul class="sub-menu">
      <li class="sub-item">
        <?php echo $this->Html->link('Add', array('controller' => 'levels', 'action' => 'add')); ?>
      </li>
      <li class="sub-item">
        <?php echo $this->Html->link('List', array('controller' => 'levels', 'action' => 'index')); ?>
      </li>
    </ul>
  </li>

    <li class="menu-item">
     <?php echo $this->Html->link('Coops', array('controller' => 'coops', 'action' => 'index')); ?>
    <ul class="sub-menu">
      <li class="sub-item">
        <?php echo $this->Html->link('Add', array('controller' => 'coops', 'action' => 'add')); ?>
      </li>
      <li class="sub-item">
        <?php echo $this->Html->link('List', array('controller' => 'coops', 'action' => 'index')); ?>
      </li>
    </ul>
  </li>

    <li class="menu-item">
     <?php echo $this->Html->link('Notifications', array('controller' => 'notifications', 'action' => 'index')); ?>
    <ul class="sub-menu">
      <li class="sub-item">
        <?php echo $this->Html->link('Add', array('controller' => 'notifications', 'action' => 'add')); ?>
      </li>
      <li class="sub-item">
        <?php echo $this->Html->link('List', array('controller' => 'notifications', 'action' => 'index')); ?>
      </li>
    </ul>
  </li>	     
</ul>
</center>
</div>
<br/><br/>
<body>
	<div id="container">
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<!-- <?php echo $this->element('sql_dump'); ?> -->


</body>
</html>


