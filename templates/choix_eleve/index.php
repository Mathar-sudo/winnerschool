<?php $titre_page = 'Tous les choix des élèves' ?>

<?php $active_choix_eleves = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_choix_eleves)){ ?>

    <div class="container">
        
    <a href="?formulaire_ajout_choix_eleve"><button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Ajouter un choix</button></a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Élève</th>
                <th scope="col">Matière</th>
                <th scope="col">Horaire</th>
                <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i = 0;
                    foreach($tableau_choix_eleves as $choix_eleve){
                        $i++;
                ?>
                <tr id="ligne<?=$i?>">
                <span id="id_eleve<?= $i ?>" style="display:none;"><?= $choix_eleve->get_fk_id_eleve() ?></span>
                <span id="id_matiere<?= $i ?>" style="display:none;"><?= $choix_eleve->get_fk_id_matiere() ?></span>
                <span id="id_horaire<?= $i ?>" style="display:none;"><?= $choix_eleve->get_fk_id_horaire() ?></span>
                    <td><?= $choix_eleve->get_eleve() ?></td>
                    <td><?= $choix_eleve->get_matiere() ?></td>
                    <td><?= $choix_eleve->get_horaire() ?></td>
                    <td><button class="supprimer_choix_eleve btn btn-danger btn-sm" value="<?= $i ?>"><i class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-danger btn-sm" id="confirm_suppression<?= $i ?>" style="display:none;">Confirmer</button></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
<script>

    $(document).ready(function(){
        $(".supprimer_choix_eleve").click(function(){
            // Récupération de l'id de la choix_eleve / id de la ligne
            var id_choix_eleve = $(this).val();
            // Affichage du bouton de confirmation
            $('#confirm_suppression' + id_choix_eleve).show();
            // Lors du click sur le bouton de confirmation
            $('#confirm_suppression' + id_choix_eleve).click(function(){
                // Appel à ajax
                $.ajax({
                    type: 'POST',
                    url: '?supprimer_choix_eleve',
                    data: {
                        'id_eleve' : $("#id_eleve"+id_choix_eleve).text(),
                        'id_matiere' : $("#id_matiere"+id_choix_eleve).text(),
                        'id_horaire' : $("#id_horaire"+id_choix_eleve).text(),
                    },
                    success: function(response){
                        $('#ligne' + id_choix_eleve).fadeOut('slow');
                    }
                });
            });
        });
    });

</script>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>