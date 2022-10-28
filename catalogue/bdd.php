<?php
//on se connecte à notre base de donnée
$bdd = mysqli_connect('localhost', 'root', '', 'smartech');
if(!$bdd) die('Erreur:'.mysqli_connect_error()); //s'il n'y a pas de base de donnée, une erreur de connexion s'affiche
?>