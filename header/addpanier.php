<?php
include_once "../catalogue/bdd.php";
if(!isset($_SESSION)){ //si la variable session est nulle (non déclarée), démarrer la session
    session_start(); 
}

if(!isset($_SESSION['panier'])){ //si la variable est nulle
    $_SESSION['panier'] = array(); //la variable de la session panier contient un tableau
}

if(isset($_GET['id'])){ //si la variable get id est déclarée
    $id = $_GET['id']; //on enregistre l'id indiquées dans l'url dans une variable
    $product = mysqli_query($bdd, "SELECT * FROM telephones WHERE id=$id"); //exécute une requête
    $_SESSION['panier'][$id]= 1; //on ajoute le produit au panier grâce à l'id qu'on a récupéré
    if(empty(mysqli_fetch_assoc($product))){
        die("Ce produit n'existe pas"); //si on se rend sur une page qui n'existe pas, une erreur s'affiche
    }

    header("Location:panier.php"); //on revoie à la page panier si on ajoute un article
}

?>