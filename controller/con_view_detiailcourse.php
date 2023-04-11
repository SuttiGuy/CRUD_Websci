<?php

  include_once("../model/ConDB.php");
  include_once("../model/Course.php");

  $cs_id = htmlspecialchars($_GET["cs_id"]);
  // echo $cs_id;
  $obj_name = new Course();
  $rs2 = $obj_name->getCourseDetail($cs_id);
  // echo $rs2['cs_id']
  include "../view/view_detail.php";
?>
