<? 	

class books extends AppController {
	public function __construct($parent) {
		$this->parent = $parent;
	}


	public function index(){
		$data = array();
		$data["pagename"] = "books";
		$data["navigation"] = array("home"=>"/home", "login"=>"/login", "register"=>"/register", "examples"=>"/examples", "books"=>"/books", "youtube"=>"/youtube");
		$apiData = $this->parent->getModel("apiModel")->googleBooks("Henry David Thoreau");
		$this->parent->getView("header",$data);
		$this->parent->getView("books", $apiData);
		$this->parent->getView("footer");
	}
}


?>