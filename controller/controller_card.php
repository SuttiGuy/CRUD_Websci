<?php 
    //เชื่อมต่อข้อมูล
    include_once "model/ConDB.php";
    include_once "model/Course.php";
    //สร้างตัวแปร
    $obj_name=new Course();
    $rs2= $obj_name->getCourse();
    //เรียกใช้ที่
    foreach ($rs2 as $result2){
        include "view/view_course_card.php";
    }
?>