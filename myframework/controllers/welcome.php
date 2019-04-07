<?

class welcome extends AppController {
	
	public function __construct($parent) {
		$this->parent=$parent;
	}

	public function about(){
		$data = array();
		$data["pagename"] = "about";
		$data["navigation"] = array("home"=>"/welcome/home", "about"=>"/welcome/about");
		$this->parent->getView("aboutheader",$data);
		$this->parent->getView("aboutbody");
		$this->parent->getView("aboutfooter");
	}

	public function home(){
		$data = array();
		$data["pagename"] = "home";
		$data["navigation"] = array("home"=>"/welcome/home", "about"=>"/welcome/about");
		$this->parent->getView("header",$data);
		$this->parent->getView("body");
		$this->parent->getView("footer");
	}

}

?>