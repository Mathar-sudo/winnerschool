<?php $titre_page = 'Ajouter un choix d\'élève' ?>

<?php $active_choix_eleves = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Ajouter un choix d'élève</h1>
        <hr style="width:25%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="g-3" method="POST" action="?ajouter_choix_eleve" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6" >
            <div class="row">
                
            <span class="text-danger" style="font-size:1.2em">Listes des élèves</span>
                <div class="col">
                    <label for="" class="form-label">Choisir un élève</label>
                    <select name="eleve" class="form-select" id="">
                    <?php
                    echo ("coucou");
                        foreach ($eleves as $eleve){
                            ?>
                            <option value="<?= $eleve->get_id_eleve() ?>"><?= $eleve->get_nom_eleve(). " ".$eleve->get_prenom_eleve() ?></option>

                            <?php
                        }
                    ?>

                    </select>
                </div>

                <span class="text-danger" style="font-size:1.2em">Matières souhaités</span>
                <div class="col">
                    <label for="" class="form-label">Choisir une matière</label>
                    <select name="matiere" class="form-select" id="">
                    <?php
                        foreach ($matieres as $matiere){
                            ?>
                            <option value="<?= $matiere->get_id_matiere() ?>"><?= $matiere->get_nom_matiere() ?></option>

                            <?php
                        }

                    ?>

                    </select>
                </div>

                <!--liste des jours et horaires de la table choix_eleve-->
                <span class="text-danger" style="font-size:1.2em">Horaires de cours souhaités</span>
                <div class="col">
                    <label for="" class="form-label">Choisir un horaire</label>
                    <select name="horaire[]" multiple class="form-select" id="">
                    <?php
                        foreach ($horaires as $horaire){
                            ?>
                            <option value="<?= $horaire->get_id_horaire() ?>"><?= $horaire->get_jour_horaire(). " à ".$horaire->get_heure_horaire() ?></option>

                            <?php
                        }

                    ?>

                    </select>
                </div>
               
            </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </div>
    </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>