<?

class examples extends AppController {
	
	public function __construct($parent) {
		$this->parent=$parent;
	}

	public function index(){
		$data = array();
		$data["pagename"] = "examples";
		$data["navigation"] = array("home"=>"/home", "login"=>"/login", "register"=>"/register", "examples"=>"/examples", "books"=>"/books", "youtube"=>"/youtube");
		$this->parent->getView("header",$data);
		$this->parent->getView("examples");
		$this->parent->getView("footer");
	}

}

?>