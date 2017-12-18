<?php
       include('db.php');
       //view announcement
       $date = $_REQUEST["date"];
       $rdate= DateTime::createFromFormat('m/d/Y', $date)->format('Y/m/d');
       if($rdate>date("Y/m/d")){
              mysqli_select_db($con,"reservation");
              $sql = "SELECT * FROM reserve WHERE date = '$rdate' AND isConfirmed=0";
              $result = mysqli_query($con,$sql);
              if(!empty(mysqli_fetch_array($result))){
                            echo '<div class="alert alert-danger fade in">
       		                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      Date already reserved...
       			         </div>';
              }else {
                     echo '<div class="alert alert-info fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                               Not yet reserve...
                              </div>';
              }
              mysqli_close($con);
       }else{
              echo '<div class="alert alert-danger fade in">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        Date has already pass...
                       </div>';
       }

?>
