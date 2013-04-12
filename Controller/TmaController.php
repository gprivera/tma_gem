<?php
mysql_connect("localhost","root","gemeuber") or die(mysql_error());
mysql_select_db("tma") or die(mysql_error());

App::uses('AppController', 'Controller');
class TmaController extends AppController{
  
  
	public $uses = array('Task','Event','Child','Student','SchoolYear','User','Talent','Folk');

	public function dashboard(){

		$lastDate = date('Y');
		$dates = array();
		$enrolled = array();
		$j=0;

		$query = mysql_query("select count(id) from school_years");
		$overall = mysql_result($query,0);

		for($i=1999;$i<=$lastDate;$i++){
			$k=$i+1;
			$query = mysql_query("select count(id) from school_years where enrollment_date>='$i/1/1' AND enrollment_date<'$k/1/1'");
			$enrolled[$j] = mysql_result($query,0);
		
			$dates[$j] = "$i - $k";
			$j++;
		}


		/*charts_endline*/

		$this->User->Behaviors->attach('Containable');

		$tasks = $this->Task->find('all', array(
			'conditions'=> array(
				'Task.user_id' => $this->Session->read('Auth.User.id'),
				'Task.is_accomplished' => false
				
			)
		));

		$task_count = $this->Task->find('count', array(
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

		$event_count = $this->Event->find('count', array(
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
		$schedule_count = $this->Folk->find('count',array(
				'conditions' => array(
					'AND' => array(
						array('training >=' => $now),	
						array('training <='=> $ceiling),	
						)
					),
			));

		$school_Years3 = $this->SchoolYear->find('count');

		$this->set(compact('tasks','task_count','event_count','schedule_count','dates','enrolled','overall','events','school_Years','school_Years2','school_Years3','leads','users','tasks1','schedules'));
	}  

	public function report_talents(){

		$talents = $this->Talent->find('all');

		$this->set(compact('talents'));
	}
	



}
