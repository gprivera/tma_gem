<?php
App::uses('AppModel', 'Model');
/**
 * EducationalBackground Model
 *
 * @property Level $Level
 * @property SchoolYear $SchoolYear
 * @property Student $Student
 * @property School $School
 */
class EducationalBackground extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Level' => array(
			'className' => 'Level',
			'foreignKey' => 'level_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SchoolYear' => array(
			'className' => 'SchoolYear',
			'foreignKey' => 'school_year_id',
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
		),
		'School' => array(
			'className' => 'School',
			'foreignKey' => 'school_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
