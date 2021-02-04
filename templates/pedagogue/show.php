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
        <hr class="w-25">
        <p>Id de la pedagogue : <?= $pedagogue->get_id_pedagogue() ?></p>
        <p>Nom de la pedagogue : <?= $pedagogue->get_nom_pedagogue() ?></p>
        <p>Prenom de la pedagogue : <?= $pedagogue->get_prenom_pedagogue() ?></p>
    </div>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>