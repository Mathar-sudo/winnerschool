<?php $titre_page = 'Tous les responsables' ?>

<?php $active_responsables = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_responsables)){ ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Code postal</th>
                <th scope="col">Ville</th>
                <th scope="col">Numéro fixe</th>
                <th scope="col">Numéro mobile</th>
                <th scope="col">Mail</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_responsables as $responsable){
                ?>
                <tr>
                    <td><?= $responsable->get_id_responsable() ?></td>
                    <td><?= $responsable->get_nom_responsable() ?></td>
                    <td><?= $responsable->get_prenom_responsable() ?></td>
                    <td><?= $responsable->get_adresse_responsable() ?></td>
                    <td><?= $responsable->get_cdp_responsable() ?></td>
                    <td><?= $responsable->get_ville_responsable() ?></td>
                    <td><?= $responsable->get_fixe_responsable() ?></td>
                    <td><?= $responsable->get_mobile_responsable() ?></td>
                    <td><?= $responsable->get_mail_responsable() ?></td>
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