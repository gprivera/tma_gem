<?php

App::uses('AppModel', 'Model');
class Task extends AppModel {

	public $belongsTo = array(
      'User' => array(
        'className' => 'User',
        'foreignKey' => 'user_id'
      ),
      'Creator' => array(
        'className' => 'User',
        'foreignKey' => 'creator_id'
      )
    );    

}