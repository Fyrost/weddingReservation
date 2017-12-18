<?php
  include('db.php');
  include('query.php');
  $database = new db();

  //User Checker
  if (isset($_REQUEST["user"]))
  {
    $username = $_REQUEST['user'];
    $count = $database->get_row(sprintf(USER_CHECK, $username));
    if ($count['count'] != 0)
    {
      echo "Username already exists.";
    }
  }
  //Register
  else if(isset($_REQUEST["u"]) && isset($_REQUEST["p"]))
  {
    echo "asd";
    $database->others(sprintf(USER_INSERT,$_REQUEST["u"], $_REQUEST["p"]));
  }
?>
