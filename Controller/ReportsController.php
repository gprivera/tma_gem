<?php
App::uses('AppController', 'Controller');

class ReportsController extends AppController {

public $uses = array('Talent','Student','SchoolYear','Level');


	public function index() {
		$this->Talent->recursive = 0;
	$talents = $this->Talent->find('all');
	$this->set('talents',$this->paginate());
	}

	public function students($id = null){

		
		$this->SchoolYear->Behaviors->attach('Containable');
		
		$this->Student->recursive = 0;
		$students = $this->Student->find('all',array(
			'contain' => array(
					'Child'				
			)
			));



		$countStudents = $this->Student->find('count');

		$enrollmentDate = date('Y', strtotime('-1 year'));
		$endDate = date('Y');
		
		$schoolYears = $this->SchoolYear->find('all',array(
			'conditions'=> array(
			'OR' => array(
				array('SchoolYear.enrollment_date LIKE' => $enrollmentDate.'%'),
				array('SchoolYear.enrollment_date LIKE' => $endDate.'%')
				)
			),
			'contain' => array(
				'Level',
				'Student'  => array(
					'Child'
				),

				
			)
		));
   		
   		

		$this->set(compact('students', $this->paginate(), 'id','countStudents','schoolYears'));
	}
}
