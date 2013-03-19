<?php
App::uses('AppModel', 'Model');
/**
 * CoopMember Model
 *
 * @property Coop $Coop
 * @property Folk $Folk
 */
class CoopMember extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Coop' => array(
			'className' => 'Coop',
			'foreignKey' => 'coop_id',
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
