<?php
App::uses('AppController', 'Controller');
/**
 * SchoolYears Controller
 *
 * @property SchoolYear $SchoolYear
 */
class SchoolYearsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SchoolYear->recursive = 0;
		$this->set('schoolYears', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SchoolYear->exists($id)) {
			throw new NotFoundException(__('Invalid school year'));
		}
		$options = array('conditions' => array('SchoolYear.' . $this->SchoolYear->primaryKey => $id));
		$this->set('schoolYear', $this->SchoolYear->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SchoolYear->create();
			if ($this->SchoolYear->save($this->request->data)) {
				$this->Session->setFlash(__('The school year has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school year could not be saved. Please, try again.'));
			}
		}
		$students = $this->SchoolYear->Student->find('list');
		$levels = $this->SchoolYear->Level->find('list');
		$this->set(compact('students', 'levels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SchoolYear->exists($id)) {
			throw new NotFoundException(__('Invalid school year'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SchoolYear->save($this->request->data)) {
				$this->Session->setFlash(__('The school year has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school year could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SchoolYear.' . $this->SchoolYear->primaryKey => $id));
			$this->request->data = $this->SchoolYear->find('first', $options);
		}
		$students = $this->SchoolYear->Student->find('list');
		$levels = $this->SchoolYear->Level->find('list');
		$this->set(compact('students', 'levels'));
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
		$this->SchoolYear->id = $id;
		if (!$this->SchoolYear->exists()) {
			throw new NotFoundException(__('Invalid school year'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SchoolYear->delete()) {
			$this->Session->setFlash(__('School year deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('School year was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function addSchoolYear(){
		$url = $this->referer();
		$explode = explode("/",$url);

		if ($this->request->is('post')) {
			$this->SchoolYear->create();
		if ($this->SchoolYear->save($this->request->data)) {
				$this->Session->setFlash(__('The school year has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school year could not be saved. Please, try again.'));
			}
		}
		
		$students = $this->SchoolYear->Student->find('list',array(
				'conditions' => array(
						'id' => $explode[5]
					)
			));


		$levels = $this->SchoolYear->Level->find('list');
		$this->set(compact('students', 'levels'));


	}
}
