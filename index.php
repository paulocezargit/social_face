<?php
// Pega a URL ou define 'index.php' como padrão
$url_link = isset($_GET['url']) && !empty($_GET['url']) ? $_GET['url'] : 'index.php';

// Quebra a URL pelos slashes
$url_link = array_filter(explode('/', $url_link));

// Pega o primeiro item ou 'index' se estiver vazio
$param1 = isset($url_link[0]) ? $url_link[0] : 'index';
$param2 = isset($url_link[1]) ? $url_link[1] : null;
$param3 = isset($url_link[2]) ? $url_link[2] : null;

$url_page = pathinfo($param1, PATHINFO_FILENAME);
$url_page_2 = pathinfo($param2, PATHINFO_FILENAME);
$url_page_3 = pathinfo($param3, PATHINFO_FILENAME);

?>

<?php

$site_name = "Social Face";
$page_name = "";

if($url_page == "") {
    
    $page_name = "".$site_name;
	include("assets/pages/p-home.php");

}elseif($url_page == "profile") {
    
    $page_name = "Profile | ".$site_name;
	include("assets/pages/p-profile.php");

}elseif($url_page == "post") {
    
    $page_name = "Post | ".$site_name;
	include("assets/pages/p-post.php");
	
}elseif($url_page == "messages") {
	
	$page_name = "Messages | ".$site_name;
	include("assets/pages/p-messages.php");

}elseif($url_page == "settings") {
    
    $page_name = "Settings | ".$site_name;
	include("assets/pages/p-settings.php");
	
}elseif($url_page == "notifications") {
    
    $page_name = "Notifications | ".$site_name;
	include("assets/pages/p-notifications.php");
	
}else{

	$page_name = "".$site_name;
	include("assets/pages/p-home.php");

}

?>
