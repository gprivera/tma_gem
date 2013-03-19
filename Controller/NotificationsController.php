<?php
App::uses('AppController', 'Controller');
/**
 * Notifications Controller
 *
 * @property Notification $Notification
 */
class NotificationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Notification->recursive = 0;
		$this->set('notifications', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Notification->exists($id)) {
			throw new NotFoundException(__('Invalid notification'));
		}
		$options = array('conditions' => array('Notification.' . $this->Notification->primaryKey => $id));
		$this->set('notification', $this->Notification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Notification->create();
			if ($this->Notification->save($this->request->data)) {
				$this->Session->setFlash(__('The notification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notification could not be saved. Please, try again.'));
			}
		}
		$folks = $this->Notification->Folk->find('list');
		$this->set(compact('folks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Notification->exists($id)) {
			throw new NotFoundException(__('Invalid notification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Notification->save($this->request->data)) {
				$this->Session->setFlash(__('The notification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Notification.' . $this->Notification->primaryKey => $id));
			$this->request->data = $this->Notification->find('first', $options);
		}
		$folks = $this->Notification->Folk->find('list');
		$this->set(compact('folks'));
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
		$this->Notification->id = $id;
		if (!$this->Notification->exists()) {
			throw new NotFoundException(__('Invalid notification'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Notification->delete()) {
			$this->Session->setFlash(__('Notification deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Notification was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
