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
                <th scope="col">Aperçu</th>
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
                    <td><a href="?horaire=<?= $horaire->get_id_horaire() ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><td>
                    <td><button class="btn btn-danger btn-sm" id="supprimer_horaire"><i class="fas fa-trash-alt"></i></button>
                    <a href="?supprimer_horaire=<?= $horaire->get_id_horaire() ?>" id="confirm_suppression" class="collapse"><button class="btn btn-danger btn-sm">Confirmer</button></a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script>
$(document).ready(function(){
    $("#supprimer_horaire").click(function(){
        
        $('#confirm_suppression').show();
    });
});
</script>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>