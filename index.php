<?php include("header.php"); ?>


<?php

$url_page = "";

if($url_page == "") {

	include("index.php");

}elseif($url_page == "profile") {

	include("assets/pages/p-profile.php");

}elseif($url_page == "post") {

	include("assets/pages/p-post.php");
	
}elseif($url_page == "messages") {
	
	include("assets/pages/p-messages.php");

}elseif($url_page == "settings") {

	include("assets/pages/p-settings.php");
	
}elseif($url_page == "notifications") {

	include("assets/pages/p-notifications.php");
	
}else{

	include("index.php");

}

?>


<?php include("footer.php"); ?>