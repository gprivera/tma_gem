<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Role $Role
 * @property Task $Task
 */
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {

	public $displayField = 'username';

	

	//The Associations below have been created with all possible keys, those that are not needed can be removed

public function beforeSave($options = array()) {
        if (isset($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }
        return true;
    }


/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Task' => array(
			'className' => 'Task',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	    'CreatedTasks' => array(
	      'className' => 'Task',
	      'foreignKey' => 'creator_id'
	    )
	);


public $validate = array(
    'username' => array(
        'required' => array(
            'rule' => array('notEmpty'),
            'message' => 'You must enter a username.'
        ),
        'length' => array(
            'rule' => array('between', 3, 15),
            'message' => 'Your username must be between 3 and 15 characters long.'
        ),
        'unique' => array(
            'rule'    => 'isUnique',
            'message' => 'This username has already been taken.'
        )
    ),
    'password' => array(
        'required' => array(
            'rule' => array('notEmpty'),
            'message' => 'You must enter a password.'
        ),
        'length' => array(
            'rule' => array('minLength', '6'),
            'message' => 'Your password must be at least 6 characters long.'
        )
    )
    
);


}
