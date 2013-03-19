<?php
App::uses('AppModel', 'Model');
/**
 * Folk Model
 *
 * @property Answer $Answer
 * @property CoopMember $CoopMember
 * @property FolkPrerequisite $FolkPrerequisite
 * @property Notification $Notification
 * @property Participant $Participant
 */
class Folk extends AppModel {

 public $virtualFields = array("full_name"=>"CONCAT(Folk.surname, ',',' ' ,Folk.given_name)");
public $displayField = 'full_name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Answer' => array(
			'className' => 'Answer',
			'foreignKey' => 'folk_id',
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
		'CoopMember' => array(
			'className' => 'CoopMember',
			'foreignKey' => 'folk_id',
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
		'FolkPrerequisite' => array(
			'className' => 'FolkPrerequisite',
			'foreignKey' => 'folk_id',
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
		'Notification' => array(
			'className' => 'Notification',
			'foreignKey' => 'folk_id',
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
		'Participant' => array(
			'className' => 'Participant',
			'foreignKey' => 'folk_id',
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
		'Child' => array(
			'className' => 'Child',
			'foreignKey' => 'folk_id',
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
