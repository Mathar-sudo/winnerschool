<?php $titre_page = 'Tous les choix des élèves' ?>

<?php $active_choix_eleves = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_choix_eleves)){ ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Élève</th>
                <th scope="col">Matière</th>
                <th scope="col">Horaire</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_choix_eleves as $choix_eleve){
                ?>
                <tr>
                    <td><?= $choix_eleve->get_eleve() ?></td>
                    <td><?= $choix_eleve->get_matiere() ?></td>
                    <td><?= $choix_eleve->get_horaire() ?></td>
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