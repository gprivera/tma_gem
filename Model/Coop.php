<?php
App::uses('AppModel', 'Model');
/**
 * Coop Model
 *
 * @property CoopMember $CoopMember
 */
class Coop extends AppModel {

public $displayField = 'coop';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CoopMember' => array(
			'className' => 'CoopMember',
			'foreignKey' => 'coop_id',
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
