<?

class about extends AppController {
	
	public function __construct($parent) {
		$this->parent=$parent;
	}

	public function index(){
		$data = array();
		$data["pagename"] = "about";
		$data["navigation"] = array("home"=>"/home", "about"=>"/about", "examples"=>"/examples");
		$this->parent->getView("header",$data);
		$this->parent->getView("aboutbody");
		$this->parent->getView("footer");
	}
}

?>