<?

class profile extends AppController {
	
	public function __construct($parent) {
		$this->parent=$parent;
		if(!@$_SESSION["isloggedin"] || @$_SESSION["isloggedin"]!="1"){
			header("location:/login?msg=Not Allowed");
		}
	}

	public function index(){
		$data = array();
		$data["pagename"] = "profile";
		$data["navigation"] = array("home"=>"/home", "login"=>"/login", "register"=>"/register", "examples"=>"/examples");

		
		
		$this->parent->getView("header",$data);
		$this->parent->getView("profile");
		$this->parent->getView("footer");
	}

	public function updatePicture() {
		if($_FILES["myfile"]["type"] == "image/jpg" || $_FILES["myfile"]["type"] == "image/jpeg") {
			if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "./assets/myimage.jpg")) {
				header("location:/profile");
			}else {
				echo "problem uploading";
			}
		}else {
			header("location:/profile?msg=NOT Allowed");
		}
	}

}

?>