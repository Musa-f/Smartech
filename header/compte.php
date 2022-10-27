<?php
$linkstyle = '<link rel="stylesheet" href="css/stylecompte.css">';
require 'a-header.php';
?>

    <section class="regroup">
        <section class="section_form">
            <h2 class="titre">Connexion</h2>
            <form action="" method="post">
                <div>
                    <label for="email">Email</label>
                    <input type="email" data-validate="Valid email is: a@b.c" placeholder="Email" required name="email">
                </div>
                <div>
                    <label for="password">Mot de passe</label>
                    <input type="password" placeholder="Mot de passe" required name="password">
                </div>
                <input type="submit" value="Se Connecter">
            </form>
        </section>
        <section>
            <h2 class="titre">Inscription</h2>
            <form action="" method="post">
                <div>
                    <label for="password">Prenom</label>
                    <input type="text" placeholder="Prenom" name="password">
                </div>
                <div>
                    <label for="password">Nom</label>
                    <input type="text" placeholder="Nom" required name="password">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" data-validate="Valid email is: a@b.c" placeholder="Email" required name="email">
                </div>
                <div>
                    <label for="password">Mot de passe</label>
                    <input type="password" placeholder="Mot de passe" required name="password">
                </div>
                <div>
                    <label for="password">Confirmer mot de passe</label>
                    <input type="password" placeholder="Confirmer mot de passe" required name="password">
                </div>
                <input type="submit" value="S'Inscrire">
            </form>
        </section>
    </section>

<?php require 'a-footer.php';?>