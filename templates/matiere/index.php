<?php $titre_page = 'Toutes les matières' ?>

<?php $active_matieres = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_matieres)){ ?>

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
                    foreach($tableau_matieres as $matiere){
                ?>
                <tr>
                    <td><?= $matiere->get_id_matiere() ?></td>
                    <td><?= $matiere->get_nom_matiere() ?></td>
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