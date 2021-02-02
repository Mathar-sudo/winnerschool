<?php 
    require_once('./fonction/autoload.php');
    
    $titre_page = 'Accueil';
    $active_accueil = true;
?>

<?php ob_start(); ?>

<div class="container my-5">
    <h1 class="text-primary">Accueil</h1>
    <hr style="width:15%">
    <div class="row">
        <!-- Présentation de l'école -->
        <div class="col-8">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo mi, suscipit a libero vitae, egestas tincidunt mi. In consectetur ex sit amet luctus venenatis. Aliquam euismod dui ut pellentesque tempus. Duis eleifend varius nisi nec placerat. Ut elementum facilisis massa eget lacinia. Curabitur sodales sagittis sapien, a iaculis mauris gravida ac. Donec ultrices finibus lacus sit amet faucibus. Nullam eget sodales dui, id ultricies justo. Pellentesque quis faucibus elit. Proin eu libero mollis, sollicitudin turpis sed, sodales mauris.
            </p>
            <div class="text-center mb-3"><button class="btn btn-primary">Bouton 1</button></div>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo mi, suscipit a libero vitae, egestas tincidunt mi. In consectetur ex sit amet luctus venenatis. Aliquam euismod dui ut pellentesque tempus. Duis eleifend varius nisi nec placerat. Ut elementum facilisis massa eget lacinia. Curabitur sodales sagittis sapien, a iaculis mauris gravida ac. Donec ultrices finibus lacus sit amet faucibus. Nullam eget sodales dui, id ultricies justo. Pellentesque quis faucibus elit. Proin eu libero mollis, sollicitudin turpis sed, sodales mauris.
            </p>
            <div class="text-center mb-3"><button class="btn btn-info">Bouton 2</button></div>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo mi, suscipit a libero vitae, egestas tincidunt mi. In consectetur ex sit amet luctus venenatis. Aliquam euismod dui ut pellentesque tempus. Duis eleifend varius nisi nec placerat. Ut elementum facilisis massa eget lacinia. Curabitur sodales sagittis sapien, a iaculis mauris gravida ac. Donec ultrices finibus lacus sit amet faucibus. Nullam eget sodales dui, id ultricies justo. Pellentesque quis faucibus elit. Proin eu libero mollis, sollicitudin turpis sed, sodales mauris.
            </p>
            <div class="text-center mb-3"><button class="btn btn-danger">Bouton 3</button></div>
        </div>
        <div class="col-1"></div>
        <!-- Navigation -->
        <div class="col-3 bg-lightgrey shadow">
            <div class="p-3">
                <h3 class="text-primary">Navigation</h3>
                <hr style="width:50%">
                <a href="#" style="text-decoration:none"><i class="fas fa-user"></i> Se rendre sur son espace membre</a>
                <br><br>
                <a href="#" style="text-decoration:none"><i class="fas fa-user-plus"></i> S'enregistrer en tant que nouveau membre</a>
                <br><br>
                <a href="#" style="text-decoration:none"><i class="fas fa-clipboard-list"></i> S'inscrire à une session</a>
            </div>
        </div>
    </div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require('base.php'); ?>