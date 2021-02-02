<?php $titre_page = 'Inscription élève' ?>

<?php $active_inscription = true ?>

<?php ob_start(); ?>

<div class="container my-5">
    <h1 class="text-primary">Inscription d'un élève et son responsable</h1>
    <hr style="width:15%">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12" style="border-right: 1px solid #cccccc">
            <h3 class="text-info">Responsable</h3>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="input_nom" class="form-label">Nom</label>
                    <input type="text" name="nom_responsable" class="form-control" id="input_nom">
                </div>
                <div class="col-md-6">
                    <label for="input_prenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom_responsable" class="form-control" id="input_prenom">
                </div>
                <div class="col-md-6">
                    <label for="input_adresse" class="form-label">Adresse</label>
                    <input type="text" name="adresse_responsable" class="form-control" id="input_adresse" placeholder="5 rue de ..">
                </div>
                <div class="col-md-2">
                    <label for="input_code_postal" class="form-label">Code postal</label>
                    <input type="number" name="code_postal_responsable" class="form-control" id="input_code_postal">
                </div>
                <div class="col-md-4">
                    <label for="input_ville" class="form-label">Ville</label>
                    <input type="text" name="ville_responsable" class="form-control" id="input_ville">
                </div>
                <div class="col-md-6">
                    <label for="input_fixe" class="form-label">Téléphone fixe</label>
                    <input type="text" name="fixe_responsable" class="form-control" id="input_fixe">
                </div>
                <div class="col-md-6">
                    <label for="input_portable" class="form-label">Téléphone portable</label>
                    <input type="text" name="portable_responsable" class="form-control" id="input_portable">
                </div>
                <span class="text-danger" style="font-size:1.2em">Identifiants</span>
                <div class="col-md-6">
                    <label for="input_email" class="form-label">Adresse email</label>
                    <input type="email" name="email_responsable" class="form-control" id="input_email">
                </div>
                <div class="col-md-6">
                    <label for="input_mdp" class="form-label">Mot de passe</label>
                    <input type="password" name="mdp_responsable" class="form-control" id="input_mdp">
                </div>
            </form>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            <h3 class="text-info">Élève</h3>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="input_nom" class="form-label">Nom</label>
                    <input type="text" name="nom_eleve" class="form-control" id="input_nom">
                </div>
                <div class="col-md-6">
                    <label for="input_prenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom_eleve" class="form-control" id="input_prenom">
                </div>
                <div class="col-md-6">
                    <label for="input_age" class="form-label">Âge</label>
                    <input type="number" name="age_eleve" class="form-control" id="input_age">
                </div>
                <div class="col-md-6">
                    <label for="select_classe" class="form-label">Classe</label>
                    <select name="classe_eleve" class="form-select" id="select_classe">
                        <option disabled selected value>Choisissez une classe</option>
                        <option>Seconde</option>
                        <option>Première</option>
                        <option>Terminale</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="input_etablissement" class="form-label">Établissement scolaire</label>
                    <input type="text" name="etablissement_eleve" class="form-control" id="input_etablissement">
                </div>
                <div class="col-md-6">
                    <label for="input_portable" class="form-label">Téléphone portable</label>
                    <input type="text" name="portable_eleve" class="form-control" id="input_portable">
                </div>
                <div class="col-md-12">
                    <label for="input_particularite" class="form-label">Eléments spécifiques à prendre en compte (discipline, handicap, ...)</label>
                    <input type="text" name="particulartie_eleve" class="form-control" id="input_particularite">
                </div>
                <span class="text-danger" style="font-size:1.2em">Identifiants</span>
                <div class="col-md-6">
                    <label for="input_email" class="form-label">Adresse email</label>
                    <input type="email" name="email_eleve" class="form-control" id="input_email">
                </div>
                <div class="col-md-6">
                    <label for="input_mdp" class="form-label">Mot de passe</label>
                    <input type="password" name="mdp_eleve" class="form-control" id="input_mdp">
                </div>
                <span class="text-danger" style="font-size:1.2em">Horaires de cours souhaités</span>
                <div class="col">
                    <label for="" class="form-label">Lundi</label>
                    <select multiple class="form-select" id="">
                        <option>Mathématiques : 17h55 - 18h55</option>
                        <option>Mathématiques : 19h05 - 20h05</option>
                        <option>Français : 17h55 - 18h55</option>
                        <option>Français : 19h05 - 20h05</option>
                        <option>Sciences : 17h55 - 18h55</option>
                        <option>Sciences : 19h05 - 20h05</option>
                    </select>
                </div>
                <div class="col">
                    <label for="" class="form-label">Mardi</label>
                    <select multiple class="form-select" id="">
                        <option>Mathématiques : 17h55 - 18h55</option>
                        <option>Mathématiques : 19h05 - 20h05</option>
                        <option>Français : 17h55 - 18h55</option>
                        <option>Français : 19h05 - 20h05</option>
                        <option>Sciences : 17h55 - 18h55</option>
                        <option>Sciences : 19h05 - 20h05</option>
                    </select>
                </div>
                <div class="col">
                    <label for="" class="form-label">Mercredi</label>
                    <select multiple class="form-select" id="">
                        <option>Mathématiques : 17h55 - 18h55</option>
                        <option>Mathématiques : 19h05 - 20h05</option>
                        <option>Français : 17h55 - 18h55</option>
                        <option>Français : 19h05 - 20h05</option>
                        <option>Sciences : 17h55 - 18h55</option>
                        <option>Sciences : 19h05 - 20h05</option>
                    </select>
                </div>
                <div class="col">
                    <label for="" class="form-label">Jeudi</label>
                    <select multiple class="form-select" id="">
                        <option>Mathématiques : 17h55 - 18h55</option>
                        <option>Mathématiques : 19h05 - 20h05</option>
                        <option>Français : 17h55 - 18h55</option>
                        <option>Français : 19h05 - 20h05</option>
                        <option>Sciences : 17h55 - 18h55</option>
                        <option>Sciences : 19h05 - 20h05</option>
                    </select>
                </div>
                <div class="col">
                    <label for="" class="form-label">Vendredi</label>
                    <select multiple class="form-select" id="">
                        <option>Mathématiques : 17h55 - 18h55</option>
                        <option>Mathématiques : 19h05 - 20h05</option>
                        <option>Français : 17h55 - 18h55</option>
                        <option>Français : 19h05 - 20h05</option>
                        <option>Sciences : 17h55 - 18h55</option>
                        <option>Sciences : 19h05 - 20h05</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    <div class="row text-center mt-3">
        <button type="submit" class="btn btn-primary">Valider l'inscription</button>
    </div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>