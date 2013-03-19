<?php
App::uses('AppController', 'Controller');
/**
 * RequirementCategories Controller
 *
 * @property RequirementCategory $RequirementCategory
 */
class RequirementCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RequirementCategory->recursive = 0;
		$this->set('requirementCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RequirementCategory->exists($id)) {
			throw new NotFoundException(__('Invalid requirement category'));
		}
		$options = array('conditions' => array('RequirementCategory.' . $this->RequirementCategory->primaryKey => $id));
		$this->set('requirementCategory', $this->RequirementCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RequirementCategory->create();
			if ($this->RequirementCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The requirement category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requirement category could not be saved. Please, try again.'));
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
		if (!$this->RequirementCategory->exists($id)) {
			throw new NotFoundException(__('Invalid requirement category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RequirementCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The requirement category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requirement category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RequirementCategory.' . $this->RequirementCategory->primaryKey => $id));
			$this->request->data = $this->RequirementCategory->find('first', $options);
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
		$this->RequirementCategory->id = $id;
		if (!$this->RequirementCategory->exists()) {
			throw new NotFoundException(__('Invalid requirement category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RequirementCategory->delete()) {
			$this->Session->setFlash(__('Requirement category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Requirement category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
