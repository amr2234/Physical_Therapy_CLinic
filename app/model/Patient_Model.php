<?php
  require_once(__ROOT__ . "model/Model.php");
?>

<?php
class Patient extends Model , {
    private $ID;
    private $fname;
    private $lname;
    private $username;
    private $address;
    private $Gender;
	private $password;
    private $number;
    private $email;
    private $Birthdate;
    private $image;

  function __construct($ID,$lname="",$image="",$fname="",$username="",$email="",$number="",$Birthdate="",$address="",$password="",$Gender="") {
    $this->ID = $ID;
  // $dbh = DBh::getInstance();
		//$mysqli = $dbh->getConnection(); 
	    $this->db = $this->connect();

    if(""===$username){
      $this->readUser($ID);
    }else{
      $this->fname = $fname;
      $this->lname = $lname;
      $this->username = $username;
      $this->number = $number;
      $this->address = $address;
      $this->number = $number;
	  $this->password=$password;
      $this->email = $email;
      $this->Gender = $Gender;
      $this->Birthdate=$Birthdate;

    }
  }

  function getLName() {
    return $this->lname;
  }
  function getFName() {
    return $this->fname;
  }
  function setFName($fname) {
    return $this->fname = $fname;
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
    return $this->username;
  }
  function setUsername($username) {
    return $this->username = $username;
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

  function readPatient($ID){
    $sql = "SELECT * FROM patient where Patient_ID=.$ID";
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
    }
    else {
    $this->lname = "";
    $this->fname = "";
    $this->address = "";
    $this->number = "";
	$this->email="";
    $this->username = "";
    $this->role = "";
    $this->password = "";

    }
  }


  
  function deletePatient(){
    //$dbh = DBh::getInstance();
		//$mysqli = $dbh->getConnection(); 
        
    $sql="delete from patient where ID=$this->ID;";
    $result = $this->db->query($sql);
	  if($result === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
	 
}