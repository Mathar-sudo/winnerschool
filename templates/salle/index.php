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
                <th scope="col">Aperçu</th>
                <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_salles as $salle){
                ?>
                <tr>
                    <td><?= $salle->get_id_salle() ?></td>
                    <td><?= $salle->get_nom_salle() ?></td>
                    <td><a href="?salle=<?= $salle->get_id_salle() ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a></td>
                    <td><button id="supprimer_salle" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                    <a href="?supprimer_salle=<?= $salle->get_id_salle()?>" id="confirm_suppression" style="display:none;"><button class="btn btn-danger btn-sm">Confirmer</button></a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function(){
            $("#supprimer_salle").click(function(){
                $("#confirm_suppression").show();
            });
        });
    </script>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>