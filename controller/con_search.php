
<?php
    $keywords = $_GET['keywords'];
    include_once '../model/ConDB.php';
    include_once '../model/Course.php';
    $obj_name = new Course();
    $rs2 = $obj_name->getCourseforSearch($keywords);
    foreach($rs2 as $result2){
        include "../view/view_course_card2.php";
    }
?>