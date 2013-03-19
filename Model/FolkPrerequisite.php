<?php
App::uses('AppModel', 'Model');
/**
 * FolkPrerequisite Model
 *
 * @property Requirement $Requirement
 * @property Folk $Folk
 */
class FolkPrerequisite extends AppModel {


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
		'Folk' => array(
			'className' => 'Folk',
			'foreignKey' => 'folk_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
