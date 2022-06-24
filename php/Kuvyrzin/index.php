<?php
	require_once("datebase.php");
	require_once("models/articles.php");

	$link = db_connect();
if(isset($_GET['action'])){
}else{
	$action = "";
}
if($action =="add"){
	if(!empty($_POST)){
		articles_new($link, $_POST['date'], $_POST['content']);
		header("Location: index.php");
	}
	include("../views/article_admin.php");
} else{
	$articles = articles_all($link);
	include("views/articles.php");
}
?>