<?php
$linkstyle = '<link rel="stylesheet" href="css/styleproduit.css">';
require 'a-header.php';
include_once "../catalogue/bdd.php";
?>

<section>
<?php 
    $id = $_GET['id'];
    $produit = mysqli_query($bdd, "SELECT * FROM telephones WHERE id=$id");
    foreach($produit as $product){
    ?>
    <div class="image"><img src="../ressources\produits\<?=$product['marque']?>\<?=$product['img']?>.png" alt=""></div>
    <div class="infos">
        <h2><?=$product['modele'];?></h2>
        <h3><?=$product['price']?>€</h3>
        <hr>
        <div>
            <h4>Description</h4>
            <p>- Écran Super Retina XDR de 6,1 pouces avec ProMotion et écran toujours activé <br>
            - Dynamic Island, une manière inédite et magique d’interagir avec votre iPhone <br>
            - Appareil photo principal 48 Mpx pour une résolution jusqu’à 4x supérieure <br>
            - Mode Cinématique, désormais en 4K Dolby Vision jusqu’à 30 i/s <br>
            - Mode Action, pour des vidéos stables et fluides lorsque vous êtes en mouvement <br>
            - Détection des accidents, une technologie de sécurité vitale qui appelle les secours pour vous <br>
            - Autonomie d’une journée entière et jusqu’à 23 heures de lecture vidéo <br>
            - A16 Bionic, la puce de smartphone ultime. Connectivité 5G ultra rapide <br>
            - Design conçu pour durer avec Ceramic Shield et résistance à l’eau <br>
            - iOS 16 qui offre encore plus d’options de personnalisation et multiplie les moyens de communiquer et de partager</p>
        </div>
    </div>
    <div class="boutton">
        <button><a href="addpanier.php?id=<?=$product['id']?>">Ajouter</a></button>
    </div>
</section>

<?php
    }
    require 'a-footer.php';
?>