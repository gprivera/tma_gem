<?php
App::uses('AppController', 'Controller');
/**
 * FolkPrerequisites Controller
 *
 * @property FolkPrerequisite $FolkPrerequisite
 */
class FolkPrerequisitesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FolkPrerequisite->recursive = 0;
		$this->set('folkPrerequisites', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FolkPrerequisite->exists($id)) {
			throw new NotFoundException(__('Invalid folk prerequisite'));
		}
		$options = array('conditions' => array('FolkPrerequisite.' . $this->FolkPrerequisite->primaryKey => $id));
		$this->set('folkPrerequisite', $this->FolkPrerequisite->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
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
		$folks = $this->FolkPrerequisite->Folk->find('list');
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
		if (!$this->FolkPrerequisite->exists($id)) {
			throw new NotFoundException(__('Invalid folk prerequisite'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FolkPrerequisite->save($this->request->data)) {
				$this->Session->setFlash(__('The folk prerequisite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The folk prerequisite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FolkPrerequisite.' . $this->FolkPrerequisite->primaryKey => $id));
			$this->request->data = $this->FolkPrerequisite->find('first', $options);
		}
		$requirements = $this->FolkPrerequisite->Requirement->find('list');
		$folks = $this->FolkPrerequisite->Folk->find('list');
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
		$this->FolkPrerequisite->id = $id;
		if (!$this->FolkPrerequisite->exists()) {
			throw new NotFoundException(__('Invalid folk prerequisite'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FolkPrerequisite->delete()) {
			$this->Session->setFlash(__('Folk prerequisite deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Folk prerequisite was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
