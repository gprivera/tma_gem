<?php

App::uses('AppController', 'Controller');
class FamiliesController extends AppController{
  
  
	public $uses = array('Folk','Child','Question','Coop','CoopMember','Participant','Event','Requirement','Prerequisites');

	public function index(){

	$folks = $this->Folk->find('all');
	$this->set('folks',$this->paginate());
	}
	
	public function view($id = null) {
		if (!$this->Folk->exists($id)) {
			throw new NotFoundException(__('Invalid folk'));
		}
		$options = array('conditions' => array('Folk.' . $this->Folk->primaryKey => $id));
	$this->set('folk', $this->Folk->find('first', $options));
	}

	public function add(){

		
	}
}
