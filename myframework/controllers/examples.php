<?

class examples extends AppController {
	
	public function __construct($parent) {
		$this->parent=$parent;
	}

	public function index(){
		$data = array();
		$data["pagename"] = "examples";
		$data["navigation"] = array("home"=>"/home", "about"=>"/about", "examples"=>"/examples");
		$this->parent->getView("header",$data);
		$this->parent->getView("examples");
		$this->parent->getView("footer");
	}

}

?>