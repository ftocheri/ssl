<?

class home extends AppController {
	
	public function __construct($parent) {
		$this->parent=$parent;
	}

	public function index(){
		$data = array();
		$data["pagename"] = "home";
		$data["navigation"] = array("home"=>"/home", "login"=>"/login", "register"=>"/register", "examples"=>"/examples");
		$this->parent->getView("header",$data);
		$this->parent->getView("body");
		$this->parent->getView("footer");
	}

}

?>