<?php $titre_page = 'Toutes les salles' ?>

<?php $active_salles = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_salles)){ ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_salles as $salle){
                ?>
                <tr>
                    <td><?= $salle->get_id_salle() ?></td>
                    <td><?= $salle->get_nom_salle() ?></td>
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