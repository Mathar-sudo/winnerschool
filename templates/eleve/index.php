<?php $titre_page = 'Tous les élèves' ?>

<?php $active_eleves = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_eleves)){ ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Numéro mobile</th>
                <th scope="col">Mail</th>
                <th scope="col">Elèments spécifiques</th>
                <th scope="col">Classe</th>
                <th scope="col">Responsable</th>
                <th scope="col">Aperçu</th>
                <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_eleves as $eleve){
                ?>
                <tr>
                    <td><?= $eleve->get_id_eleve() ?></td>
                    <td><?= $eleve->get_prenom_eleve() ?></td>
                    <td><?= $eleve->get_nom_eleve() ?></td>
                    <td><?= $eleve->get_age_eleve() ?></td>
                    <td><?= $eleve->get_mobile_eleve() ?></td>
                    <td><?= $eleve->get_etablissement_eleve() ?></td>
                    <td><?= $eleve->get_particularite_eleve() ?></td>
                    <td><?= $eleve->get_classe() ?></td>
                    <td><?= $eleve->get_responsable() ?></td>
                    <td><a href="?eleve=<?= $eleve->get_id_eleve() ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a></td>
                    <td><button id="supprimer_eleve" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                    <a href="?supprimer_eleve=<?= $eleve->get_id_eleve()?>" id="confirm_suppression" style="display:none;"><button class="btn btn-danger btn-sm">Confirmer</button></a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
<script>
$(document).ready(function(){
    $("#supprimer_eleve").click(function(){
        $("#confirm_suppression").show();
    });
});

</script>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>