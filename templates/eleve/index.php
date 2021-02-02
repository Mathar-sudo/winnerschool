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
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>