<?php 
session_start();

$rand = rand(0,9999);

$_SESSION['id'] = $rand;

header('Location: home');

?>