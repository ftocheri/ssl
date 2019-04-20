<?

class login extends AppController {
	
	public function __construct($parent) {
		$this->parent=$parent;
	}

	public function index(){
		$data = array();
		$data["pagename"] = "login";
		$data["navigation"] = array("home"=>"/home", "login"=>"/login", "register"=>"/register", "examples"=>"/examples");

		$this->parent->getView("header",$data);
		$this->parent->getView("loginForms", $data);
		$this->parent->getView("footer");
	}

	public function recv() {
		if($_POST['type'] == "form") {
			$this->recvForm();
		}
		else {
			$this->recvAjax();
		}
	}

	public function recvForm() {
		$email = $_POST['email'];
		$pass = $_POST['password'];

		$sql = "select * from users_table";
		$loginAttempt["user"] = $this->parent->getModel("fruit")->select($sql);
		var_dump($loginAttempt["user"]);

		foreach($loginAttempt["user"] as $user) {
          if($user["email"] == $email && $user["password"] == $pass) {
      		$_SESSION["isloggedin"] = "1";
			$_SESSION["useremail"] = $email;
			header("location:/crud");
			return;
          }
          else {
          	$_SESSION["isloggedin"] = "0";
			$_SESSION["useremail"] = "";
			header("location:/login?msg=Invalid User");
          }
        }
	}

	public function recvAjax() {
		$email = $_POST['email'];
		$pass = $_POST['password'];
		if($email == "forrest@aol.com" && $pass == "1234") {
			echo "good";
		}
		else {
			echo "bad";
		}
	}
}

?>