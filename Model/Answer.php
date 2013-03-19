<?php
App::uses('AppModel', 'Model');
/**
 * Answer Model
 *
 * @property Folk $Folk
 * @property Question $Question
 */
class Answer extends AppModel {


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
		),
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
