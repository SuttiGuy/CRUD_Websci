<?php 
    //$cs_img=$_POST[""];
    $RegisCID=$_POST["RegisCID"];
    $Email=$_POST["Email"];
    $name=$_POST["name"];
    $Phonenumber=$_POST["Phonenumber"];
    $IDnumber=$_POST["IDnumber"];
    $educational=$_POST["educational"];


    $course=array();
    $course["RegisCID"]=$RegisCID;
    $course["Email"]=$Email;
    $course["name"]=$name;
    $course["Phonenumber"]=$Phonenumber;
    $course["IDnumber"]=$IDnumber;
    $course["educational"]=$educational;

    include_once "../model/ConDB.php";

    include_once "../model/Iregister.php";
    // $obj_name=new Course();
    // $obj_name=new Iregister();
    $obj_name=new Register();
    $rs2= $obj_name->registerCourse($course); //addCourse($course);
    include_once "../view/view_add_success2.php";
?>