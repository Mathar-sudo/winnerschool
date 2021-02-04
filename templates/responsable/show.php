<?php $titre_page = $responsable->get_nom_responsable() ." ".$responsable->get_prenom_responsable(); ?>

<?php $active_responsables = true ?>

<?php ob_start(); ?>

<?php if(isset($responsable)){ ?>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?responsables">Tous les responsables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $responsable->get_prenom_responsable() . ' ' . $responsable->get_nom_responsable() ?></li>
            </ol>
        </nav>
        <hr class="w-55">
        <div class="row ">
         <div class="col-5">
            <div class="card">
                <div class="card-body text-center">
                <img src="images/avatar.jpg" alt="..." class="img-thumbnail" width='100' height='100'>
                <p class="mt-3">Nom : <?= $responsable->get_nom_responsable() ?></p>
                <p>Prénom : <?= $responsable->get_prenom_responsable() ?></p>
                </div>
        
            </div>
            <div class="card mt-3">
                <div class="card-body text-center">
                <h5 class="text-danger">Coordonnées</h5>
                <p>Adresse : <?= $responsable->get_adresse_responsable() ?></p>
                <p>Code Postale : <?= $responsable->get_cdp_responsable() ?></p>
                <p>Ville : <?= $responsable->get_ville_responsable() ?></p>
                <p>Téléphone fixe : <?= $responsable->get_fixe_responsable() ?></p>
                <p>Téléphone mobile : <?= $responsable->get_mobile_responsable() ?></p>
                <p>Email : <?= $responsable->get_mail_responsable() ?></p>
              </div>

             
        
            </div>
            <div class="text-center mt-3">
                <a href="?formulaire_modifier_responsable=<?= $responsable->get_id_responsable();?> "class="btn btn-primary w-25" >Modifier</a>
            </div>
         </div>
        </div>
      
    </div>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>