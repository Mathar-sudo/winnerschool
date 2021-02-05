<?php $titre_page = 'Toutes les classes' ?>

<?php $active_classes = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_classes)){ ?>

    <div class="container">
        <a href="?formulaire_ajout_classe"><button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Ajouter une classe</button></a>
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
                if($tableau_classes != null){
                    foreach($tableau_classes as $classe){
                ?>
                <tr id="ligne<?= $classe->get_id_classe() ?>">
                    <td><?= $classe->get_id_classe() ?></td>
                    <td><?= $classe->get_nom_classe() ?></td>
                    <td><a href="?classe=<?= $classe->get_id_classe() ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a></td>
                    <td><a href="?formulaire_modifier_classe=<?= $classe->get_id_classe() ?>"><button class="btn btn-info btn-sm"><i class="far fa-edit"></i></button></a></td>
                    <td><button class="supprimer_classe btn btn-danger btn-sm" value="<?= $classe->get_id_classe() ?>"><i class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-danger btn-sm" id="confirm_suppression<?= $classe->get_id_classe() ?>" style="display:none;">Confirmer</button></td>
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
        $(".supprimer_classe").click(function(){
            // Récupération de l'id de la classe / id de la ligne
            var id_classe = $(this).val();
            // Affichage du bouton de confirmation
            $('#confirm_suppression' + id_classe).show();
            // Lors du click sur le bouton de confirmation
            $('#confirm_suppression' + id_classe).click(function(){
                // Appel à ajax
                $.ajax({
                    url: '?supprimer_classe=' + id_classe,
                    success: function(response){
                        $('#ligne' + id_classe).fadeOut('slow');
                    }
                });
            });
        });
    });
    </script>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>