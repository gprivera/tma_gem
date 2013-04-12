<?php
App::uses('AppController', 'Controller');
/**
 * StudentPrerequisites Controller
 *
 * @property StudentPrerequisite $StudentPrerequisite
 */
class StudentPrerequisitesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StudentPrerequisite->recursive = 0;
		$this->set('studentPrerequisites', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StudentPrerequisite->exists($id)) {
			throw new NotFoundException(__('Invalid student prerequisite'));
		}
		$options = array('conditions' => array('StudentPrerequisite.' . $this->StudentPrerequisite->primaryKey => $id));
		$this->set('studentPrerequisite', $this->StudentPrerequisite->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StudentPrerequisite->create();
			if ($this->StudentPrerequisite->save($this->request->data)) {
				$this->Session->setFlash(__('The student prerequisite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student prerequisite could not be saved. Please, try again.'));
			}
		}
		$requirements = $this->StudentPrerequisite->Requirement->find('list');
		$students = $this->StudentPrerequisite->Student->find('list');
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
		if (!$this->StudentPrerequisite->exists($id)) {
			throw new NotFoundException(__('Invalid student prerequisite'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StudentPrerequisite->save($this->request->data)) {
				$this->Session->setFlash(__('The student prerequisite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student prerequisite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StudentPrerequisite.' . $this->StudentPrerequisite->primaryKey => $id));
			$this->request->data = $this->StudentPrerequisite->find('first', $options);
		}
		$requirements = $this->StudentPrerequisite->Requirement->find('list');
		$students = $this->StudentPrerequisite->Student->find('list');
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
		$this->StudentPrerequisite->id = $id;
		if (!$this->StudentPrerequisite->exists()) {
			throw new NotFoundException(__('Invalid student prerequisite'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StudentPrerequisite->delete()) {
			$this->Session->setFlash(__('Student prerequisite deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Student prerequisite was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function add_student(){
		$url = $this->referer();
		$explode = explode("/",$url);

		if ($this->request->is('post')) {
			$this->StudentPrerequisite->create();
			if ($this->StudentPrerequisite->save($this->request->data)) {
				$this->Session->setFlash(__('The student prerequisite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student prerequisite could not be saved. Please, try again.'));
			}
		}
		$requirements = $this->StudentPrerequisite->Requirement->find('list');
		$students = $this->StudentPrerequisite->Student->find('list',array(
				'conditions' => array(
						'id' => $explode[5]
					)
			));

		$this->set(compact('requirements', 'students'));
	}
}
