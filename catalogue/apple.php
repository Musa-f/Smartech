<?php
session_start();
require 'bdd.php';
require 'a-header.php';
?>

<div id="container">
    <?php
    $produits = mysqli_query($bdd, "SELECT * FROM telephones WHERE marque='apple'");
    foreach($produits as $produit):
    ?>
    <div class="produit">
    <a href="../header/pageproduit.php?id=<?=$produit['id']?>"><img src="../ressources/produits/<?=$produit['marque'];?>/<?=$produit['img'];?>.png" alt=""></a>
        <div class="sous-produit">
            <h3><?=$produit['modele']?></h3>
            <h4><?=$produit['price']?>€</h4>
            <div class="right"><a href="../header/addpanier.php?id=<?=$produit['id']?>"><img src="../ressources/icon/panier1.png" alt="panier" ></a></div>
        </div>         
    </div>
    <?php endforeach;?> 
</div>
 

<?php require 'a-footer.php';?>