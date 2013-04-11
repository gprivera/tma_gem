<?php

App::uses('AppController', 'Controller');
class FamiliesController extends AppController{
  
  
	public $uses = array('Folk','Child','Question','Coop','CoopMember','Participant','Event','Requirement','Prerequisite','Anwer');

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
		$this->set('folk', $this->Folk->find('first', $options),'read');
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
				$this->Session->setFlash(__('The child could not be saved. Please, try again.'));
			}
		}
		$folks = $this->Child->Folk->find('list',array(
				'conditions' => array(
						'id' => $explode[5]
					)
			));
		$this->set(compact('folks','url','explode','name','fullname'));

	}
	

	public function add(){
		if ($this->request->is('post')) {

			$extension = end(explode('.', $this->request->data['Folk']['image']['name']));
			$filename = String::uuid() . ".{$extension}";
			$tmp = $this->request->data['Folk']['image']['tmp_name'];
			$destination = "/home/favestudent/web/gem/data/folks/image/{$filename}";

			move_uploaded_file($tmp, $destination);
			$this->request->data['Folk']['image'] = $filename;
			$this->Folk->Child->create();
			
			if ($this->Folk->Child->saveAll($this->request->data	) ){
				$this->Session->setFlash(__('The folk has been saved'));
				
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The folk could not be saved. Please, try again.'));
			}
		}
	}
}
