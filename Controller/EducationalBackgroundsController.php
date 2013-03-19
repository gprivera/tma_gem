<?php
App::uses('AppController', 'Controller');
/**
 * EducationalBackgrounds Controller
 *
 * @property EducationalBackground $EducationalBackground
 */
class EducationalBackgroundsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EducationalBackground->recursive = 0;
		$this->set('educationalBackgrounds', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EducationalBackground->exists($id)) {
			throw new NotFoundException(__('Invalid educational background'));
		}
		$options = array('conditions' => array('EducationalBackground.' . $this->EducationalBackground->primaryKey => $id));
		$this->set('educationalBackground', $this->EducationalBackground->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EducationalBackground->create();
			if ($this->EducationalBackground->save($this->request->data)) {
				$this->Session->setFlash(__('The educational background has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educational background could not be saved. Please, try again.'));
			}
		}
		$levels = $this->EducationalBackground->Level->find('list');
		$schoolYears = $this->EducationalBackground->SchoolYear->find('list');
		$students = $this->EducationalBackground->Student->find('list');
		$schools = $this->EducationalBackground->School->find('list');
		$this->set(compact('levels', 'schoolYears', 'students', 'schools'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EducationalBackground->exists($id)) {
			throw new NotFoundException(__('Invalid educational background'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EducationalBackground->save($this->request->data)) {
				$this->Session->setFlash(__('The educational background has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educational background could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EducationalBackground.' . $this->EducationalBackground->primaryKey => $id));
			$this->request->data = $this->EducationalBackground->find('first', $options);
		}
		$levels = $this->EducationalBackground->Level->find('list');
		$schoolYears = $this->EducationalBackground->SchoolYear->find('list');
		$students = $this->EducationalBackground->Student->find('list');
		$schools = $this->EducationalBackground->School->find('list');
		$this->set(compact('levels', 'schoolYears', 'students', 'schools'));
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
		$this->EducationalBackground->id = $id;
		if (!$this->EducationalBackground->exists()) {
			throw new NotFoundException(__('Invalid educational background'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EducationalBackground->delete()) {
			$this->Session->setFlash(__('Educational background deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Educational background was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
