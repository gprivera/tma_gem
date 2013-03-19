<?php
App::uses('AppModel', 'Model');
/**
 * Prerequisite Model
 *
 * @property Requirement $Requirement
 * @property Student $Student
 */
class Prerequisite extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Requirement' => array(
			'className' => 'Requirement',
			'foreignKey' => 'requirement_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
