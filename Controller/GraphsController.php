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
	public function ose() {
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

	public function dashboard(){

		$dateData="";
		$enrolledData="";
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
		
			$dates[$j] = "$i";
			$j++;
		}

		$size=count($dates);
		$size--;

		foreach ($dates as $i => $value) {
            if($i==$size){
                $dateData = "$dateData" . $dates[$i];
            }else{
                $dateData = "$dateData" . $dates[$i] . ",";
            }
        }

        foreach ($enrolled as $i => $value) {
            if($i==$size){
                $enrolledData = "$enrolledData" . $enrolled[$i];
            }else{
                $enrolledData = "$enrolledData" . $enrolled[$i] . ",";
            }
        }


		$this->set(compact('overall','size','dateData','enrolledData'));
	} 


}