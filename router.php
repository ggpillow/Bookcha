<?php
	session_start();
	$path = explode("/", $_SERVER['REQUEST_URI']);

	require_once("classes/User.php"); /*Берет инфу из файла User.php*/
	require_once("classes/Blog.php");
	require_once("classes/Route.php");
	require_once("simple_html_dom.php");
	
	$dbhost = '127.0.0.1';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'bookcha';
	$dbaport = '3306';
	$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);

	Route::view("/", "main.html");
	
	Route::view("/blog", "blog.html");
	Route::view("/contacts", "contacts.html");
	Route::view("/books", "books.html");
	Route::view("/coworking", "coworking.html");
	Route::view("/article/{id}", "article.html");
	

	Route::get("/getArticle/{id}", function($id){return Blog::getArticleById($id);});
	Route::get("/getArticles", function(){return Blog::getArticles();});
	Route::get("/getUserData", function(){return User::getUserData();});
	Route::get("/logout", function(){return User::logout();});

	
	

	if(!empty($_SESSION["id"])){
		Route::view("/profile", "profile.html");
		Route::view("/addArticle", "addArticle.html");
		Route::get("/login", function (){return header("Location: /profile");});
		Route::get("/reg", function (){return header("Location: /profile");});
		Route::post("/handlerAddArticle", function(){return Blog::handlerAddArticle();});
		Route::post("/changeAvatar", function(){return User::changeUserAvatar();});
	}else{
		Route::view("/reg", "reg.html");
		Route::view("/login", "login.html");
		Route::post("/reg", function(){return User::handlerReg();});
		Route::post("/login", function(){return User::login();});
		header ("Location: /login");
	}

