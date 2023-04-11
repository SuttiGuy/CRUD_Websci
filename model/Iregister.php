<?php
interface Iregister {
    public function getRegisterCourse(string $cs_id):array;
    public function registerCourse(array $data_register):bool;

}

Class Register implements Iregister {
  private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }
  // public function getRegisterCourse(string $cs_id)
   public function getRegisterCourse(string $cs_id):array
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
  public function registerCourse(array $data_register):bool
  {
      $sql = "INSERT INTO `sci_register` (`id`, `RegisCID`, `Email`, `name`, `Phonenumber`, `IDnumber`, `educational`)";
      $sql .= " VALUES ('', :RegisCID, :Email, :name, :Phonenumber , :IDnumber , :educational);";
      $query = $this->ConDB->prepare($sql);
      if( $query->execute($data_register)){
          return true;
      }else {
          return false;
      }
  }

  }
?>