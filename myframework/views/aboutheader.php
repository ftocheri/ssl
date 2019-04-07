<html>

<style type="text/css">
body {
	background-color: lightgrey;
}
.center {
	margin: 0 auto;
	text-align: center;
	padding: 10px;
	text-decoration: none;
}
.selected {
	color: red;
	text-decoration: underline;
}
.footer {
	position: fixed;
	left: 0px;
	bottom: 0px;
	height: 30px;
	width: 100%;
}
</style>

<?
echo "<div class='center'>";
foreach($data["navigation"] as $key => $link) {
	if($key == "about") {
		echo "<a class='center selected' href='".$link."'>".strtoupper($key)."</a>";
	}
	else {
		echo "<a class='center' href='".$link."'>".strtoupper($key)."</a> | ";
	}
}
echo "</div>";
?>

<div class="center">
<h1>About</h1>
</div>