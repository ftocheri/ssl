<?
require_once 'google-api-php-client-2.2.2/vendor/autoload.php';
require_once 'twitter-api-php-master/TwitterAPIExchange.php';
class apiModel {
  public function __construct($parent) {
    $this->db = $parent->db;
  }

  public function googleBooks($term='') {
    $client = new Google_Client();
    $client->setApplicationName("sslapi");
    $client->setDeveloperKey("AIzaSyDaBQ8tf9WEDRe8ChkJQyDzbliOcrzCK2c");

    $service = new Google_Service_Books($client);

    $optParams = array("filter"=>"free-ebooks");
    $result = $service->volumes->listVolumes($term, $optParams);

    return $result;
  }

  // public function twitter() {
  //   $settings = array(
  //     'oauth_access_token' => "350472246-Cmt5zfJOvxereg8OPaQVwkgy9RNXIHtmyiAE8nvZ",
  //     'oauth_access_token_secret' => "StuXDMNPwSXKr956XJoaXilUYxkyYwDbX2PyZWbG5dty4",
  //     'consumer_key' => "CfWAIY40i5gEEKxIpIwngYBFh",
  //     'consumer_secret' => "8qT8XCrmvZ6X0TVec7gQT3VlSMvnl6mriVGn6VP6Lv7oUBlrhB"
  //   );
  //   $url = 'https://api.twitter.com/1.1/followers/ids.json';
  //   $getfield = '?screen_name=J7mbo';
  //   $requestMethod = 'GET';

  //   $twitter = new TwitterAPIExchange($settings);
  //   echo $twitter->setGetfield($getfield)
  //       ->buildOauth($url, $requestMethod)
  //       ->performRequest();
  // }

  public function youtube() {
    $client = new Google_Client();
    $client->setApplicationName('API Sample');
    $client->setDeveloperKey('AIzaSyDfybOImcZ7gSxzqF6rpLBD988smHAM5ww');

    $service = new Google_Service_Youtube($client);

    $queryParams = [
      'id'=>'UCezY3BwVL2VPjsQ7MKUWpXg'
    ];
    $response = $service->channels->listChannels('snippet,contentDetails,statistics', $queryParams);
    return $response;
  }
}

?>