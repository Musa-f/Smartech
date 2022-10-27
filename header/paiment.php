<?php
$linkstyle = '<link rel="stylesheet" href="css/paiement.css">';
require 'a-header.php';
?>

    <section>
        <form action="remerciement.php">
            <h2 class="titre">Paiement</h2>
            <div id="container">

                <h4>Adresse de livraison</h4>

                <div class="boite1">
                    <div class="divform">
                        <label for="nom">Nom</label>
                        <br>
                        <input type="text" name="nom" placeholder="Votre nom">
                    </div>
                    <div class="divform">
                        <label for="prenom">Prénom</label>
                        <br>
                        <input type="text" name="prenom" placeholder="Votre prénom">
                    </div>
                    <div class="divform">
                        <label for="code">Code postal</label>
                        <br>
                        <input type="number" name="code" placeholder="Votre code postal">
                    </div>
                    <div class="divform">
                        <label for="ville">Ville</label>
                        <br>
                        <input type="text" name="ville" placeholder="Votre ville">
                    </div>
                    <div class="divform">
                        <label for="adresse">Adresse</label>
                        <br>
                        <input type="text" name="adresse" placeholder="Votre adresse">
                    </div>
                    <div class="divform">
                        <label for="complement">Complément d'adresse</label>
                        <br>
                        <input type="text" name="complement" placeholder="Complément d'adresse">
                    </div>
                </div>

                <h4>Coordonnées bancaires</h4>

                <div class="boite2">
                    <label for="paiement" class="modep">Mode paiement</label>
                    <div class="divform">
                        <input type="radio" name="paiement"><label for="visa">Visa</label>
                        <input type="radio" name="paiement"><label for="cb">Carte bancaire</label>
                        <input type="radio" name="paiement"><label for="paypal">Paypal</label>
                    </div>

                    <div class="divform">
                        <label for="netp">Nom et prénom</label>
                        <br>
                        <input type="text" name="netp" placeholder="Nom et prénom">
                    </div>

                    <div class="divform">
                        <label for="iban">IBAN</label>
                        <br>
                        <input type="text" name="iban" placeholder="FR76 1010 7001 0112 3456 7890 129">
                    </div>

                    <div class="divform">
                        <label for="exp">Date d'expiration</label>
                        <br>
                        <input type="text" name="exp" placeholder="01/02">
                    </div>

                    <div class="divform">
                        <label for="cryp">Cryptogramme</label>
                        <br>
                        <input type="text" name="cry" placeholder="123">
                    </div>
                </div>

            </div>
            <div class="boutton"><input type="submit" name="" id="" value="Confirmer le paiement"></div>
        </form>
    </section>

<?php require 'a-footer.php';?>