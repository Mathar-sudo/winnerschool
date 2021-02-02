<?php $titre_page = 'Toutes les classes' ?>

<?php $active_classes = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_classes)){ ?>

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
                    foreach($tableau_classes as $classe){
                ?>
                <tr>
                    <td><?= $classe->get_id_classe() ?></td>
                    <td><?= $classe->get_nom_classe() ?></td>
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