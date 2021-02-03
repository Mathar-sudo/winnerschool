<?php $titre_page = 'Tous les plannings' ?>

<?php $active_plannings = true ?>

<?php ob_start(); ?>

<?php if(isset($tableau_plannings)){ ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Intervenant</th>
                <th scope="col">Eleve</th>
                <th scope="col">Equipe pédago.</th>
                <th scope="col">Salle</th>
                <th scope="col">Matière</th>
                <th scope="col">Numéro semaine</th>
                <th scope="col">Année</th>
                <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i=0;
                    foreach($tableau_plannings as $planning){
                        $i++;
                ?>
                <tr id="ligne<?= $i ?>">
                <span id="id_intervenant<?= $i ?>" style="display:none;"><?= $planning->get_fk_id_intervenant() ?></span>
                <span id="id_eleve<?= $i ?>" style="display:none;"><?= $planning->get_fk_id_eleve() ?></span>
                <span id="id_pedagogue<?= $i ?>" style="display:none;"><?= $planning->get_fk_id_pedagogue() ?></span>
                <span id="id_salle<?= $i ?>" style="display:none;"><?= $planning->get_fk_id_salle() ?></span>
                <span id="id_matiere<?= $i ?>" style="display:none;"><?= $planning->get_fk_id_matiere() ?></span>
                    <td><?= $planning->get_intervenant() ?></td>
                    <td><?= $planning->get_eleve() ?></td>
                    <td><?= $planning->get_pedagogue() ?></td>
                    <td><?= $planning->get_salle() ?></td>
                    <td><?= $planning->get_matiere() ?></td>
                    <td><?= $planning->get_numero_semaine() ?></td>
                    <td><?= $planning->get_annee() ?></td>
                    <td><button class="supprimer_planning btn btn-danger btn-sm" value="<?= $i ?>"><i class="fas fa-trash-alt"></i></button>
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
    $(".supprimer_planning").click(function(){     
      // Récupération de l'id de la planning / id de la ligne
      var id_planning = $(this).val();
            // Affichage du bouton de confirmation
            $('#confirm_suppression' + id_planning).show();
            // Lors du click sur le bouton de confirmation
            $('#confirm_suppression' + id_planning).click(function(){
                // Appel à ajax
                console.log($("#id_intervenant" + id_planning).text()+" "+$("#id_eleve" + id_planning).text()+" "+ $("#id_pedagogue" + id_planning).text()+" "+$("#id_salle" + id_planning).text()+" "+$("#id_matiere" + id_planning).text());
                $.ajax({
                    type:'POST',
                    url: '?supprimer_planning',
                    data: {
                        'id_intervenant': $("#id_intervenant" + id_planning).text(),
                        'id_eleve': $("#id_eleve" + id_planning).text(),
                        'id_pedagogue': $("#id_pedagogue" + id_planning).text(),
                        'id_salle': $("#id_salle" + id_planning).text(),
                        'id_matiere': $("#id_matiere" + id_planning).text(),
                    },
                    success: function(response){
                        $('#ligne' + id_planning).fadeOut('slow');
                    }
                });
            });
    });
});
</script>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>