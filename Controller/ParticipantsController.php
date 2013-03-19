<?php
App::uses('AppController', 'Controller');
/**
 * Participants Controller
 *
 * @property Participant $Participant
 */
class ParticipantsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Participant->recursive = 0;
		$this->set('participants', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Participant->exists($id)) {
			throw new NotFoundException(__('Invalid participant'));
		}
		$options = array('conditions' => array('Participant.' . $this->Participant->primaryKey => $id));
		$this->set('participant', $this->Participant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
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
		$folks = $this->Participant->Folk->find('list');
		$this->set(compact('events', 'folks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Participant->exists($id)) {
			throw new NotFoundException(__('Invalid participant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Participant->save($this->request->data)) {
				$this->Session->setFlash(__('The participant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Participant.' . $this->Participant->primaryKey => $id));
			$this->request->data = $this->Participant->find('first', $options);
		}
		$events = $this->Participant->Event->find('list');
		$folks = $this->Participant->Folk->find('list');
		$this->set(compact('events', 'folks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Participant->id = $id;
		if (!$this->Participant->exists()) {
			throw new NotFoundException(__('Invalid participant'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Participant->delete()) {
			$this->Session->setFlash(__('Participant deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Participant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
