<?php $titre_page = 'Toutes les salles' ?>

<?php $active_salles = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_salles)){ ?>

    <div class="container">
    <a href="?formulaire_ajout_salle"><button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Ajouter une salle</button></a>
        <table class="table mt-3">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Aperçu</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_salles as $salle){
                ?>
                <tr id="ligne<?= $salle->get_id_salle() ?>">
                    <td><?= $salle->get_id_salle() ?></td>
                    <td><?= $salle->get_nom_salle() ?></td>
                    <td><a href="?salle=<?= $salle->get_id_salle() ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a></td>
                    <td><a href="?formulaire_modifier_salle=<?= $salle->get_id_salle() ?>"><button class="btn btn-info btn-sm"><i class="far fa-edit"></i></button></a></td>
                    <td><button class="supprimer_salle btn btn-danger btn-sm" value="<?= $salle->get_id_salle() ?>"><i class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-danger btn-sm" id="confirm_suppression<?= $salle->get_id_salle() ?>" style="display:none;">Confirmer</button></a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script>
    $(document).ready(function(){
        $(".supprimer_salle").click(function(){
            // Récupération de l'id de la salle / id de la ligne
            var id_salle = $(this).val();
            // Affichage du bouton de confirmation
            $('#confirm_suppression' + id_salle).show();
            // Lors du click sur le bouton de confirmation
            $('#confirm_suppression' + id_salle).click(function(){
                // Appel à ajax
                $.ajax({
                    url: '?supprimer_salle=' + id_salle,
                    success: function(response){
                        $('#ligne' + id_salle).fadeOut('slow');
                    }
                });
            });
        });
    });
    </script>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>