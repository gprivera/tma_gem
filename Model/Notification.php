<?php
App::uses('AppModel', 'Model');
/**
 * Notification Model
 *
 * @property Folk $Folk
 */
class Notification extends AppModel {


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
}
