<?php $titre_page = 'Toutes les matières' ?>

<?php $active_intervenants = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_intervenants)){ ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Adresse</th>
                <th scope="col">CP</th>
                <th scope="col">Ville</th>
                <th scope="col">Fixe</th>
                <th scope="col">Mobile</th>
                <th scope="col">Mail</th>
                <th scope="col">Casier</th>
                <th scope="col">Photo1</th>
                <th scope="col">Photo2</th>
                <th scope="col">Niveau</th>
                <th scope="col">Specialité</th>
                <th scope="col">Profession</th>
                <th scope="col">Expérience</th>
                <th scope="col">Connaissance</th>
                <th scope="col">Aperçu</th>
                <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_intervenants as $intervenant){
                ?>
                <tr>
                    <td><?= $intervenant->get_id_intervenant() ?></td>
                    <td><?= $intervenant->get_nom_intervenant() ?></td>
                    <td><?= $intervenant->get_prenom_intervenant() ?></td>
                    <td><?= $intervenant->get_adresse_intervenant() ?></td>
                    <td><?= $intervenant->get_cdp_intervenant() ?></td>
                    <td><?= $intervenant->get_ville_intervenant() ?></td>
                    <td><?= $intervenant->get_fixe_intervenant() ?></td>
                    <td><?= $intervenant->get_mobile_intervenant() ?></td>
                    <td><?= $intervenant->get_mail_intervenant() ?></td>
                    <td><?= $intervenant->get_casier_intervenant() ?></td>
                    <td><?= $intervenant->get_photo1_intervenant() ?></td>
                    <td><?= $intervenant->get_photo2_intervenant() ?></td>
                    <td><?= $intervenant->get_niveau_intervenant() ?></td>
                    <td><?= $intervenant->get_specialite_intervenant() ?></td>
                    <td><?= $intervenant->get_profession_intervenant() ?></td>
                    <td><?= $intervenant->get_experience_intervenant() ?></td>
                    <td><?= $intervenant->get_connaissance_intervenant() ?></td>
                    <td><a href="?intervenant=<?= $intervenant->get_id_intervenant() ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a></td>
                    <td><button class="btn btn-danger btn-sm" id="supprimer_intervenant"><i class="fas fa-trash-alt"></i></button>
                    <a href="?supprimer_intervenant=<?= $intervenant->get_id_intervenant() ?>" id="confirm_suppression" class="collapse"><button class="btn btn-danger btn-sm">Confirmer</button></a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
<script>
$(document).ready(function(){
    $("#supprimer_intervenant").click(function(){
        
        $('#confirm_suppression').show();
    });
});
</script>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>