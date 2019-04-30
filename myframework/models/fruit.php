<?

class fruit {
  public function __construct($parent) {
    $this->parent = $parent;
  }

  public function select($sql, $val=array()) {
    $this->sql = $this->parent->db->prepare($sql);
    $result = $this->sql->execute($val);
    $data = $this->sql->fetchAll(PDO::FETCH_ASSOC);

    return $data;
  }

  public function insert($sql, $val=array()) {
    $this->sql = $this->parent->db->prepare($sql);
    $result = $this->sql->execute($val);
  }

  public function delete($sql, $val=array()) {
    $this->sql = $this->parent->db->prepare($sql);
    $result = $this->sql->execute($val);
  }

  public function update($sql, $val=array()) {
    $this->sql = $this->parent->db->prepare($sql);
    $result = $this->sql->execute($val);
  }
}

class apiModel {
  public function __construct($parent) {
    $this->db = $parent->db;
  }

  public function googleBooks($term='') {
    $client = new Google_Client();
    $client->setApplicationName("sslapi");
    $client->setDeveloperKey("AIzaSyDaBQ8tf9WEDRe8ChkJQyDzbliOcrzCK2c
");

    $service = new Google_Service_Book($client);

    $optParams = array("filter"=>"free-ebooks");
    $result = $service->volumes->listVolutes($term, $optParams);

    return $result;
  }
}

?>