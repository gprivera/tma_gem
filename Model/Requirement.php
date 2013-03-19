<?php
App::uses('AppModel', 'Model');
/**
 * Requirement Model
 *
 * @property RequirementCategory $RequirementCategory
 * @property FolkPrerequisite $FolkPrerequisite
 * @property StudentPrerequisite $StudentPrerequisite
 */
class Requirement extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'RequirementCategory' => array(
			'className' => 'RequirementCategory',
			'foreignKey' => 'requirement_category_id',
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
		'FolkPrerequisite' => array(
			'className' => 'FolkPrerequisite',
			'foreignKey' => 'requirement_id',
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
		'StudentPrerequisite' => array(
			'className' => 'StudentPrerequisite',
			'foreignKey' => 'requirement_id',
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
