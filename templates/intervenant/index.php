<?php $titre_page = 'Tous les intervenants' ?>

<?php $active_intervenants = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_intervenants)){ ?>

    <div class="container">
    <?php if(isset($_SESSION['admin'])){ ?>
    <a href="?formulaire_ajout_intervenant"><button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Ajouter un intervenant</button></a>
    <?php } ?>
        <div class="table-responsive">
        <table class="table table-hover table-striped" style="font-size:0.9em">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">CP</th>
                <th scope="col">Ville</th>
                <th scope="col">Fixe</th>
                <th scope="col">Mobile</th>
                <th scope="col">Mail</th>
                <th scope="col">Niveau</th>
                <th scope="col">Specialité</th>
                <th scope="col">Profession</th>
                <th scope="col">Expérience</th>
                <th scope="col">Connaissance</th>
                <th scope="col">Aperçu</th>
                <?php if(isset($_SESSION['admin'])){ ?>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
                <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if($tableau_intervenants != null){
                        foreach($tableau_intervenants as $intervenant){
                ?>
                <tr id="ligne<?= $intervenant->get_id_intervenant() ?>">
                    <td><?= $intervenant->get_id_intervenant() ?></td>
                    <td><?= $intervenant->get_prenom_intervenant() ?></td>
                    <td><?= $intervenant->get_nom_intervenant() ?></td>
                    <td><?= $intervenant->get_adresse_intervenant() ?></td>
                    <td><?= $intervenant->get_cdp_intervenant() ?></td>
                    <td><?= $intervenant->get_ville_intervenant() ?></td>
                    <td><?= $intervenant->get_fixe_intervenant() ?></td>
                    <td><?= $intervenant->get_mobile_intervenant() ?></td>
                    <td><?= $intervenant->get_mail_intervenant() ?></td>
                    <td><?= $intervenant->get_niveau_intervenant() ?></td>
                    <td><?= $intervenant->get_specialite_intervenant() ?></td>
                    <td><?= $intervenant->get_profession_intervenant() ?></td>
                    <td><?= $intervenant->get_experience_intervenant() ?></td>
                    <td><?= $intervenant->get_connaissance_intervenant() ?></td>
                    <td><a href="?intervenant=<?= $intervenant->get_id_intervenant() ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a></td>
                    <?php if(isset($_SESSION['admin'])){ ?>
                    <td><a href="?formulaire_modifier_intervenant=<?= $intervenant->get_id_intervenant() ?>"><button class="btn btn-info btn-sm"><i class="far fa-edit"></i></button></a></td>
                    <td><button class="supprimer_intervenant btn btn-danger btn-sm" value="<?= $intervenant->get_id_intervenant() ?>"><i class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-danger btn-sm" id="confirm_suppression<?= $intervenant->get_id_intervenant() ?>" style="display:none;">Confirmer</button></td>
                    <?php } ?>
                </tr>
                <?php 
                        } 
                    } else {
                        echo '<tr><td colspan="100%">Aucun enregistrement</td></tr>';
                    }
                ?>
            </tbody>
        </table>
        </div>
    </div>
<script>
$(document).ready(function(){
    $(".supprimer_intervenant").click(function(){      
        // Récupération de l'id de la intervenant / id de la ligne
        var id_intervenant = $(this).val();
        // Affichage du bouton de confirmation
        $('#confirm_suppression' + id_intervenant).show();
        // Lors du click sur le bouton de confirmation
        $('#confirm_suppression' + id_intervenant).click(function(){
            // Appel à ajax
            $.ajax({
                url: '?supprimer_intervenant=' + id_intervenant,
                success: function(response){
                    $('#ligne' + id_intervenant).fadeOut('slow');
                }
            });
        });
    });
});
</script>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>