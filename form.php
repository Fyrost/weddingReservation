<?php
       $errors         = array();
       $data           = array();
       if (empty($_POST['name']))
              $errors['name'] = 'Name is required.';

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
              //dito ung process
              $data['success'] = true;
              $data['message'] = 'Success!';
       }
       echo json_encode($data);
?>
