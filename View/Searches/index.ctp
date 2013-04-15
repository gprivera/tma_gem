<?php 
    mysql_connect("localhost","root","gemeuber") or die(mysql_error());
    mysql_select_db("tma") or die(mysql_error());

    $ident=array();
    $surname=array();
    $middle=array();
    $given=array();
    $address=array();
    $member=array();

    

    if(($_POST["search"])!=null){
        $searched = $_POST["search"];
        $folks = "SELECT id,surname,middle_name,given_name,address FROM folks WHERE surname like '%$searched%' OR middle_name like '%$searched%' OR given_name like '%$searched%'";
        $query = mysql_query($folks);
        while($data = mysql_fetch_row($query)){
            $ident[] = $data[0];
            $surname[] = $data[1];
            $middle[] = $data[2];
            $given[] = $data[3];
            $address[] = $data[4];
            $member[] = "Parent";
        }
        $children = "SELECT id,surname,middle_name,given_name,address FROM children WHERE surname like '%$searched%' OR middle_name like '%$searched%' OR given_name like '%$searched%'";
        $query = mysql_query($children);
        while($data = mysql_fetch_row($query)){
            $ident[] = $data[0];
            $surname[] = $data[1];
            $middle[] = $data[2];
            $given[] = $data[3];
            $address[] = $data[4];
            $member[] = "Child";
        }
        $student = "SELECT t1.id,t1.surname,t1.middle_name,t1.given_name,t1.address FROM children t1 LEFT JOIN students t2 ON t1.id = t2.child_id WHERE student_number = '$searched'";
        $query = mysql_query($student);
        while($data = mysql_fetch_row($query)){
            $ident[] = $data[0];
            $surname[] = $data[1];
            $middle[] = $data[2];
            $given[] = $data[3];
            $address[] = $data[4];
            $member[] = "Student";
        }
    }

?>

<html>
<head>

</head>
    <body>

        <form method="POST" action="index">
            <input type="text" name="search" placeholder="Search Name or ID">
            <input type="submit" value="Submit" >
        </form>

        <?php
            if((count($surname)>0))
            {
                $num = count($surname);

                echo("
                        <center><h3>Search for <i>'$searched'</i> generated $num results</h3></center>
                        <table id='gradient-style'>
                            <tr>
                                <th>ID No.</th>
                                <th>Surname</th>
                                <th>Given Name</th>
                                <th>Middle Name</th>
                                <th>Address</th>
                                <th>Family Member</th>
                            </tr>
                    ");

                    for($i=0;$i<$num;$i++)
                    {
                        echo("
                                <tr>
                                    <td>$ident[$i]</td>
                                    <td>$surname[$i]</td>
                                    <td>$given[$i]</td>
                                    <td>$middle[$i]</td>
                                    <td>$address[$i]</td>
                                    <td>$member[$i]</td>
                                </tr>
                            ");
                    }

                    echo("
                        </table>
                    ");
            }
        ?>
    </body>
</html>