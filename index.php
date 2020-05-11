<?php 

session_start();

set_time_limit(60);
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once("vendor/autoload.php");
include ("funcoes.php");

use \Slim\Slim;
use \InstagramScraper\Instagram;
use \InstagramScraper\Model\Account;
use \Phpfastcache\Helper\Psr16Adapter;
//YOUTUBE
use YouTube\YouTubeDownloader;

$app = new Slim();

$app->config('debug', true);

	$app->get('/', function() {////////////////////

		$lang = substr(Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']), 0, 2);

		if ($lang == 'pt'){
			header('Location: /pt/instagram');
			exit;
		} else if ($lang == 'es'){
			header('Location: /es/instagram');
			exit;
		} else if ($lang == 'en'){
			header('Location: /en/instagram');
			exit;
		} else if ($lang == 'it'){
			header('Location: /it/instagram');
			exit;
		} else if ($lang == 'de'){
			header('Location: /de/instagram');
			exit;
		} else if ($lang == 'fr'){
			header('Location: /fr/instagram');
			exit;	
		} else {
			header('Location: /pt/instagram');
			exit;
		}

	});

	$app->get("/privacidade", function(){

		include ('about.php');

	});

	$app->get("/contato", function(){

		include ('contact.php');

	});

	$app->post("/contato", function(){

		include ('contact.php');

	});

	$app->get("/pt/instagram", function(){////////////////Português

		include ('locales/pt/pt.php');

	});

	/*
		Depois de postar a url no box em português		
	*/
	$app->post("/pt/instagram", function(){/////////////////Português

		$instagram = new \InstagramScraper\Instagram();

		if (isset($_SESSION['login_instagram'])){//Verifica se sessão já aberta

			try{
				
				$instagram = \InstagramScraper\Instagram::withCredentials($_SESSION['login_instagram'], base64_decode($_SESSION['senha_instagram']), new Psr16Adapter('Files'));
				$instagram->login();
				//$instagram->saveSession(); ///// Não estou salvando 
			} catch (Exception $e){
				$erro_login = $e->getMessage();
			}

		} else if (isset($_POST['login']) && isset($_POST['senha'])){//testa se logou

			if(filter_var($_POST['login'], FILTER_VALIDATE_EMAIL)){//Valida se e-mail válido
				$login = $_POST['login'];
			} else {
				$login = str_replace('@', '', $_POST['login']);//caso logue com nome de usuario, retira o '@'
			}
			
			$senha = $_POST['senha'];
			try{

				$_SESSION['login_instagram'] = $login;
				$_SESSION['senha_instagram'] = base64_encode($senha);
				$instagram = \InstagramScraper\Instagram::withCredentials($login, $senha, new Psr16Adapter('Files'));
				$instagram->login();
				//$instagram->saveSession(); ///// Não estou salvando 
			} catch (Exception $e){
				$erro_login = $e->getMessage();
			}
		}

		try {
		
		    $media = $instagram->getMediaByUrl($_POST['url']);
		
			$type = $media->getType();

			if ($type == 'video'){
				$url = $media->getVideoStandardResolutionUrl();
			} else if ($type == 'image'){
				$url = $media->getImageHighResolutionUrl();
			} else if ($type == 'sidecar'){
				foreach ($media->getSidecarMedias() as $k => $sidecarMedia) {
					if ($sidecarMedia->getType() == 'image'){
	    				$url[$k]['link'] = $sidecarMedia->getImageHighResolutionUrl();
	    				$url[$k]['tipo'] = 'image';
	    			} else if ($sidecarMedia->getType() == 'video'){
	    				$url[$k]['link'] = $sidecarMedia->getVideoStandardResolutionUrl();
	    				$url[$k]['tipo'] = 'video';
	    			}
				}
			}
			
		} catch (Exception $e) {
		    $erro =  $e->getMessage();
		}

		include ('locales/pt/pt.php');
	
	});

	$app->get("/pt/youtube", function(){////////////////Português///// YOUTUBE /////////////

		include ('locales/pt/pt-yt.php');

	});

	$app->post("/pt/youtube", function(){////////////////Português///// YOUTUBE /////////////

		$yt = new YouTubeDownloader();

		$links = $yt->getDownloadLinks($_POST['url']);

		$url = getUrlSelecionada($links, $_POST['opcao']);

		include ('locales/pt/pt-yt.php');

	});

	////////////// FIM YOUTUBE ////////////


	$app->get("/pt/youtube-mp3", function(){////////////////Português///// YOUTUBE /////////////

		$url = 'https://www.youtube.com/watch?v=QuKTH18OBII&list=RDhNaUnwfPS0Y&index=7';

		$yt = new YouTubeDownloader();

		$links = $yt->extractVideoId($url);

		var_dump($links);
		
		var_dump($yt->getBrowser());


		include ('locales/pt/pt-yt-mp3.php');

	});




	///////////////////////INGLES

	$app->get("/en/instagram", function(){/////////////////////

		include ('locales/en/en.php');


	});

	/*
		Depois de postar a url no box em INGLES		
	*/
	$app->post("/en/instagram", function(){

		$instagram = new \InstagramScraper\Instagram();

		if (isset($_SESSION['login_instagram'])){//Verifica se sessão já aberta

			try{
				
				$instagram = \InstagramScraper\Instagram::withCredentials($_SESSION['login_instagram'], base64_decode($_SESSION['senha_instagram']), new Psr16Adapter('Files'));
				$instagram->login();
				//$instagram->saveSession(); ///// Não estou salvando 
			} catch (Exception $e){
				$erro_login = $e->getMessage();
			}

		} else if (isset($_POST['login']) && isset($_POST['senha'])){//testa se logou

			if(filter_var($_POST['login'], FILTER_VALIDATE_EMAIL)){//Valida se e-mail válido
				$login = $_POST['login'];
			} else {
				$login = str_replace('@', '', $_POST['login']);//caso logue com nome de usuario, retira o '@'
			}
			
			$senha = $_POST['senha'];
			try{

				$_SESSION['login_instagram'] = $login;
				$_SESSION['senha_instagram'] = base64_encode($senha);
				$instagram = \InstagramScraper\Instagram::withCredentials($login, $senha, new Psr16Adapter('Files'));
				$instagram->login();
				//$instagram->saveSession(); ///// Não estou salvando 
			} catch (Exception $e){
				$erro_login = $e->getMessage();
			}
		}

		try {
		
		    $media = $instagram->getMediaByUrl($_POST['url']);
		
			$type = $media->getType();

			if ($type == 'video'){
				$url = $media->getVideoStandardResolutionUrl();
			} else if ($type == 'image'){
				$url = $media->getImageHighResolutionUrl();
			} else if ($type == 'sidecar'){
				foreach ($media->getSidecarMedias() as $k => $sidecarMedia) {
					if ($sidecarMedia->getType() == 'image'){
	    				$url[$k]['link'] = $sidecarMedia->getImageHighResolutionUrl();
	    				$url[$k]['tipo'] = 'image';
	    			} else if ($sidecarMedia->getType() == 'video'){
	    				$url[$k]['link'] = $sidecarMedia->getVideoStandardResolutionUrl();
	    				$url[$k]['tipo'] = 'video';
	    			}
				}
			}
			
		} catch (Exception $e) {
		    $erro =  $e->getMessage();
		}

		include ('locales/en/en.php');
	
	});	






	///////////////////////ESPANHOL 

	$app->get("/es/instagram", function(){/////////////////////

		include ('locales/es/es.php');


	});

	/*
		Depois de postar a url no box em português		
	*/
	$app->post("/es/instagram", function(){/////////////////Espanhol

		$instagram = new \InstagramScraper\Instagram();

		if (isset($_SESSION['login_instagram'])){//Verifica se sessão já aberta

			try{
				
				$instagram = \InstagramScraper\Instagram::withCredentials($_SESSION['login_instagram'], base64_decode($_SESSION['senha_instagram']), new Psr16Adapter('Files'));
				$instagram->login();
				//$instagram->saveSession(); ///// Não estou salvando 
			} catch (Exception $e){
				$erro_login = $e->getMessage();
			}

		} else if (isset($_POST['login']) && isset($_POST['senha'])){//testa se logou

			if(filter_var($_POST['login'], FILTER_VALIDATE_EMAIL)){//Valida se e-mail válido
				$login = $_POST['login'];
			} else {
				$login = str_replace('@', '', $_POST['login']);//caso logue com nome de usuario, retira o '@'
			}
			
			$senha = $_POST['senha'];
			try{

				$_SESSION['login_instagram'] = $login;
				$_SESSION['senha_instagram'] = base64_encode($senha);
				$instagram = \InstagramScraper\Instagram::withCredentials($login, $senha, new Psr16Adapter('Files'));
				$instagram->login();
				//$instagram->saveSession(); ///// Não estou salvando 
			} catch (Exception $e){
				$erro_login = $e->getMessage();
			}
		}

		try {
		
		    $media = $instagram->getMediaByUrl($_POST['url']);
		
			$type = $media->getType();

			if ($type == 'video'){
				$url = $media->getVideoStandardResolutionUrl();
			} else if ($type == 'image'){
				$url = $media->getImageHighResolutionUrl();
			} else if ($type == 'sidecar'){
				foreach ($media->getSidecarMedias() as $k => $sidecarMedia) {
					if ($sidecarMedia->getType() == 'image'){
	    				$url[$k]['link'] = $sidecarMedia->getImageHighResolutionUrl();
	    				$url[$k]['tipo'] = 'image';
	    			} else if ($sidecarMedia->getType() == 'video'){
	    				$url[$k]['link'] = $sidecarMedia->getVideoStandardResolutionUrl();
	    				$url[$k]['tipo'] = 'video';
	    			}
				}
			}
			
		} catch (Exception $e) {
		    $erro =  $e->getMessage();
		}

		include ('locales/es/es.php');
	
	});

	/////////// FIM ESPANHOL


	///////////////////////FRANCES 

	$app->get("/fr/instagram", function(){/////////////////////

		include ('locales/fr/fr.php');


	});

	/*
		Depois de postar a url no box em português		
	*/
	$app->post("/fr/instagram", function(){/////////////////FrancÊs

		$instagram = new \InstagramScraper\Instagram();

		if (isset($_SESSION['login_instagram'])){//Verifica se sessão já aberta

			try{
				
				$instagram = \InstagramScraper\Instagram::withCredentials($_SESSION['login_instagram'], base64_decode($_SESSION['senha_instagram']), new Psr16Adapter('Files'));
				$instagram->login();
				//$instagram->saveSession(); ///// Não estou salvando 
			} catch (Exception $e){
				$erro_login = $e->getMessage();
			}

		} else if (isset($_POST['login']) && isset($_POST['senha'])){//testa se logou

			if(filter_var($_POST['login'], FILTER_VALIDATE_EMAIL)){//Valida se e-mail válido
				$login = $_POST['login'];
			} else {
				$login = str_replace('@', '', $_POST['login']);//caso logue com nome de usuario, retira o '@'
			}
			
			$senha = $_POST['senha'];
			try{

				$_SESSION['login_instagram'] = $login;
				$_SESSION['senha_instagram'] = base64_encode($senha);
				$instagram = \InstagramScraper\Instagram::withCredentials($login, $senha, new Psr16Adapter('Files'));
				$instagram->login();
				//$instagram->saveSession(); ///// Não estou salvando 
			} catch (Exception $e){
				$erro_login = $e->getMessage();
			}
		}

		try {
		
		    $media = $instagram->getMediaByUrl($_POST['url']);
		
			$type = $media->getType();

			if ($type == 'video'){
				$url = $media->getVideoStandardResolutionUrl();
			} else if ($type == 'image'){
				$url = $media->getImageHighResolutionUrl();
			} else if ($type == 'sidecar'){
				foreach ($media->getSidecarMedias() as $k => $sidecarMedia) {
					if ($sidecarMedia->getType() == 'image'){
	    				$url[$k]['link'] = $sidecarMedia->getImageHighResolutionUrl();
	    				$url[$k]['tipo'] = 'image';
	    			} else if ($sidecarMedia->getType() == 'video'){
	    				$url[$k]['link'] = $sidecarMedia->getVideoStandardResolutionUrl();
	    				$url[$k]['tipo'] = 'video';
	    			}
				}
			}
			
		} catch (Exception $e) {
		    $erro =  $e->getMessage();
		}

		include ('locales/fr/fr.php');
	
	});

	/////////// FIM FRANCES




	///////////////////////ALEMÃO 

	$app->get("/de/instagram", function(){/////////////////////

		include ('locales/de/de.php');


	});

	/*
		Depois de postar a url no box em ALEMÃO
	*/
	$app->post("/de/instagram", function(){/////////////////ALEMÃO
		$instagram = new \InstagramScraper\Instagram();

		if (isset($_SESSION['login_instagram'])){//Verifica se sessão já aberta

			try{
				
				$instagram = \InstagramScraper\Instagram::withCredentials($_SESSION['login_instagram'], base64_decode($_SESSION['senha_instagram']), new Psr16Adapter('Files'));
				$instagram->login();
				//$instagram->saveSession(); ///// Não estou salvando 
			} catch (Exception $e){
				$erro_login = $e->getMessage();
			}

		} else if (isset($_POST['login']) && isset($_POST['senha'])){//testa se logou

			if(filter_var($_POST['login'], FILTER_VALIDATE_EMAIL)){//Valida se e-mail válido
				$login = $_POST['login'];
			} else {
				$login = str_replace('@', '', $_POST['login']);//caso logue com nome de usuario, retira o '@'
			}
			
			$senha = $_POST['senha'];
			try{

				$_SESSION['login_instagram'] = $login;
				$_SESSION['senha_instagram'] = base64_encode($senha);
				$instagram = \InstagramScraper\Instagram::withCredentials($login, $senha, new Psr16Adapter('Files'));
				$instagram->login();
				//$instagram->saveSession(); ///// Não estou salvando 
			} catch (Exception $e){
				$erro_login = $e->getMessage();
			}
		}

		try {
		
		    $media = $instagram->getMediaByUrl($_POST['url']);
		
			$type = $media->getType();

			if ($type == 'video'){
				$url = $media->getVideoStandardResolutionUrl();
			} else if ($type == 'image'){
				$url = $media->getImageHighResolutionUrl();
			} else if ($type == 'sidecar'){
				foreach ($media->getSidecarMedias() as $k => $sidecarMedia) {
					if ($sidecarMedia->getType() == 'image'){
	    				$url[$k]['link'] = $sidecarMedia->getImageHighResolutionUrl();
	    				$url[$k]['tipo'] = 'image';
	    			} else if ($sidecarMedia->getType() == 'video'){
	    				$url[$k]['link'] = $sidecarMedia->getVideoStandardResolutionUrl();
	    				$url[$k]['tipo'] = 'video';
	    			}
				}
			}
			
		} catch (Exception $e) {
		    $erro =  $e->getMessage();
		}

		include ('locales/de/de.php');
	
	});

	/////////// FIM ALEMÃO


	///////////////////////ITALIANO 

	$app->get("/it/instagram", function(){/////////////////////

		include ('locales/it/it.php');


	});

	/*
		Depois de postar a url no box em português		NÃO TRADUZIDO
	*/
	$app->post("/it/instagram", function(){/////////////////Italiano

		$instagram = new \InstagramScraper\Instagram();

		if (isset($_SESSION['login_instagram'])){//Verifica se sessão já aberta

			try{
				
				$instagram = \InstagramScraper\Instagram::withCredentials($_SESSION['login_instagram'], base64_decode($_SESSION['senha_instagram']), new Psr16Adapter('Files'));
				$instagram->login();
				//$instagram->saveSession(); ///// Não estou salvando 
			} catch (Exception $e){
				$erro_login = $e->getMessage();
			}

		} else if (isset($_POST['login']) && isset($_POST['senha'])){//testa se logou

			if(filter_var($_POST['login'], FILTER_VALIDATE_EMAIL)){//Valida se e-mail válido
				$login = $_POST['login'];
			} else {
				$login = str_replace('@', '', $_POST['login']);//caso logue com nome de usuario, retira o '@'
			}
			
			$senha = $_POST['senha'];
			try{

				$_SESSION['login_instagram'] = $login;
				$_SESSION['senha_instagram'] = base64_encode($senha);
				$instagram = \InstagramScraper\Instagram::withCredentials($login, $senha, new Psr16Adapter('Files'));
				$instagram->login();
				//$instagram->saveSession(); ///// Não estou salvando 
			} catch (Exception $e){
				$erro_login = $e->getMessage();
			}
		}

		try {
		
		    $media = $instagram->getMediaByUrl($_POST['url']);
		
			$type = $media->getType();

			if ($type == 'video'){
				$url = $media->getVideoStandardResolutionUrl();
			} else if ($type == 'image'){
				$url = $media->getImageHighResolutionUrl();
			} else if ($type == 'sidecar'){
				foreach ($media->getSidecarMedias() as $k => $sidecarMedia) {
					if ($sidecarMedia->getType() == 'image'){
	    				$url[$k]['link'] = $sidecarMedia->getImageHighResolutionUrl();
	    				$url[$k]['tipo'] = 'image';
	    			} else if ($sidecarMedia->getType() == 'video'){
	    				$url[$k]['link'] = $sidecarMedia->getVideoStandardResolutionUrl();
	    				$url[$k]['tipo'] = 'video';
	    			}
				}
			}
			
		} catch (Exception $e) {
		    $erro =  $e->getMessage();
		}

		include ('locales/it/it.php');
	
	});

	/////////// FIM ITALIANO

$app->run();

 ?>
