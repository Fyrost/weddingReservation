<?php
  // DEFINE("PRESCRIPTION_ADD", "INSERT INTO prescription(prescription_remarks, prescription_patient_id, prescription_user_id, prescription_date)
  //                             VALUES ('%s', %s, %s, NOW())");
  // DEFINE("PRESCRIPTION_LATESTADD", "SELECT MAX(prescription_id) as max FROM prescription");
  //
  // //Misc
  // DEFINE("MISC_LIST", "SELECT * FROM %s");

  DEFINE("COUNT_RESERVED", "SELECT COUNT(*) as count FROM reserve WHERE date = '%s' AND isConfirmed=0");
  DEFINE("USER_CHECK", "SELECT COUNT(*) as count FROM admin WHERE user='%s'");
  DEFINE("USER_PASS_CHECK", "SELECT COUNT(*) as count FROM admin WHERE user='%s' AND pass='%s'");
  DEFINE("USER_INSERT", "INSERT INTO admin(user, pass) VALUES('%s', '%s')");
?>
