<?php
App::uses('AppModel', 'Model');
/**
 * RequirementCategory Model
 *
 * @property Requirement $Requirement
 */
class RequirementCategory extends AppModel {

	public $DisplayField = "category";	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Requirement' => array(
			'className' => 'Requirement',
			'foreignKey' => 'requirement_category_id',
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
