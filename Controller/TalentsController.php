<?php
App::uses('AppController', 'Controller');
/**
 * Talents Controller
 *
 * @property Talent $Talent
 */
class TalentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Talent->recursive = 0;
		$this->set('talents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Talent->exists($id)) {
			throw new NotFoundException(__('Invalid talent'));
		}
		$options = array('conditions' => array('Talent.' . $this->Talent->primaryKey => $id));
		$this->set('talent', $this->Talent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Talent->create();
			if ($this->Talent->save($this->request->data)) {
				$this->Session->setFlash(__('The talent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The talent could not be saved. Please, try again.'));
			}
		}
		$students = $this->Talent->Student->find('list');
		$this->set(compact('students'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Talent->exists($id)) {
			throw new NotFoundException(__('Invalid talent'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Talent->save($this->request->data)) {
				$this->Session->setFlash(__('The talent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The talent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Talent.' . $this->Talent->primaryKey => $id));
			$this->request->data = $this->Talent->find('first', $options);
		}
		$students = $this->Talent->Student->find('list');
		$this->set(compact('students'));
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
		$this->Talent->id = $id;
		if (!$this->Talent->exists()) {
			throw new NotFoundException(__('Invalid talent'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Talent->delete()) {
			$this->Session->setFlash(__('Talent deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Talent was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
