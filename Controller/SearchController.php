<?php
mysql_connect("localhost","root","gemeuber") or die(mysql_error());
mysql_select_db("tma") or die(mysql_error());

App::uses('AppController', 'Controller');
class SearchController extends AppController{

	public function index(){

		

		$this->set(compact('sample'));
	} 

	public function searched(){
		
	} 

}