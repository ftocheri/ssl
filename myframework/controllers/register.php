<?

class register extends AppController {
	
	public function __construct($parent) {
		$this->parent=$parent;
	}

	public function index(){
		$data = array();
		$data["pagename"] = "register";
		$data["navigation"] = array("home"=>"/home", "login"=>"/login", "register"=>"/register", "examples"=>"/examples", "books"=>"/books", "youtube"=>"/youtube");
		$random = substr( md5(rand()), 0, 7);
		$data["cap"]=$random;

		$this->parent->getView("header",$data);
		$this->parent->getView("register", $data);
		$this->parent->getView("footer");
	}

	public function registerConfirmed() {
		$data = array();
		$data["pagename"] = "register";
		$data["navigation"] = array("home"=>"/home", "login"=>"/login", "register"=>"/register", "examples"=>"/examples");
		$this->parent->getView("header",$data);
		$this->parent->getView("registerConfirmed");
		$this->parent->getView("footer");
	}

	public function registerAction() {
		/*var_dump($_POST);
		var_dump($_GET);
		var_dump($_REQUEST);*/

		$err = array();

		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];

		if(!@$_POST["usercatpcha"] || $_POST["usercatpcha"]!=$_SESSION["capData"]){
				array_push($err,"Captcha Incorrect");
		}

		if(empty($name) || $name == "") {
			array_push($err, "First Name field is empty.");
		}
		else {
			if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
				array_push($err, "Invalid characters in first name field.");
			}
		}
		if(empty($lastname) || $lastname == "") {
			array_push($err, "Last Name field is empty.");
		}
		else {
			if(!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
				array_push($err, "Invalid characters in last name field.");
			}
		}

		if(empty($username) || $username == "") {
			array_push($err, "Username field is empty.");
		}

		if(count($err) > 0) {
			header("location:/register?msg=".implode("$",$err));
		}
		else {
			header("location:/register/registerConfirmed");
		}

	}

}

?>