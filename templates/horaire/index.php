<?php $titre_page = 'Toutes les horaires' ?>

<?php $active_horaires = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_horaires)){ ?>

    <div class="container">
    <a href="?formulaire_ajout_horaire"><button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Ajouter une horaire</button></a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Jour</th>
                <th scope="col">Heure</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tableau_horaires as $horaire){
                ?>
                <tr id="ligne<?= $horaire->get_id_horaire() ?>">
                    <td><?= $horaire->get_id_horaire() ?></td>
                    <td><?= $horaire->get_jour_horaire() ?></td>
                    <td><?= $horaire->get_heure_horaire() ?></td>
                    <td><a href="?formulaire_modifier_horaire=<?= $horaire->get_id_horaire() ?>"><button class="btn btn-info btn-sm"><i class="far fa-edit"></i></button></a></td>
                    <td><button class="supprimer_horaire btn btn-danger btn-sm" value="<?= $horaire->get_id_horaire() ?>"><i class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-danger btn-sm" id="confirm_suppression<?= $horaire->get_id_horaire() ?>" style="display:none;">Confirmer</button></a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script>
    $(document).ready(function(){
        $(".supprimer_horaire").click(function(){
            // Récupération de l'id de la horaire / id de la ligne
            var id_horaire = $(this).val();
            // Affichage du bouton de confirmation
            $('#confirm_suppression' + id_horaire).show();
            // Lors du click sur le bouton de confirmation
            $('#confirm_suppression' + id_horaire).click(function(){
                // Appel à ajax
                $.ajax({
                    url: '?supprimer_horaire=' + id_horaire,
                    success: function(response){
                        $('#ligne' + id_horaire).fadeOut('slow');
                    }
                });
            });
        });
    });
    </script>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>