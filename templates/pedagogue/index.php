<?php $titre_page = 'Toutes les pedagogues' ?>

<?php $active_pedagogues = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_pedagogues)){ ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Mail</th>
                <th scope="col">Mobile</th>
                <th scope="col">Aperçu</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_pedagogues as $pedagogue){
                ?>
                <tr>
                    <td><?= $pedagogue->get_id_pedagogue() ?></td>
                    <td><?= $pedagogue->get_nom_pedagogue() ?></td>
                    <td><?= $pedagogue->get_prenom_pedagogue() ?></td>
                    <td><?= $pedagogue->get_mail_pedagogue() ?></td>
                    <td><?= $pedagogue->get_mobile_pedagogue() ?></td>
                    <td><a href="?pedagogue=<?= $pedagogue->get_id_pedagogue() ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a></td>
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