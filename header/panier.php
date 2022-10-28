<?php
session_start();
include_once '../catalogue/bdd.php';
$linkstyle = '<link rel="stylesheet" href="../header\css\panierstyle.css">';
require 'a-header.php';

if(isset($_GET['del'])){ 
    $id_del = $_GET['del'];
    unset($_SESSION['panier'][$id_del]); //supprime le produit
}
?>

<section>
        <h2 class="titre">Panier</h2>

        <div id="container">
            <?php 
            $total = 0;
            if(!isset($_SESSION['panier'])) //si la session panier est nulle (array vide)
            {
                echo '';
            }
            else
            {
                $ids = array_keys($_SESSION['panier']); //on récupère les clés de l'array dans une variable
                if(empty($ids)){
                    echo '';
                } else{ 
                    $produits = mysqli_query($bdd, "SELECT * FROM telephones WHERE id IN (".implode(',', $ids).")");
                    foreach($produits as $produit): //affiche un par un
                        $total = $total + $produit['price'];
                ?>
            <div id="articles">
                <div class="article">
                    <img src="../ressources\produits\<?=$produit['marque']?>\<?=$produit['img']?>.png" alt="article" class="panierimg">
                    <h4 class="nomproduit"><?=$produit['modele']?></h4>
                    <div class="leftbox">
                        <a href="panier.php?del=<?=$produit['id']?>"><img src="../ressources/icon/signe-de-la-croix.png" alt="supprimer" class="supprimer"></a>
                        <p class="price"><?=$produit['price']?>€</p>
                    </div>
                </div>
            <?php endforeach; }}?>
            <br>
            <div id="recap">
                <h4>Récapitulatif</h4>
                <hr>
                <div class="infos">
                    <p>Total</p>
                    <p id="total" class="right"><?=$total?>€</p>

                    <p>Livraison</p>
                    <p class="right">OFFERTS</p>
                </div>
                <hr>
                <form action="paiment.php"><div class="submit"><input type="submit" value="Valider mon panier"></div></form>
            </div>
        </div>
</section>

<?php require 'a-footer.php';?>


