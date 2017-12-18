<?php
       $errors         = array();
       $data           = array();
       if (empty($_POST['name']))
              $errors['name'] = 'Name is required.';

       if (empty($_POST['email']))
              $errors['email'] = 'Email is required.';

       if (empty($_POST['number']))
              $errors['number'] = 'number is required.';

       if (empty($_POST['photographer']))
              $errors['photographer'] = 'photographer is required.';

       if (empty($_POST['date']))
              $errors['date'] = 'date is required.';
       
       if ( ! empty($errors)) {
              $data['success'] = false;
              $data['errors']  = $errors;
       } else {
              //dito ung process
              $data['success'] = true;
              $data['message'] = 'Success!';
       }
       echo json_encode($data);
?>
