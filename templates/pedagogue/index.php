<?php $titre_page = 'Toutes les pedagogues' ?>

<?php $active_pedagogues = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_pedagogues)){ ?>

    <div class="container">
    <?php if(isset($_SESSION['admin'])){ ?>
    <a href="?formulaire_ajout_pedagogue"><button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Ajouter un pédagogue</button></a>
    <?php } ?>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Mail</th>
                <th scope="col">Mobile</th>
                <th scope="col">Aperçu</th>
                <?php if(isset($_SESSION['admin'])){ ?>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
                <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                if($tableau_pedagogues != null){
                    foreach($tableau_pedagogues as $pedagogue){
                ?>
                <tr id="ligne<?= $pedagogue->get_id_pedagogue() ?>">
                    <td><?= $pedagogue->get_id_pedagogue() ?></td>
                    <td><?= $pedagogue->get_prenom_pedagogue() ?></td>
                    <td><?= $pedagogue->get_nom_pedagogue() ?></td>
                    <td><?= $pedagogue->get_mail_pedagogue() ?></td>
                    <td><?= $pedagogue->get_mobile_pedagogue() ?></td>
                    <td><a href="?pedagogue=<?= $pedagogue->get_id_pedagogue() ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a></td>
                    <?php if(isset($_SESSION['admin'])){ ?>
                    <td><a href="?formulaire_modifier_pedagogue=<?= $pedagogue->get_id_pedagogue() ?>"><button class="btn btn-info btn-sm"><i class="far fa-edit"></i></button></a></td>
                    <td><button class="supprimer_pedagogue btn btn-danger btn-sm" value="<?= $pedagogue->get_id_pedagogue() ?>"><i class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-danger btn-sm" id="confirm_suppression<?= $pedagogue->get_id_pedagogue() ?>" style="display:none;">Confirmer</button></td>
                    <?php } ?>
                </tr>
                <?php 
                    }
                } else {
                    echo '<tr><td colspan="100%">Aucun enregistrement</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
$(document).ready(function(){
    $(".supprimer_pedagogue").click(function(){      
      // Récupération de l'id de la pedagogue / id de la ligne
      var id_pedagogue = $(this).val();
            // Affichage du bouton de confirmation
            $('#confirm_suppression' + id_pedagogue).show();
            // Lors du click sur le bouton de confirmation
            $('#confirm_suppression' + id_pedagogue).click(function(){
                // Appel à ajax
                $.ajax({
                    url: '?supprimer_pedagogue=' + id_pedagogue,
                    success: function(response){
                        $('#ligne' + id_pedagogue).fadeOut('slow');
                    }
                });
            });
    });
});
</script>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>