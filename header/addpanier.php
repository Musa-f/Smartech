<?php
include_once "../catalogue/bdd.php";
if(!isset($_SESSION)){
    session_start(); 
}

if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $product = mysqli_query($bdd, "SELECT * FROM telephones WHERE id=$id");
    $_SESSION['panier'][$id]= 1;
    if(empty(mysqli_fetch_assoc($product))){
        die("Ce produit n'existe pas");
    }

    header("Location:panier.php");
}

?>