<?php
	session_start();
	$_SESSION["connecte"] = false;
	$_SESSION["pseudo"] = null;
	session_destroy();
	header("Location:accueil");