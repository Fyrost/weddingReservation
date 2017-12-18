<?php
  //variables used to connect database
         $hostname = 'localhost';
         $username = 'root';
         $password = '';
         $dbname = 'students';

         //connect host
         $link = mysql_connect($hostname,$username,$password)
           or die('Connectiontohost has failed!
           Perhaps the server is down!');
         //connect database
         mysql_select_db( 'Clinic', $link)
           or die('Database not available!');
         $con = mysqli_connect($hostname,$username,$password,$dbname);

       function queryNoReturn($query){
       	$result = @mysql_query($query);
       	return $result;
       }

       function queryOneRow($query){
       	$qry = @mysql_query($query);
       	$result = mysql_fetch_assoc($qry);
       	return $result;
       }

       function queryOneData($query,$column){
       	$qry = @mysql_query($query);
       	$data = mysql_fetch_assoc($qry);
       	return $data[$column];
       }

       function queryArray($query){
       	$qry = @mysql_query($query);
       	$arr = array();
              $counter=0;
       	while($row = mysql_fetch_array($qry,MYSQL_NUM))
       	{
                            array_push($arr,$row);
       	}
       	return $arr;
       }

       function queryArrayAssoc($query){
       	$qry = @mysql_query($query);
       	$arr = array();
              $counter=0;
       	while($row = mysql_fetch_array($qry, MYSQL_ASSOC))
       	{
                            array_push($arr,$row);
       	}
       	return $arr;
       }

       function addtoDb(array $clm, array $vl,$tbl){
       		$val ="'".join($vl,"','")."'";
       		$column = join($clm,',');
       		$query="INSERT INTO $tbl ($column) VALUES ($val)";
       		$result = queryNoReturn($query);
       		// if($result)
       		// {
       		// 	forLog("Added data to table[$tbl]");
       		// }
       		// else
       		// {
       		// 	forLog("Failed Adding to table[$tbl]");
       		// }
       		return $result;
       	}

	function editDb(array $clm,array $vl,$argue, array $fltr,$tbl){
		$arr = array();
		foreach (array_combine($clm, $vl) as $col => $val)
		{
				array_push($arr,$col." = '".$val."'");
		}
		$colval =join($arr,",");
		$filter = join($fltr,',');
		$query = "UPDATE $tbl SET $colval WHERE $argue IN ($filter)";
		$result = queryNoReturn($query);
		if($result)
		{
			forLog("Updated data in table[$tbl] id[$filter]");
		}
		else
		{
			echo $query;
			forLog("Failed updating in table[$tbl] id[$filter]");
		}
		return $result;
	}
?>
