<?php
App::uses('AppController', 'Controller');

class ReportsController extends AppController {

public $uses = array('Talent','Student','SchoolYear','Level','Folk','Level');


	public function index() {
		$this->Talent->recursive = 0;
	$talents = $this->Talent->find('all');
	$this->set('talents',$this->paginate());
	}

	public function parents(){
		$folks = $this->Folk->find('all');
		
		$this->set(compact('students', $this->paginate(), 'id','folks','countStudents','schoolYears'));

	}
	public function levels($id = null){
		$this->SchoolYear->Behaviors->attach('Containable');
		$levels = $this->Level->find('all');
		$enrollmentDate = date('Y', strtotime('-1 year'));
		$endDate = date('Y');
   		
		$url = $this->referer();
		$url2 = $this->here;
		$explode = explode("/",$url2);

	$gags = $this->SchoolYear->find('all',array(
			'conditions'=> array(
			'OR' => array(
				array('SchoolYear.enrollment_date LIKE' => $enrollmentDate.'%'),
				array('SchoolYear.enrollment_date LIKE' => $endDate.'%')
				)
			),
			'contain' => array(
				'Level',
				'Student'  => array(
					'Child',
					'Talent'
				),

				
			)
		));


		$gaps = $this->Level->find('all',array(
				'conditions' => array(
					'level like' => $id
					),
				'contain' => array(
					'Student' => array(
						'Child'
						)
					)
			));

		$this->set(compact('students', $this->paginate(), 'id','gags','gaps','folks','explode','countStudents','schoolYears','levels','lists'));
			
	}

	public function students($id = null){

		
		$this->SchoolYear->Behaviors->attach('Containable');
		//$this->Level->Behaviors->attach('Containable');
		
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
					'Child',
					'Talent'
				),

				
			)
		));

		$levels = $this->Level->find('all');
   		
		$url = $this->referer();
		$url2 = $this->here;
		$explode = explode("/",$url2);




		$this->set(compact('students', $this->paginate(), 'id','folks','explode','countStudents','schoolYears','levels','lists'));
	}


}
