<?php
App::uses('AppController', 'Controller');
/**
 * ParentPrerequisites Controller
 *
 * @property ParentPrerequisite $ParentPrerequisite
 */
class ParentPrerequisitesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ParentPrerequisite->recursive = 0;
		$this->set('parentPrerequisites', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ParentPrerequisite->exists($id)) {
			throw new NotFoundException(__('Invalid parent prerequisite'));
		}
		$options = array('conditions' => array('ParentPrerequisite.' . $this->ParentPrerequisite->primaryKey => $id));
		$this->set('parentPrerequisite', $this->ParentPrerequisite->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ParentPrerequisite->create();
			if ($this->ParentPrerequisite->save($this->request->data)) {
				$this->Session->setFlash(__('The parent prerequisite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parent prerequisite could not be saved. Please, try again.'));
			}
		}
		$requirements = $this->ParentPrerequisite->Requirement->find('list');
		$folks = $this->ParentPrerequisite->Folk->find('list');
		$this->set(compact('requirements', 'folks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ParentPrerequisite->exists($id)) {
			throw new NotFoundException(__('Invalid parent prerequisite'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ParentPrerequisite->save($this->request->data)) {
				$this->Session->setFlash(__('The parent prerequisite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parent prerequisite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ParentPrerequisite.' . $this->ParentPrerequisite->primaryKey => $id));
			$this->request->data = $this->ParentPrerequisite->find('first', $options);
		}
		$requirements = $this->ParentPrerequisite->Requirement->find('list');
		$folks = $this->ParentPrerequisite->Folk->find('list');
		$this->set(compact('requirements', 'folks'));
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
		$this->ParentPrerequisite->id = $id;
		if (!$this->ParentPrerequisite->exists()) {
			throw new NotFoundException(__('Invalid parent prerequisite'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ParentPrerequisite->delete()) {
			$this->Session->setFlash(__('Parent prerequisite deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Parent prerequisite was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
