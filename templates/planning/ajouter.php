<?php $titre_page = 'Ajouter un élément au planning' ?>

<?php $active_plannings = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Ajouter un élément au planning</h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="row g-3" method="POST" action="?ajouter_planning">
            <div class="row">
                <div class="col-6">
                    <label for="input_intervenant" class="form-label">Intervenant</label>
                    <select name="intervenant_planning" class="form-select" id="input_intervenant" required>
                        <option value selected disabled>Choisissez un intervenant</option>
                        <?php foreach($intervenants as $intervenant) { ?>  
                            <option value="<?= $intervenant->get_id_intervenant() ?>"><?= $intervenant->get_nom_intervenant() . ' ' . $intervenant->get_prenom_intervenant() . ' (' . $intervenant->get_specialite_intervenant() . ')' ?></option>
                        <?php } ?>
                    </select>
                    <label for="input_eleve" class="form-label">Élève</label>
                    <select name="eleve_planning" class="form-select" id="input_eleve" required>
                        <option value selected disabled>Choisissez un élève</option>
                        <?php foreach($eleves as $eleve) { ?>  
                            <option value="<?= $eleve->get_id_eleve() ?>"><?= $eleve->get_nom_eleve() . ' ' . $eleve->get_prenom_eleve() . ' (Responsable : ' . $eleve->get_responsable() . ')' ?></option>
                        <?php } ?>
                    </select>
                    <label for="input_pedagogue" class="form-label">Pédagogue</label>
                    <select name="pedagogue_planning" class="form-select" id="input_pedagogue" required>
                        <option value selected disabled>Choisissez un pédagogue</option>
                        <?php foreach($pedagogues as $pedagogue) { ?>  
                            <option value="<?= $pedagogue->get_id_pedagogue() ?>"><?= $pedagogue->get_nom_pedagogue() . ' ' . $pedagogue->get_prenom_pedagogue() ?></option>
                        <?php } ?>
                    </select>
                    <label for="input_salle" class="form-label">Salle</label>
                    <select name="salle_planning" class="form-select" id="input_salle" required>
                        <option value selected disabled>Choisissez une salle</option>
                        <?php foreach($salles as $salle) { ?>  
                            <option value="<?= $salle->get_id_salle() ?>"><?= $salle->get_nom_salle() ?></option>
                        <?php } ?>
                    </select>
                    <label for="input_matiere" class="form-label">Matière</label>
                    <select name="matiere_planning" class="form-select" id="input_matiere" required>
                        <option value selected disabled>Choisissez une matière</option>
                        <?php foreach($matieres as $matiere) { ?>  
                            <option value="<?= $matiere->get_id_matiere() ?>"><?= $matiere->get_nom_matiere() ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-6">
                    <label for="input_horaire" class="form-label">Horaire</label>
                    <select name="horaire_planning" class="form-select" id="input_horaire" required>
                        <option value selected disabled>Choisissez un horaire</option>
                        <?php foreach($horaires as $horaire) { ?>  
                            <option value="<?= $horaire->get_id_horaire() ?>"><?= $horaire->get_jour_horaire() . ' à ' . $horaire->get_heure_horaire() ?></option>
                        <?php } ?>
                    </select>
                    <label for="input_numero_semaine" class="form-label">Numéro de semaine</label>
                    <input type="text" name="numero_semaine_planning" class="form-control" id="input_numero_semaine" required>
                    <label for="input_annee" class="form-label">Année</label>
                    <input type="text" name="annee_planning" class="form-control" id="input_annee" required>
                </div>    
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>