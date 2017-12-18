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
    $database->others(sprintf(USER_INSERT,$_REQUEST["u"], $_REQUEST["p"]));
  }
  else if(isset($_REQUEST["lu"]) && isset($_REQUEST["lp"]))
  {
    $username = $_REQUEST['lu'];
    $password = $_REQUEST['lp'];
    $count = $database->get_row(sprintf(USER_PASS_CHECK, $username, $password));
    if ($count['count'] == 0)
    {
      echo "Invalid Username/Password";
    }
  }
?>
