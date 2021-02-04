<?php $titre_page = 'Ajouter un intervenant' ?>

<?php $active_intervenants = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Ajouter un intervenant</h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="row g-3 " method="POST" action="?ajouter_intervenant">
            <div class="col-md-6">
                <label for="input_nom" class="form-label">Nom de l'intervenant</label>
                <input type="text" name="nom_intervenant" class="form-control" id="input_nom">
            </div>
            <div class="col-md-6">
                <label for="input_prenom" class="form-label">Prénom de l'intervenant</label>
                <input type="text" name="prenom_intervenant" class="form-control" id="input_prenom">
            </div>
            <div class="col-md-6">
                <label for="input_adresse" class="form-label">Adresse</label>
                <input type="text" name="adresse_intervenant" class="form-control" id="input_adresse">
            </div>
            <div class="col-md-2">
                <label for="input_code_postale" class="form-label">Code postale</label>
                <input type="number" name="code_postale_intervenant" class="form-control" id="input_code_postale">
            </div>
            <div class="col-md-4">
                <label for="input_ville" class="form-label">Ville</label>
                <input type="text" name="ville_intervenant" class="form-control" id="input_ville">
            </div>
            <div class="col-md-6">
                <label for="input_fixe" class="form-label">Numéro fixe </label>
                <input type="text" name="fixe_intervenant" class="form-control" id="input_fixe">
            </div>
            <div class="col-md-6">
                <label for="input_mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile_intervenant" class="form-control" id="input_mobile">
            </div>
            <div class="col-md-6">
                <label for="input_mail" class="form-label">Email</label>
                <input type="email" name="mail_intervenant" class="form-control" id="input_mail">
            </div>
            <div class="col-md-6">
                <label for="input_mdp" class="form-label">Mot de passe</label>
                <input type="password" name="mdp_intervenant" class="form-control" id="input_mdp">
            </div>
            <div class="col-md-6">
                <label for="input_casier" class="form-label">Casier Judiciaire</label>
                <input type="file" name="casier_intervenant" class="form-control" id="input_casier">
            </div>
            <div class="col-md-6">
                <label for="input_photo1" class="form-label">Photo 1 de l'intervenant</label>
                <input type="file" name="photo1_intervenant" class="form-control" id="input_photo1">
            </div>
            <div class="col-md-6">
                <label for="input_photo2" class="form-label">Photo 2 de l'intervenant</label>
                <input type="file" name="photo2_intervenant" class="form-control" id="input_photo2">
            </div>
            <div class="col-md-6">
                <label for="input_niveau" class="form-label">Niveau d'étude</label>
                <input type="text" name="niveau_intervenant" class="form-control" id="input_niveau">
            </div>
            <div class="col-md-6">
                <label for="input_specialite" class="form-label">Spécialité</label>
                <input type="text" name="specialite_intervenant" class="form-control" id="input_specialite">
            </div>
            <div class="col-md-6">
                <label for="input_profession" class="form-label">Profession</label>
                <input type="text" name="profession_intervenant" class="form-control" id="input_profession">
            </div>
            <div class="col-md-6">
                <label for="input_experience" class="form-label">Expérience dans le soutien scolaire</label>
                <input type="text" name="experience_intervenant" class="form-control" id="input_experience">
            </div>
            <div class="col-md-6">
                <label for="input_connaissance" class="form-label">Connaissance</label>
                <input type="text" name="connaissance_intervenant" class="form-control" id="input_connaissance">
            </div>
            <div class="col-md-6 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>