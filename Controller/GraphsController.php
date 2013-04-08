<?php
App::uses('AppController', 'Controller');
mysql_connect("localhost","root","gemeuber") or die(mysql_error());
mysql_select_db("tma") or die(mysql_error());
/**
 * Answers Controller
 *
 * @property Answer $Answer
 */
class GraphsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$users = array();
		$total = array();
		$accomplished = array();
		$pending = array();

		$i=0;
		$query = mysql_query("select * from users");
		while($data = mysql_fetch_row($query))
		{
			$users[$i]=$data[1];

			$getTotal = mysql_query("select count(*) from tasks where user_id='$data[0]'");
			$total[$i] = mysql_result($getTotal, 0);

			$getAccomplished = mysql_query("select count(*) from tasks where user_id='$data[0]' and is_accomplished='1'");
			$accomplished[$i] = mysql_result($getAccomplished, 0);

			$getPending = mysql_query("select count(*) from tasks where user_id='$data[0]' and is_accomplished='0'");
			$pending[$i] = mysql_result($getPending, 0);
			
			$i++;

		}

		$this->set(compact('users','total','accomplished','pending'));
	}


}
