<?

class crud extends AppController {
	
	public function __construct($parent) {
		$this->parent=$parent;

		if(!@$_SESSION["isloggedin"] || @$_SESSION["isloggedin"]!="1"){
			header("location:/login?msg=Not Allowed");
		}
	}

	public function index(){

		$data = array();
		$data["pagename"] = "crud";
		$data["navigation"] = array("home"=>"/home", "login"=>"/login", "register"=>"/register", "examples"=>"/examples");

		$this->parent->getView("header",$data);
		$this->parent->getView("body");
		$this->parent->getView("footer");
	}

}

?>