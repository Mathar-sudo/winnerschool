<?php $titre_page = $pedagogue->get_nom_pedagogue()." ".$pedagogue->get_prenom_pedagogue(); ?>

<?php $active_pedagogues = true ?>

<?php ob_start(); ?>

<?php if(isset($pedagogue)){ ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?pedagogues">Tous les pédagogues</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $pedagogue->get_prenom_pedagogue() . ' ' . $pedagogue->get_nom_pedagogue() ?></li>
            </ol>
        </nav>
        <hr class="w-35">
        <div class="row justify-content-center">
         <div class="col-5">
            <div class="card">
                <div class="card-body text-center">
                <img src="images/avatar.jpg" alt="..." class="img-thumbnail" width='100' height='100'>
                <p class="mt-3">Nom : <?= $pedagogue->get_nom_pedagogue() ?></p>
                <p>Prénom : <?= $pedagogue->get_prenom_pedagogue() ?></p>
                </div>
        
            </div>
            <div class="card mt-3">
                <div class="card-body text-center">
                <h5 class="text-danger">Coordonnées</h5>
                <p>Téléphone mobile : <?= $pedagogue->get_mobile_pedagogue() ?></p>
                <p>Email : <?= $pedagogue->get_mail_pedagogue() ?></p>
              </div>

             
        
            </div>
            <?php if(isset($_SESSION['admin'])){ ?>
            <div class="text-center mt-3">
                <a href="?formulaire_modifier_pedagogue=<?= $pedagogue->get_id_pedagogue();?> "class="btn btn-primary w-25" >Modifier</a>
            </div>
            <?php } ?>
         </div>
        </div>
       
    </div>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>