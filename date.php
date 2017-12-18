<?php
      include('db.php');
      include('query.php');
      $database = new db();
      $date = $_GET["date"];
      $rdate= DateTime::createFromFormat('m/d/Y', $date)->format('Y/m/d');
<<<<<<< HEAD
      $qDate = new DateTime($date);
      $errors         = array();
      $data           = array();
       if($rdate>date("Y/m/d")){
              $reserved_num = $database->get_row(sprintf(COUNT_RESERVED,$qDate->format('Y/m/d')));
              if ($reserved_num["count"] == 0){
                     $data['success'] = true;
              }else
              {
                     $data['success'] = false;
                     $data['error'] = 'Date already reserved.';
              }
       }else
       {
              $data['success'] = false;
              $data['error'] = 'Date has already passed.';
       }
       echo json_encode($data);
=======
      if($rdate>date("Y/m/d"))
      {
        $reserved_num = $database->get_row(sprintf(COUNT_RESERVED,$rdate));
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

>>>>>>> 28b146c8f79b8087a8ed3687e08fd9a0106c3f77
?>
