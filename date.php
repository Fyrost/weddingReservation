<?php
      include('db.php');
      include('query.php');
      $database = new db();
      $date = $_REQUEST["date"];
      $rdate= DateTime::createFromFormat('m/d/Y', $date)->format('Y/m/d');
      $qDate = new DateTime($date);
      if($rdate>date("Y/m/d"))
      {
        $reserved_num = $database->get_row(sprintf(COUNT_RESERVED,$qDate->format('Y/m/d')));
        if ($reserved_num["count"] == 0)
        {
          echo
          '<div class="alert alert-info fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Not yet reserved...
          </div>';
        }
        else
        {
          echo
          '<div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Date already reserved...
          </div>';
        }
      }
      else
      {
        echo
        '<div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        Date has already passed...
        </div>';
      }

?>
