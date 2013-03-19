<?php
App::uses('AppController', 'Controller');
/**
 * Coops Controller
 *
 * @property Coop $Coop
 */
class CoopsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Coop->recursive = 0;
		$this->set('coops', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Coop->exists($id)) {
			throw new NotFoundException(__('Invalid coop'));
		}
		$options = array('conditions' => array('Coop.' . $this->Coop->primaryKey => $id));
		$this->set('coop', $this->Coop->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Coop->create();
			if ($this->Coop->save($this->request->data)) {
				$this->Session->setFlash(__('The coop has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coop could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Coop->exists($id)) {
			throw new NotFoundException(__('Invalid coop'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Coop->save($this->request->data)) {
				$this->Session->setFlash(__('The coop has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coop could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Coop.' . $this->Coop->primaryKey => $id));
			$this->request->data = $this->Coop->find('first', $options);
		}
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
		$this->Coop->id = $id;
		if (!$this->Coop->exists()) {
			throw new NotFoundException(__('Invalid coop'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Coop->delete()) {
			$this->Session->setFlash(__('Coop deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Coop was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
