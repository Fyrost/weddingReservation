<?php
       include('db.php');
       include('query.php');
       $database     = new db();
       $errors         = array();
       $data           = array();
       if (empty($_POST['name']))
              $errors['name'] = 'Name is required.';

       if(!preg_match("/^[a-zA-Z ]*$/",$_POST['name']))
              $errors['name'] = 'Only letters and white space allowed.';

       if (empty($_POST['email']))
              $errors['email'] = 'Email is required.';

       if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
              $errors['email'] = 'Email is invalid.';

       if (empty($_POST['number']))
              $errors['number'] = 'Number is required.';

       if (empty($_POST['photographer']))
              $errors['photographer'] = 'Photographer is required.';

       if (empty($_POST['date']))
              $errors['date'] = 'Date is required.';

       if ( ! empty($errors)) {
              $data['success'] = false;
              $data['errors']  = $errors;
       } else {
              $data['name'] = $_POST['name'];
              $errors['email'] = $_POST['email'];
              $errors['number'] = $_POST['number'];
              $errors['photographer'] = $_POST['photographer'];
              $errors['date'] = $_POST['date'];
              //dito dapat ung queries
              $data['success'] = true;
              $data['message'] = 'Success!';
       }
       echo json_encode($data);
?>
