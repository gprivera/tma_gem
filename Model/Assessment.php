<?php
App::uses('AppModel', 'Model');
/**
 * Assessment Model
 *
 * @property SchoolYear $SchoolYear
 */
class Assessment extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SchoolYear' => array(
			'className' => 'SchoolYear',
			'foreignKey' => 'school_year_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
