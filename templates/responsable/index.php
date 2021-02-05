<?php $titre_page = 'Tous les responsables' ?>

<?php $active_responsables = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_responsables)){ ?>

    <div class="container">
    <?php if(isset($_SESSION['admin'])){ ?>    
    <a href="?formulaire_ajout_responsable"><button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Ajouter un responsable</button></a>
    <?php } ?>
        <table class="table table-striped table-hover" style="font-size:0.9em">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Code postal</th>
                <th scope="col">Ville</th>
                <th scope="col">Numéro fixe</th>
                <th scope="col">Numéro mobile</th>
                <th scope="col">Mail</th>
                <th scope="col">Aperçu</th>
                <?php if(isset($_SESSION['admin'])){ ?>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
                <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                if($tableau_responsables != null){
                    foreach($tableau_responsables as $responsable){
                ?>
                <tr id="ligne<?= $responsable->get_id_responsable() ?>">
                    <td><?= $responsable->get_id_responsable() ?></td>
                    <td><?= $responsable->get_prenom_responsable() ?></td>
                    <td><?= $responsable->get_nom_responsable() ?></td>
                    <td><?= $responsable->get_adresse_responsable() ?></td>
                    <td><?= $responsable->get_cdp_responsable() ?></td>
                    <td><?= $responsable->get_ville_responsable() ?></td>
                    <td><?= $responsable->get_fixe_responsable() ?></td>
                    <td><?= $responsable->get_mobile_responsable() ?></td>
                    <td><?= $responsable->get_mail_responsable() ?></td>
                    <td><a href="?responsable=<?= $responsable->get_id_responsable() ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a></td>
                    <?php if(isset($_SESSION['admin'])){ ?>
                    <td><a href="?formulaire_modifier_responsable=<?= $responsable->get_id_responsable() ?>"><button class="btn btn-info btn-sm"><i class="far fa-edit"></i></button></a></td>
                    <td><button class="supprimer_responsable btn btn-danger btn-sm" value="<?= $responsable->get_id_responsable() ?>"><i class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-danger btn-sm" id="confirm_suppression<?= $responsable->get_id_responsable() ?>" style="display:none;">Confirmer</button></td>
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
            $(".supprimer_responsable").click(function(){
                // Récupération de l'id du responsable / id de la ligne
                var id_responsable = $(this).val();
                // Affichage du bouton de confirmation
                $('#confirm_suppression' + id_responsable).show();
                // Lors du click sur le bouton de confirmation
                $('#confirm_suppression' + id_responsable).click(function(){
                    // Appel à ajax
                    $.ajax({
                        url: '?supprimer_responsable=' + id_responsable,
                        success: function(response){
                            $('#ligne' + id_responsable).fadeOut('slow');
                        }
                    });
                });
            });
        });
    </script>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>