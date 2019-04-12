<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="/assets/blog-home.css" rel="stylesheet">

  <div class="modal fade" tabindex="-1" role="dialog" id="mymodal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Error</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><?echo @$_GET["msg"]?></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  <? if(@$_GET["msg"] || @$_GET["msg"] != "") {?>
  <script type="text/javascript">setTimeout(function(){$("#mymodal").modal()},500);</script>
<? } ?>

</head>

<body>


<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        	<?
        	foreach($data["navigation"] as $key => $link) {
            if(basename($_SERVER['PHP_SELF']) == "home" && $key == "home") {
            ?>
              <li class="nav-item active">
                <a class="nav-link" style="color:red;" href="<?=$link?>"><?=strtoupper($key)?></a>
              </li>
            <?
            }
            elseif(basename($_SERVER['PHP_SELF']) == "login" && $key == "login") {
            ?>
              <li class="nav-item active">
                <a class="nav-link" style="color:red;" href="<?=$link?>"><?=strtoupper($key)?></a>
              </li>
            <?
            }
            elseif(basename($_SERVER['PHP_SELF']) == "examples" && $key == "examples") {
            ?>
              <li class="nav-item active">
                <a class="nav-link" style="color:red;" href="<?=$link?>"><?=strtoupper($key)?></a>
              </li>
            <?
            }
            elseif(basename($_SERVER['PHP_SELF']) == "register" && $key == "register") {
            ?>
              <li class="nav-item active">
                <a class="nav-link" style="color:red;" href="<?=$link?>"><?=strtoupper($key)?></a>
              </li>
            <?
            }
            elseif(basename($_SERVER['PHP_SELF']) == "examples" && $key == "examples") {
            ?>
              <li class="nav-item active">
                <a class="nav-link" style="color:red;" href="<?=$link?>"><?=strtoupper($key)?></a>
              </li>
            <?
            }
            else {
              ?>
              <li class="nav-item active">
                <a class="nav-link" href="<?=$link?>"><?=strtoupper($key)?></a>
              </li>
            <?
            }
         	}
         	?>
        </ul>
      </div>
    </div>
  </nav>