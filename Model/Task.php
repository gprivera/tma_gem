<?php

App::uses('AppModel', 'Model');
class Task extends AppModel {

	public $belongsTo = array(
      'User' => array(
        'className' => 'User',
        'foreignKey' => 'user_id',
        // 'counterCache' => array(
        //     'tasks_accomplished' => array(
        //         'Task.is_accomplished' => 1
        //       )
        //   )
      ),
      'Creator' => array(
        'className' => 'User',
        'foreignKey' => 'creator_id'
      )
    );    

}