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
                <th scope="col">Aperçu</th>
                <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_classes as $classe){
                ?>
                <tr>
                    <td><?= $classe->get_id_classe() ?></td>
                    <td><?= $classe->get_nom_classe() ?></td>
                    <td><a href="?classe=<?= $classe->get_id_classe() ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a></td>
                    <td><button class="btn btn-danger btn-sm" id="supprimer_classe"><i class="fas fa-trash-alt"></i></button>
                    <a href="?supprimer_classe=<?= $classe->get_id_classe() ?>" id="confirm_suppression" class="collapse"><button class="btn btn-danger btn-sm">Confirmer</button></a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
<script>
$(document).ready(function(){
    $("#supprimer_classe").click(function(){
        
        $('#confirm_suppression').show();
    });
});
</script>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>