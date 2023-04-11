<?php 
  include_once "../model/ConDB.php";
  include_once "../model/Iregister.php";

  $cs_id = htmlspecialchars($_GET["cs_id"]);
  
  // $obj_name = new Course();
  // $rs2 = $obj_name->getCourseDetail($cs_id)
  $obj_name = new Register();
  $rs2 = $obj_name->getRegisterCourse($cs_id);
  include "../view/view_register.php"
?>