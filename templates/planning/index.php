<?php $titre_page = 'Tous les plannings' ?>

<?php $active_plannings = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_plannings)){ ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Intervenant</th>
                <th scope="col">Eleve</th>
                <th scope="col">Equipe pédago.</th>
                <th scope="col">Salle</th>
                <th scope="col">Matière</th>
                <th scope="col">Numéro semaine</th>
                <th scope="col">Année</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_plannings as $planning){
                ?>
                <tr>
                    <td><?= $planning->get_intervenant() ?></td>
                    <td><?= $planning->get_eleve() ?></td>
                    <td><?= $planning->get_pedagogue() ?></td>
                    <td><?= $planning->get_salle() ?></td>
                    <td><?= $planning->get_matiere() ?></td>
                    <td><?= $planning->get_numero_semaine() ?></td>
                    <td><?= $planning->get_annee() ?></td>

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