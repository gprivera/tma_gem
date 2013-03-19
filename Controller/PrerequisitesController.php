<?php
App::uses('AppController', 'Controller');
/**
 * Prerequisites Controller
 *
 * @property Prerequisite $Prerequisite
 */
class PrerequisitesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Prerequisite->recursive = 0;
		$this->set('prerequisites', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Prerequisite->exists($id)) {
			throw new NotFoundException(__('Invalid prerequisite'));
		}
		$options = array('conditions' => array('Prerequisite.' . $this->Prerequisite->primaryKey => $id));
		$this->set('prerequisite', $this->Prerequisite->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Prerequisite->create();
			if ($this->Prerequisite->save($this->request->data)) {
				$this->Session->setFlash(__('The prerequisite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prerequisite could not be saved. Please, try again.'));
			}
		}
		$requirements = $this->Prerequisite->Requirement->find('list');
		$students = $this->Prerequisite->Student->find('list');
		$this->set(compact('requirements', 'students'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Prerequisite->exists($id)) {
			throw new NotFoundException(__('Invalid prerequisite'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Prerequisite->save($this->request->data)) {
				$this->Session->setFlash(__('The prerequisite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prerequisite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Prerequisite.' . $this->Prerequisite->primaryKey => $id));
			$this->request->data = $this->Prerequisite->find('first', $options);
		}
		$requirements = $this->Prerequisite->Requirement->find('list');
		$students = $this->Prerequisite->Student->find('list');
		$this->set(compact('requirements', 'students'));
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
		$this->Prerequisite->id = $id;
		if (!$this->Prerequisite->exists()) {
			throw new NotFoundException(__('Invalid prerequisite'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Prerequisite->delete()) {
			$this->Session->setFlash(__('Prerequisite deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Prerequisite was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
