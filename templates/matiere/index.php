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
                <th scope="col">Aperçu</th>
                <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_matieres as $matiere){
                ?>
                <tr id="ligne<?= $matiere->get_id_matiere() ?>">
                    <td><?= $matiere->get_id_matiere() ?></td>
                    <td><?= $matiere->get_nom_matiere() ?></td>
                    <td><a href="?matiere=<?= $matiere->get_id_matiere() ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a></td>
                    <td><button class="supprimer_matiere btn btn-danger btn-sm" value="<?= $matiere->get_id_matiere() ?>"><i class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-danger btn-sm" id="confirm_suppression<?= $matiere->get_id_matiere() ?>" style="display:none;">Confirmer</button></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script>
$(document).ready(function(){
    $(".supprimer_matiere").click(function(){      
      // Récupération de l'id de la matiere / id de la ligne
      var id_matiere = $(this).val();
            // Affichage du bouton de confirmation
            $('#confirm_suppression' + id_matiere).show();
            // Lors du click sur le bouton de confirmation
            $('#confirm_suppression' + id_matiere).click(function(){
                // Appel à ajax
                $.ajax({
                    url: '?supprimer_matiere=' + id_matiere,
                    success: function(response){
                        $('#ligne' + id_matiere).fadeOut('slow');
                    }
                });
            });
    });
});
</script>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>