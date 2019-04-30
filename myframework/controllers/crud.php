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
		$data["navigation"] = array("home"=>"/home", "login"=>"/login", "register"=>"/register", "examples"=>"/examples", "books"=>"/books", "youtube"=>"/youtube");
		$data["email"] = $_SESSION["useremail"];

		$sql = "select * from fruit_table";
		$data["fruit"] = $this->parent->getModel("fruit")->select($sql);

		$this->parent->getView("header",$data);
		$this->parent->getView("crud", $data);
		$this->parent->getView("footer");
	}

	public function addForm() {
		$data = array();
		$data["pagename"] = "crud";
		$data["navigation"] = array("home"=>"/home", "login"=>"/login", "register"=>"/register", "examples"=>"/examples");
		$data["email"] = $_SESSION["useremail"];

		$sql = "select * from fruit_table";
		$data["fruit"] = $this->parent->getModel("fruit")->select($sql);

		$this->parent->getView("header",$data);
		$this->parent->getView("addForm");
		$this->parent->getView("footer");
	}

	public function addAction() {
		$sql = "insert into fruit_table (name) values (:name)";

		$data["fruit"] = $this->parent->getModel("fruit")->insert($sql, array(":name"=>$_REQUEST["name"]));

		var_dump($sql);

		header("location:/crud");
	}

	public function delete() {
		$url = $_SERVER["PHP_SELF"];
		$segments = (explode("/", $url));
		$end = array_pop($segments);
		$sql = "delete from fruit_table where id = (:id)";
		$data["fruit"] = $this->parent->getModel("fruit")->delete($sql, array(":id"=>$end));

		header("location:/crud");
	}

	public function updateForm() {
		$data = array();
		$data["pagename"] = "crud";
		$data["navigation"] = array("home"=>"/home", "login"=>"/login", "register"=>"/register", "examples"=>"/examples");
		$data["email"] = $_SESSION["useremail"];

		$url = $_SERVER["PHP_SELF"];
		$segments = (explode("/", $url));
		$end = array_pop($segments);

		$sql = "select * from fruit_table where id = (:id)";
		$data["fruit"] = $this->parent->getModel("fruit")->select($sql, array(":id"=>$end));

		$this->parent->getView("header",$data);
		$this->parent->getView("updateForm",$data);
		$this->parent->getView("footer");
	}

	public function updateAction() {

		$sql = "update fruit_table set name = (:name) where id = (:id)";
		$data["fruit"] = $this->parent->getModel("fruit")->update($sql, array(":name"=>$_REQUEST["name"], ":id"=>$_REQUEST["id"]));

		header("location:/crud");
	}

}

?>