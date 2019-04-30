<? 	

class youtube extends AppController {
	public function __construct($parent) {
		$this->parent = $parent;
	}


	public function index(){
		$data = array();
		$data["pagename"] = "youtube";
		$data["navigation"] = array("home"=>"/home", "login"=>"/login", "register"=>"/register", "examples"=>"/examples", "books"=>"/books", "youtube"=>"/youtube");
		$apiData = $this->parent->getModel("apiModel")->youtube();
		$this->parent->getView("header",$data);
		$this->parent->getView("youtube",$apiData);
		$this->parent->getView("footer");
	}
}


?>