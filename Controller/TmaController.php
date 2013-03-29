<?php

App::uses('AppController', 'Controller');
class TmaController extends AppController{
  
  
	public $uses = array('Task','Event','Child','Student','SchoolYear','User','Talent','Folk');

	public function dashboard(){

		$this->User->Behaviors->attach('Containable');

		$tasks = $this->Task->find('all', array(
			'conditions'=> array(
				'Task.user_id' => $this->Session->read('Auth.User.id'),
				'Task.is_accomplished' => false
				
			)
		));

		$events = $this->Event->find('all', array(
			'conditions'=> array(
				'Event.event_date >= ' => date('Y-m-d')
				
			)
		));
		$enrollmentDate = date('Y', strtotime('-1 year'));
		$endDate = date('Y');

		$school_Years = $this->SchoolYear->find('all',array(
			'conditions'=> array(
			'OR' => array(
					array('SchoolYear.enrollment_date LIKE' => $enrollmentDate.'%'),
					array('SchoolYear.enrollment_date LIKE' => $endDate.'%')
					)
				)
		));

		$school_Years2 = $this->SchoolYear->find('count',array(
			'conditions'=> array(
			'OR' => array(
					array('SchoolYear.enrollment_date LIKE' => $enrollmentDate.'%'),
					array('SchoolYear.enrollment_date LIKE' => $endDate.'%')
					)
				)
		));

		$leads = $this->Child->find('count',array(
			'conditions'=> array(
			'AND' => array(
					array('Child.is_enrolled' => '0'),
					array('Child.is_graduate' => '0')
					)
				)
		));

		$users = $this->User->find('all',array(
			'contain' => array(
				'Task' => array(
					'conditions' => array('is_accomplished' => true)
				),
				'CreatedTasks',
			)
		));

	

		$tasks1 = $this->User->find('all',array(
			'contain' => array(
				'Task' => array(
					'conditions' => array('Task.is_accomplished' => false)
				),
				'CreatedTasks',
			)
		));

		$now = date('Y-m-d');
		$ceiling = date('Y-m-d', strtotime('+ 1 week'));

		// debug($now);
		// debug($ceiling);
		
		$schedules = $this->Folk->find('all',array(
				'conditions' => array(
					'AND' => array(
						array('training >=' => $now),	
						array('training <='=> $ceiling),	
						)
					),
			));

		$school_Years3 = $this->SchoolYear->find('count');

		$this->set(compact('tasks','events','school_Years','school_Years2','school_Years3','leads','users','tasks1','schedules'));
	}  

	public function report_talents(){

		$talents = $this->Talent->find('all');

		$this->set(compact('talents'));
	}
	



}
