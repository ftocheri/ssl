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
		$this->parent->getView("loginForms");
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
		if($email == "forrest@aol.com" && $pass == "1234") {
			header("location:/login?msg=Good Login");
		}
		else {
			header("location:/login?msg=Invalid User");
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