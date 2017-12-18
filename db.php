<?php
<<<<<<< HEAD
  DEFINE("DB_HOST", 'localhost');
  DEFINE("DB_USER", 'root');
  DEFINE("DB_PASS", '');
  DEFINE("DB_NAME", 'reservation');
  class db
  {
    private $connection = null;

    public function __construct()
    {
      $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function others($query)
    {
      $result = @mysqli_query($this->connection, $query);
      return $result;
    }

    private function query($query)
    {
      $dbQuery = mysql_query($query);
      return $dbQuery;
    }

    public function get_row($query)
    {
      $result = $this->connection->query($query);
      $row = $result->fetch_assoc();
      return $row;
    }

    public function is_empty($query)
    {
      $result = $this->connection->query($query);
      if ($result == false)
      {
        return false;
      }
      return true;
    }

    public function get_multi_row($query)
    {
      $rows = array();
      $result = $this->connection->query($query);
      while ($row = $result->fetch_assoc())
      {
        $rows[] = $row;
      }
      return $rows;
    }

    public function db_close()
    {
      mysqli_close($this->connection);
    }

  }
=======
  //variables used to connect database
         $hostname = 'localhost';
         $username = 'root';
         $password = '';
         $dbname = 'reservation';

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
>>>>>>> c30c0a52285bbe1a41ed29e3a2088a03e7cd85ee
?>
