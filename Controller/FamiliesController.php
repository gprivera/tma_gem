<?php

App::uses('AppController', 'Controller');
class FamiliesController extends AppController{
  
  
	public $uses = array('Folk','Child','Question','Coop','Notification','CoopMember','Participant','Event','Requirement','Prerequisite','Answer','FolkPrerequisite');

	public function index(){

	$folks = $this->Folk->find('all');
	$this->set('folks',$this->paginate());
	}
	
	public function view($id = null) {
		
		if (!$this->Folk->exists($id)) {
			throw new NotFoundException(__('Invalid folk'));
		}
		$options = array('conditions' => array('Folk.' . $this->Folk->primaryKey => $id));
		$read = $this->Folk->find('first', $options);
		$questions = "helloworld";
	
		$this->set('folk', $this->Folk->find('first', $options));
	}

	public function addParticipant(){

		$url = $this->referer();
		$explode = explode("/",$url);

		if ($this->request->is('post')) {
			$this->Participant->create();
		if ($this->Participant->save($this->request->data)) {
				$this->Session->setFlash(__('The participant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participant could not be saved. Please, try again.'));
			}
		}
		$events = $this->Participant->Event->find('list');
	
		$folks = $this->Child->Folk->find('list',array(
				'conditions' => array(
						'id' => $explode[5]
					)
			));

		$this->set(compact('events', 'folks','explode'));

	}

	public function addChild(){
		$url = $this->referer();
		$explode = explode("/",$url);
	
		if ($this->request->is('post')) {
			$this->Child->create();
		
			if ($this->Child->save($this->request->data)) {
				$this->Session->setFlash(__('The child has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The child $could not be saved. Please, try again.'));
			}
		}
		
		$folks = $this->Child->Folk->find('list',array(
				'conditions' => array(
						'id' => $explode[5]
					)
			));

		$this->set(compact('folks','url','explode','name','fullname'));

	}

	public function addNotification(){
		$url = $this->referer();
		$explode = explode("/",$url);

			if ($this->request->is('post')) {
			$this->Notification->create();
			if ($this->Notification->save($this->request->data)) {
				$this->Session->setFlash(__('The notification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notification could not be saved. Please, try again.'));
			}
		}
		$folks = $this->Child->Folk->find('list',array(
				'conditions' => array(
						'id' => $explode[5]
					)
			));
		$this->set(compact('folks','explode'));
	}

	public function addPrerequisite(){
		$url = $this->referer();
		$explode = explode("/",$url);

		if ($this->request->is('post')) {
			$this->FolkPrerequisite->create();
			if ($this->FolkPrerequisite->save($this->request->data)) {
				$this->Session->setFlash(__('The folk prerequisite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The folk prerequisite could not be saved. Please, try again.'));
			}
		}
		$requirements = $this->FolkPrerequisite->Requirement->find('list');
		$folks = $this->Child->Folk->find('list',array(
				'conditions' => array(
						'id' => $explode[5]
					)
			));

		$this->set(compact('requirements', 'folks','explode'));

	}

	public function addAnswer(){
		$url = $this->referer();
		$explode = explode("/",$url);

		if ($this->request->is('post')) {
			$this->Answer->create();
			
			if ($this->Answer->save($this->request->data)) {
				$this->Session->setFlash(__('The answer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer could not be saved. Please, try again.'));
			}
		}
		$folks = $this->Answer->Folk->find('list',array(
				'conditions' => array(
						'id' => $explode[5]
					)
			));

		$questions = $this->Answer->Question->find('list');
		$this->set(compact('folks','questions','explode','url'));

	}

	public function addCoop() {
		$url = $this->referer();
		$explode = explode("/",$url);

		if ($this->request->is('post')) {
			$this->CoopMember->create();
			if ($this->CoopMember->save($this->request->data)) {
				$this->Session->setFlash(__('The coop member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coop member could not be saved. Please, try again.'));
			}
		}
		$coops = $this->CoopMember->Coop->find('list');
		$folks = $this->CoopMember->Folk->find('list',array(
				'conditions' => array(
						'id' => $explode[5]
					)
			));
		
		$this->set(compact('coops', 'folks','explode'));
	

	}

	public function add(){
		if ($this->request->is('post')) {

			$extension = end(explode('.', $this->request->data['Folk']['image']['name']));
			$filename = String::uuid() . ".{$extension}";
			$tmp = $this->request->data['Folk']['image']['tmp_name'];
			$destination = "/home/favestudent/web/gem/data/folks/image/{$filename}";

			move_uploaded_file($tmp, $destination);
			$this->request->data['Folk']['image'] = $filename;
			$this->Folk->create();
			
			if ($this->Folk->save($this->request->data	) ){
				$this->Session->setFlash(__('The folk has been saved'));
				
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The folk could not be saved. Please, try again.'));
			}
		}
	}
}
