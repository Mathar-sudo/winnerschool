<?php $titre_page = $classe->get_nom_classe(); ?>

<?php $active_classes = true ?>

<?php ob_start(); ?>

<?php if(isset($classe)){ ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?classes">Toutes les classes</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $classe->get_nom_classe() ?></li>
            </ol>
        </nav>
        <hr class="w-25">
        <div class="row ">
         <div class="col-5">
            <div class="card">
                <div class="card-body text-center">
                <p>Nom de la classe : <?= $classe->get_nom_classe() ?></p>
                  </div>
                </div>
            </div>
       
    </div>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>