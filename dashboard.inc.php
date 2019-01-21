<?php 
class dashboardClass{
	public $error = "Please SignUp or Login first to continue";

	/*public function __toString(){
		return $this->error;
}*/
 
public function __construct(){

			if(isset($_POST["icnumber"]) && $_POST["fname"] && $_POST["lname"])
			{
				$name = $_POST["fname"]." ".$_POST["lname"];
				$username = $_POST["username"];
				$birthday = $_POST["dd"]. "/" . $_POST["mm"] . "/". $_POST["yyyy"];
				echo"<p>Name&emsp;&emsp;&emsp;: " ;	echo $name ."</p>";
				echo"<p>Username&emsp;: ";	echo $username ."</p>";
				echo"<p>Birthday&emsp;&emsp;: ";	echo $birthday."</p>";
			}
			else
			{
				echo "Please SignUp or Login to continue.";
			}
	}
}

class dbh{
	private $servername;
	private $username;
	private $password;
	private $dbname;

	protected function connect(){
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "itpusers";

		$conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);

		return $conn;
	}
}

	class User extends dbh{

	protected function getAllUsers(){
		$sql = "SELECT * FROM users";
		$result = $this->connect()->query($sql);
		$numRows = $result->num_rows;
		if ($numRows > 0){
			while($row = $result->fetch_assoc()) {
				$data[] = $row;
				}
				return $data;
		}
	}
}

	class ViewUser extends User{

	public function showAllUsers(){
		$datas = $this->getAllUsers();
		foreach($datas as $data){
			echo $data['user_uid'].". ";
			echo $data['user_email']."&emsp;";
			echo $data['user_pwd']."<br>";
		}
		}
	}
?>