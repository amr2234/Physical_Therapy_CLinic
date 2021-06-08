<?php
  require_once(__ROOT__ . "model/Model.php");
?>

<?php
class Patient extends Model , {
    private $Doctor_ID;
    private $Fname;
    private $Lname;
    private $Username;
    private $Address;
    private $Gender;
	private $Password;
    private $PhoneNum;
    private $Email;
    private $Expert_at;
    private $Degree;
    private $Profile_pic;
    private $Doctor_Added_on;
    private $Status;
  function __construct($Doctor_ID,$Lname="",$Degree="",$Username="",$Fname="",$Username="",$Email="",$PhoneNum="",$Expert_at="",$Address="",$Password="",$Gender="",$Profile_pic="",$Doctor_Added_on="") {
    $this->ID = $ID;
  // $dbh = DBh::getInstance();
		//$mysqli = $dbh->getConnection();
	    $this->db = $this->connect();

    if(""===$Doctor_ID ){
      $this->readDoctor($ID);
    }else{
      $this->Fname = $Fname;
      $this->Lname = $Lname;
      $this->Doctor_ID = $Doctor_ID;
      $this->Address = $Address;
	  $this->Password=$Password;
      $this->Email = $Email;
      $this->Gender = $Gender;
      $this->PhoneNum=$PhoneNum;
      $this->Expert_at = $Expert_at;
      $this->Degree= $Degree;
      $this->Gender = $Gender;
      $this->Profile_pic = $Profile_pic;
      $this->Doctor_Added_on = $Doctor_Added_on;
      $this->Status = $Status;

    }
  }

  function getLName() {
    return $this->Lname;
  }
  function getFName() {
    return $this->Fname;
  }
  function setFName($fname) {
    return $this->Fname = $Fname;
  }
  function setLName($lname) {
    return $this->lname = $lname;
  }
   function getPassword() {
    return $this->password;
  }
  function setPassword($password) {
    return $this->password = $password;
  }
  function getEmail() {
    return $this->email;
  }
  function setEmail($email) {
    return $this->email = $email;
  }
  function getNumber() {
    return $this->number;
  }
  function setNumber($number) {
    return $this->number = $number;
  }
  function getUsername() {
    return $this->Username;
  }
  function setUsername($Username) {
    return $this->Username = $Username;
  }
  function getAddress() {
    return $this->address;
  }
  function setAddress($address) {
    return $this->address = $address;
  }
  function getID() {
    return $this->ID;
  }
  function getGender() {
    return $this->Gender;
  }
  function setGender($Gender) {
    return $this->Gender = $Gender;
  }
  function getBithdate() {
    return $this->Bithdate;
  }
  function setBithdate($Birthdate) {
    return $this->Bithdate = $Bithdate;
  }
  function getImage() {
    return $this->image;
  }
  function setGender($image) {
    return $this->image = $image;
  }
  function getExpert_at() {
    return $this->Expert_at;
  }
  function setExpert_at($Expert_at) {
    return $this->Expert_at = $Expert_at;
  }
  function getDegree() {
    return $this->Degree;
  }
  function setExpert_at($Degree) {
    return $this->Degree = $Degree;
  }
  function get() {
    return $this->Profile_pic;
  }
  function setProfile_pic($Profile_pic) {
    return $this->Profile_pic = $Profile_pic;
  }
  function getDoctors_Added_on() {
    return $this->Doctors_Added_on;
  }
  function setDoctors_Added_on($Doctors_Added_on) {
    return $this->Doctors_Added_on = $Doctors_Added_on;
  }
  function getStatus() {
    return $this->Status;
  }
  function setStatus($Status) {
    return $this->Status = $Status;
  }





  function readDoctor($ID){
    $sql = "SELECT * FROM doctor where Doctor_ID=.$ID";
    $result = $this->db->query($sql);
    if ($result->num_rows == 1){
        $row = $db->fetchRow();
        $this->lname = $row["LName"];
        $this->fname = $row["FName"];
        $this->email = $row["Email"];
        $this->address = $row["address"];
        $this->username = $row["username"];
		$_SESSION["Name"]=$row["username"];
		$this->password=$row["Password"];
        $this->number = $row["number"];
		$this->Gender = $row["Gender"];
        $this->Birthdate=$row["birthdate"];
        $this->image=$row["Image"];
        $this->Expert_at=$row["Expert_at"];
        $this->Degree=$row["Degree"];
        $this->Profile_pic=$row["Profile_pic"];
        $this->Doctor_Added_on=$row["Doctor_Added_on"];
        $this->Status=$row["Status"];


    }
    else {
    $this->Doctor_ID= "";
    $this->Lname = "";
    $this->Fname = "";
    $this->Address = "";
    $this->PhoneNum = "";
	$this->Email="";
    $this->Username = "";
    $this->Degree = "";
    $this->Password = "";
    $this->Expert_at = "";
    $this->Gender = "";
    $this->Profile_pic= "";
    $this->Doctor_Added_on = "";
    $this->Status = "";


    }
  }


  
  function deleteDoctor(){
    //$dbh = DBh::getInstance();
		//$mysqli = $dbh->getConnection(); 
        
    $sql="delete from doctor where Doctor_ID=$this->Doctor_ID;";
    $result = $this->db->query($sql);
	  if($result === true){
            echo "deleted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
	 
}