<?php
App::uses('AppModel', 'Model');
/**
 * Child Model
 *
 * @property Folks $Folks
 * @property Student $Student
 */
class Child extends AppModel {

 public $virtualFields = array("full_name"=>"CONCAT(Child.surname, ',',' ' ,Child.given_name)");
 public $displayField = 'full_name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Folk' => array(
			'className' => 'Folk',
			'foreignKey' => 'folk_id',
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
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'child_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
