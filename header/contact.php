<?php
$linkstyle = '<link rel="stylesheet" href="css\contact.css">';
require 'a-header.php';
?>

<h2 class="titreh2">Formulaire de contact</h2>

<section id="formulaire">
        <form method="POST" action="monprogramme.php">
            <fieldset>
                <label for="nom">Votre Nom <span class="required">*</span>: </label>
                <input type="text" name="nom" placeholder="Ex: DUPOND" required>
                <br>
                <label for="email">Votre adresse e-mail <span class="required">*</span>: </label>
                <input type="email" name="email" placeholder="Ex: dupond@fai.com" required>
                <br>
                <label for="telephone">Votre Numéro de téléphone: </label>
                <input type="tel" name="telephone" placeholder="Ex: 00 11 22 33 44"
                    pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}">
                <br>
                <label for="ville">Votre ville: </label>
                <input type="text" name="ville" placeholder="Ex: Paris">
                <br>
                <label for="sujet">Sujet de votre demande :</label>
                <select name="sujet" id="sujet">
                    <option value="generalite">Questions générales</option>
                    <option value="technique">Renseignements techniques</option>
                    <option value="livraison">Questions sur la livraison</option>
                    <option value="inscription">Problème pour s'inscrire ou s'identifier</option>
                    <option value="assurance">Questions assurances</option>
                    <option value="autre">Autres questions</option>
                </select>
                <br>
                <label for="demande">Poser votre question :</label>
                <br>
                <textarea name="demande" id="demande" cols="50" rows="15"
                    placeholder="Ex: Bonjour, puis-je me faire livrer dans un point relais s'il vous plait?"></textarea>
                <br>

                <div id="copiebox">
                    <input type="checkbox" id="copie" name="copie">
                    <label for="copie">Reçevoir une copie par mail</label>

                </div>
            </fieldset>
            <input type="submit" value="Envoyer">
        </form>
</section>

<?php require 'a-footer.php';?>