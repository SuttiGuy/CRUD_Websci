<?php
class Course{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getCourse()
    {
        $sql = "SELECT * FROM sci_cs";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }

    public function getCourseforSearch($keywords) 
    {
        $sql = "SELECT * FROM sci_cs WHERE cs_name LIKE '%{$keywords}%'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false; 
        }
    }
    
    public function getCourseYear($cs_year)
    {
        $sql = "SELECT * FROM sci_cs where cs_year = ".$cs_year;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            return true;
        }else {
            return false; 
        }
    }

     public function getCourseDetail($cs_id)
    {
        $sql = "SELECT * FROM sci_cs where cs_id = ".$cs_id;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }

 

    public function addCourse($data_course)
    {
        $sql = "INSERT INTO `sci_cs` (`cs_id`, `cs_name`, `cs_img`, `cs_date`, `cs_wallet`, `cs_range_date`, `cs_fcourse`, 
        `cs_time`, `cs_location`, `cs_group`, `cs_detail`, `cs_perform`, `cs_reward`, `cs_schedule`, `cs_phone`)";
        $sql .= " VALUES ('', :cs_name, :cs_img, :cs_date, :cs_wallet , :cs_range_date , :cs_fcourse
        , :cs_time , :cs_location, :cs_group, :cs_detail, :cs_perform , :cs_reward , :cs_schedule, :cs_phone);";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute($data_course)){
            return true;
        }else {
            return false;
        }
    }

    public function delCourse($cs_id)
    {
        $sql = "DELETE FROM `sci_cs` WHERE `cs_id`='".$cs_id."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function editCourseeditCourse($course)
    {
        $sql = "UPDATE sci_cs SET cs_name='$course[cs_name]',
        cs_img='$course[cs_img]',
        cs_date='$course[cs_date]',
        cs_wallet='$course[cs_wallet]',
        cs_range_date='$course[cs_range_date]',
        cs_fcourse='$course[cs_fcourse]',
        cs_time='$course[cs_time]',
        cs_location='$course[cs_location]',
        cs_group='$course[cs_group]',
        cs_detail='$course[cs_detail]',
        cs_perform='$course[cs_perform]',
        cs_reward='$course[cs_reward]',
        cs_schedule='$course[cs_schedule]',
        cs_phone='$course[cs_phone]' 
        WHERE cs_id='$course[cs_id]'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }


}
?>