<?php
App::uses('AppController', 'Controller');
/**
 * Assessments Controller
 *
 * @property Assessment $Assessment
 */
class AssessmentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Assessment->recursive = 0;
		$this->set('assessments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Assessment->exists($id)) {
			throw new NotFoundException(__('Invalid assessment'));
		}
		$options = array('conditions' => array('Assessment.' . $this->Assessment->primaryKey => $id));
		$this->set('assessment', $this->Assessment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Assessment->create();
			if ($this->Assessment->save($this->request->data)) {
				$this->Session->setFlash(__('The assessment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assessment could not be saved. Please, try again.'));
			}
		}
		$schoolYears = $this->Assessment->SchoolYear->find('list');
		$this->set(compact('schoolYears'));
	}
	public function addAssessment(){

		$url = $this->referer();
		$explode = explode("/",$url);

		if ($this->request->is('post')) {
			$this->Assessment->create();
			if ($this->Assessment->save($this->request->data)) {
				$this->Session->setFlash(__('The assessment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assessment could not be saved. Please, try again.'));
			}
		}
		$schoolYears = $this->Assessment->SchoolYear->find('list',array(
				'conditions' => array(
						'id' => $explode[5]
					)
			));
		$this->set(compact('schoolYears'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Assessment->exists($id)) {
			throw new NotFoundException(__('Invalid assessment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Assessment->save($this->request->data)) {
				$this->Session->setFlash(__('The assessment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assessment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Assessment.' . $this->Assessment->primaryKey => $id));
			$this->request->data = $this->Assessment->find('first', $options);
		}
		$schoolYears = $this->Assessment->SchoolYear->find('list');
		$this->set(compact('schoolYears'));
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
		$this->Assessment->id = $id;
		if (!$this->Assessment->exists()) {
			throw new NotFoundException(__('Invalid assessment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Assessment->delete()) {
			$this->Session->setFlash(__('Assessment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Assessment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
