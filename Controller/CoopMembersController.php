<?php
App::uses('AppController', 'Controller');
/**
 * CoopMembers Controller
 *
 * @property CoopMember $CoopMember
 */
class CoopMembersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CoopMember->recursive = 0;
		$this->set('coopMembers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CoopMember->exists($id)) {
			throw new NotFoundException(__('Invalid coop member'));
		}
		$options = array('conditions' => array('CoopMember.' . $this->CoopMember->primaryKey => $id));
		$this->set('coopMember', $this->CoopMember->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
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
		$folks = $this->CoopMember->Folk->find('list');
		$this->set(compact('coops', 'folks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CoopMember->exists($id)) {
			throw new NotFoundException(__('Invalid coop member'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CoopMember->save($this->request->data)) {
				$this->Session->setFlash(__('The coop member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coop member could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CoopMember.' . $this->CoopMember->primaryKey => $id));
			$this->request->data = $this->CoopMember->find('first', $options);
		}
		$coops = $this->CoopMember->Coop->find('list');
		$folks = $this->CoopMember->Folk->find('list');
		$this->set(compact('coops', 'folks'));
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
		$this->CoopMember->id = $id;
		if (!$this->CoopMember->exists()) {
			throw new NotFoundException(__('Invalid coop member'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CoopMember->delete()) {
			$this->Session->setFlash(__('Coop member deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Coop member was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
