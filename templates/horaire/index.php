<?php $titre_page = 'Toutes les horaires' ?>

<?php $active_horaires = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_horaires)){ ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Jour</th>
                <th scope="col">Heure</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_horaires as $horaire){
                ?>
                <tr>
                    <td><?= $horaire->get_id_horaire() ?></td>
                    <td><?= $horaire->get_jour_horaire() ?></td>
                    <td><?= $horaire->get_heure_horaire() ?></td>
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