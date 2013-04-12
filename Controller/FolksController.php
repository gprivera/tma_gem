<?php
App::uses('AppController', 'Controller');
/**
 * Folks Controller
 *
 * @property Folk $Folk
 */
class FolksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Folk->recursive = 0;
		$this->set('folks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function view($id = null) {
		if (!$this->Folk->exists($id)) {
			throw new NotFoundException(__('Invalid folk'));
		}
		$options = array('conditions' => array('Folk.' . $this->Folk->primaryKey => $id));
		$this->set('folk', $this->Folk->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Folk->create();
			if ($this->Folk->save($this->request->data)) {
				$this->Session->setFlash(__('The folk has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The folk could not be saved. Please, try again.'));
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

		if (!$this->Folk->exists($id)) {
			throw new NotFoundException(__('Invalid folk'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Folk->save($this->request->data)) {
				$this->Session->setFlash(__('The folk has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The folk could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Folk.' . $this->Folk->primaryKey => $id));
			$this->request->data = $this->Folk->find('first', $options);
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
		$this->Folk->id = $id;
		if (!$this->Folk->exists()) {
			throw new NotFoundException(__('Invalid folk'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Folk->delete()) {
			$this->Session->setFlash(__('Folk deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Folk was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
