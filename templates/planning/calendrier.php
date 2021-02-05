<?php $titre_page = 'Calendrier' ?>

<?php $active_plannings = true ?>

<?php 
    $use_planning = new Use_Planning(); 
    $lundi_1_1 = $use_planning->findByHoraireSalle(1, 1, $semaine);
    $lundi_1_2 = $use_planning->findByHoraireSalle(1, 2, $semaine);
    $lundi_1_3 = $use_planning->findByHoraireSalle(1, 3, $semaine);
    $lundi_1_4 = $use_planning->findByHoraireSalle(1, 4, $semaine);
    $lundi_1_5 = $use_planning->findByHoraireSalle(1, 5, $semaine);
    $lundi_2_1 = $use_planning->findByHoraireSalle(2, 1, $semaine);
    $lundi_2_2 = $use_planning->findByHoraireSalle(2, 2, $semaine);
    $lundi_2_3 = $use_planning->findByHoraireSalle(2, 3, $semaine);
    $lundi_2_4 = $use_planning->findByHoraireSalle(2, 4, $semaine);
    $lundi_2_5 = $use_planning->findByHoraireSalle(2, 5, $semaine);
    $mardi_1_1 = $use_planning->findByHoraireSalle(3, 1, $semaine);
    $mardi_1_2 = $use_planning->findByHoraireSalle(3, 2, $semaine);
    $mardi_1_3 = $use_planning->findByHoraireSalle(3, 3, $semaine);
    $mardi_1_4 = $use_planning->findByHoraireSalle(3, 4, $semaine);
    $mardi_1_5 = $use_planning->findByHoraireSalle(3, 5, $semaine);
    $mardi_2_1 = $use_planning->findByHoraireSalle(4, 1, $semaine);
    $mardi_2_2 = $use_planning->findByHoraireSalle(4, 2, $semaine);
    $mardi_2_3 = $use_planning->findByHoraireSalle(4, 3, $semaine);
    $mardi_2_4 = $use_planning->findByHoraireSalle(4, 4, $semaine);
    $mardi_2_5 = $use_planning->findByHoraireSalle(4, 5, $semaine);
    $mercredi_1_1 = $use_planning->findByHoraireSalle(5, 1, $semaine);
    $mercredi_1_2 = $use_planning->findByHoraireSalle(5, 2, $semaine);
    $mercredi_1_3 = $use_planning->findByHoraireSalle(5, 3, $semaine);
    $mercredi_1_4 = $use_planning->findByHoraireSalle(5, 4, $semaine);
    $mercredi_1_5 = $use_planning->findByHoraireSalle(5, 5, $semaine);
    $mercredi_2_1 = $use_planning->findByHoraireSalle(6, 1, $semaine);
    $mercredi_2_2 = $use_planning->findByHoraireSalle(6, 2, $semaine);
    $mercredi_2_3 = $use_planning->findByHoraireSalle(6, 3, $semaine);
    $mercredi_2_4 = $use_planning->findByHoraireSalle(6, 4, $semaine);
    $mercredi_2_5 = $use_planning->findByHoraireSalle(6, 5, $semaine);
    $mercredi_3_1 = $use_planning->findByHoraireSalle(7, 1, $semaine);
    $mercredi_3_2 = $use_planning->findByHoraireSalle(7, 2, $semaine);
    $mercredi_3_3 = $use_planning->findByHoraireSalle(7, 3, $semaine);
    $mercredi_3_4 = $use_planning->findByHoraireSalle(7, 4, $semaine);
    $mercredi_3_5 = $use_planning->findByHoraireSalle(7, 5, $semaine);
    $mercredi_4_1 = $use_planning->findByHoraireSalle(8, 1, $semaine);
    $mercredi_4_2 = $use_planning->findByHoraireSalle(8, 2, $semaine);
    $mercredi_4_3 = $use_planning->findByHoraireSalle(8, 3, $semaine);
    $mercredi_4_4 = $use_planning->findByHoraireSalle(8, 4, $semaine);
    $mercredi_4_5 = $use_planning->findByHoraireSalle(8, 5, $semaine);
    $mercredi_5_1 = $use_planning->findByHoraireSalle(9, 1, $semaine);
    $mercredi_5_2 = $use_planning->findByHoraireSalle(9, 2, $semaine);
    $mercredi_5_3 = $use_planning->findByHoraireSalle(9, 3, $semaine);
    $mercredi_5_4 = $use_planning->findByHoraireSalle(9, 4, $semaine);
    $mercredi_5_5 = $use_planning->findByHoraireSalle(9, 5, $semaine);
    $jeudi_1_1 = $use_planning->findByHoraireSalle(10, 1, $semaine);
    $jeudi_1_2 = $use_planning->findByHoraireSalle(10, 2, $semaine);
    $jeudi_1_3 = $use_planning->findByHoraireSalle(10, 3, $semaine);
    $jeudi_1_4 = $use_planning->findByHoraireSalle(10, 4, $semaine);
    $jeudi_1_5 = $use_planning->findByHoraireSalle(10, 5, $semaine);
    $jeudi_2_1 = $use_planning->findByHoraireSalle(11, 1, $semaine);
    $jeudi_2_2 = $use_planning->findByHoraireSalle(11, 2, $semaine);
    $jeudi_2_3 = $use_planning->findByHoraireSalle(11, 3, $semaine);
    $jeudi_2_4 = $use_planning->findByHoraireSalle(11, 4, $semaine);
    $jeudi_2_5 = $use_planning->findByHoraireSalle(11, 5, $semaine);
    $vendredi_1_1 = $use_planning->findByHoraireSalle(11, 1, $semaine);
    $vendredi_1_2 = $use_planning->findByHoraireSalle(11, 2, $semaine);
    $vendredi_1_3 = $use_planning->findByHoraireSalle(11, 3, $semaine);
    $vendredi_1_4 = $use_planning->findByHoraireSalle(11, 4, $semaine);
    $vendredi_1_5 = $use_planning->findByHoraireSalle(11, 5, $semaine);
    $vendredi_2_1 = $use_planning->findByHoraireSalle(12, 1, $semaine);
    $vendredi_2_2 = $use_planning->findByHoraireSalle(12, 2, $semaine);
    $vendredi_2_3 = $use_planning->findByHoraireSalle(12, 3, $semaine);
    $vendredi_2_4 = $use_planning->findByHoraireSalle(12, 4, $semaine);
    $vendredi_2_5 = $use_planning->findByHoraireSalle(12, 5, $semaine);
?>

<?php ob_start(); ?>

    <div class="container" style="max-width:100% !important">
    <?php if(isset($_SESSION['admin']) || isset($_SESSION['secretaire'])){ ?>
    <a href="?formulaire_ajout_planning"><button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Ajouter un élément au planning</button></a>
    <?php } ?>
        <div class="my-5">
            <h5 class="text-primary">Choisissez une semaine</h5>
            <form method="POST" action="?calendrier_semaine">
                <div class="row w-50">
                    <div class="col-6">
                        <select class="form-select" name="semaine">
                            <?php if($semaine == 6){ ?>
                            <option value="6">Semaine n°6 : 1er février au 5 février</option>
                            <option value="7">Semaine n°7 : 8 février au 12 février</option>
                            <?php } else if($semaine == 7){ ?>
                            <option value="7">Semaine n°7 : 8 février au 12 février</option>
                            <option value="6">Semaine n°6 : 1er février au 5 février</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary">Rechercher</button>
                    </div>
                </div>
            </form>
            <hr>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr style="font-size:0.8em">
                    <th scope="col" style="width:100px"></th>
                    <th scope="col">Lundi 17h55 - 18h55</th>
                    <th scope="col">Lundi 19h05 - 20h05</th>
                    <th scope="col">Mardi 17h55 - 18h55</th>
                    <th scope="col">Mardi 19h05 - 20h05</th>
                    <th scope="col">Mercredi 14h00 - 15h00</th>
                    <th scope="col">Mercredi 15h10 - 16h10</th>
                    <th scope="col">Mercredi 16h20 - 17h20</th>
                    <th scope="col">Mercredi 17h30 - 18h30</th>
                    <th scope="col">Mercredi 18h40 - 19h40</th>
                    <th scope="col">Jeudi 17h55 - 18h55</th>
                    <th scope="col">Jeudi 19h05 - 20h05</th>
                    <th scope="col">Vendredi 17h55 - 18h55</th>
                    <th scope="col">Vendredi 19h05 - 20h05</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bora Bora</td>
                        <!-- Lundi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($lundi_1_1 != null){ ?>
                                    <span class="text-primary"><?= $lundi_1_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($lundi_1_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $lundi_1_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($lundi_2_1 != null){ ?>
                                    <span class="text-primary"><?= $lundi_2_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($lundi_2_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $lundi_2_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Mardi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mardi_1_1 != null){ ?>
                                    <span class="text-primary"><?= $mardi_1_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mardi_1_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mardi_1_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mardi_2_1 != null){ ?>
                                    <span class="text-primary"><?= $mardi_2_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mardi_2_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mardi_2_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Mercredi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_1_1 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_1_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_1_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_1_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_2_1 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_2_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_2_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_2_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_3_1 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_3_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_3_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_3_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_4_1 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_4_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_4_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_4_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_5_1 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_5_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_5_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_5_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Jeudi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($jeudi_1_1 != null){ ?>
                                    <span class="text-primary"><?= $jeudi_1_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($jeudi_1_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $jeudi_1_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($jeudi_2_1 != null){ ?>
                                    <span class="text-primary"><?= $jeudi_2_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($jeudi_2_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $jeudi_2_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Vendredi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($vendredi_1_1 != null){ ?>
                                    <span class="text-primary"><?= $vendredi_1_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($vendredi_1_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $vendredi_1_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($vendredi_2_1 != null){ ?>
                                    <span class="text-primary"><?= $vendredi_2_1[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($vendredi_2_1 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $vendredi_2_1[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tahiti</td>
                        <!-- Lundi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($lundi_1_2 != null){ ?>
                                    <span class="text-primary"><?= $lundi_1_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($lundi_1_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $lundi_1_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($lundi_2_2 != null){ ?>
                                    <span class="text-primary"><?= $lundi_2_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($lundi_2_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $lundi_2_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Mardi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mardi_1_2 != null){ ?>
                                    <span class="text-primary"><?= $mardi_1_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mardi_1_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mardi_1_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mardi_2_2 != null){ ?>
                                    <span class="text-primary"><?= $mardi_2_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mardi_2_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mardi_2_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Mercredi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_1_2 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_1_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_1_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_1_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_2_2 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_2_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_2_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_2_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_3_2 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_3_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_3_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_3_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_4_2 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_4_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_4_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_4_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_5_2 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_5_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_5_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_5_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Jeudi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($jeudi_1_2 != null){ ?>
                                    <span class="text-primary"><?= $jeudi_1_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($jeudi_1_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $jeudi_1_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($jeudi_2_2 != null){ ?>
                                    <span class="text-primary"><?= $jeudi_2_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($jeudi_2_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $jeudi_2_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Vendredi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($vendredi_1_2 != null){ ?>
                                    <span class="text-primary"><?= $vendredi_1_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($vendredi_1_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $vendredi_1_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($vendredi_2_2 != null){ ?>
                                    <span class="text-primary"><?= $vendredi_2_2[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($vendredi_2_2 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $vendredi_2_2[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tokyo</td>
                        <!-- Lundi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($lundi_1_3 != null){ ?>
                                    <span class="text-primary"><?= $lundi_1_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($lundi_1_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $lundi_1_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($lundi_2_3 != null){ ?>
                                    <span class="text-primary"><?= $lundi_2_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($lundi_2_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $lundi_2_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Mardi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mardi_1_3 != null){ ?>
                                    <span class="text-primary"><?= $mardi_1_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mardi_1_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mardi_1_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mardi_2_3 != null){ ?>
                                    <span class="text-primary"><?= $mardi_2_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mardi_2_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mardi_2_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Mercredi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_1_3 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_1_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_1_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_1_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_2_3 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_2_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_2_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_2_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_3_3 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_3_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_3_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_3_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_4_3 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_4_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_4_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_4_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_5_3 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_5_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_5_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_5_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Jeudi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($jeudi_1_3 != null){ ?>
                                    <span class="text-primary"><?= $jeudi_1_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($jeudi_1_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $jeudi_1_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($jeudi_2_3 != null){ ?>
                                    <span class="text-primary"><?= $jeudi_2_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($jeudi_2_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $jeudi_2_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Vendredi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($vendredi_1_3 != null){ ?>
                                    <span class="text-primary"><?= $vendredi_1_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($vendredi_1_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $vendredi_1_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($vendredi_2_3 != null){ ?>
                                    <span class="text-primary"><?= $vendredi_2_3[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($vendredi_2_3 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $vendredi_2_3[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Moscou</td>
                        <!-- Lundi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($lundi_1_4 != null){ ?>
                                    <span class="text-primary"><?= $lundi_1_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($lundi_1_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $lundi_1_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($lundi_2_4 != null){ ?>
                                    <span class="text-primary"><?= $lundi_2_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($lundi_2_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $lundi_2_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Mardi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mardi_1_4 != null){ ?>
                                    <span class="text-primary"><?= $mardi_1_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mardi_1_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mardi_1_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mardi_2_4 != null){ ?>
                                    <span class="text-primary"><?= $mardi_2_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mardi_2_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mardi_2_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Mercredi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_1_4 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_1_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_1_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_1_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_2_4 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_2_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_2_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_2_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_3_4 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_3_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_3_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_3_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_4_4 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_4_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_4_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_4_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_5_4 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_5_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_5_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_5_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Jeudi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($jeudi_1_4 != null){ ?>
                                    <span class="text-primary"><?= $jeudi_1_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($jeudi_1_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $jeudi_1_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($jeudi_2_4 != null){ ?>
                                    <span class="text-primary"><?= $jeudi_2_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($jeudi_2_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $jeudi_2_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Vendredi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($vendredi_1_4 != null){ ?>
                                    <span class="text-primary"><?= $vendredi_1_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($vendredi_1_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $vendredi_1_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($vendredi_2_4 != null){ ?>
                                    <span class="text-primary"><?= $vendredi_2_4[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($vendredi_2_4 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $vendredi_2_4[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Paris</td>
                        <!-- Lundi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($lundi_1_5 != null){ ?>
                                    <span class="text-primary"><?= $lundi_1_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($lundi_1_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $lundi_1_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($lundi_2_5 != null){ ?>
                                    <span class="text-primary"><?= $lundi_2_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($lundi_2_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $lundi_2_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Mardi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mardi_1_5 != null){ ?>
                                    <span class="text-primary"><?= $mardi_1_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mardi_1_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                            <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mardi_1_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mardi_2_5 != null){ ?>
                                    <span class="text-primary"><?= $mardi_2_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mardi_2_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                            <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mardi_2_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Mercredi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_1_5 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_1_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_1_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_1_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_2_5 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_2_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_2_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_2_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_3_5 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_3_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_3_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_3_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_4_5 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_4_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_4_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_4_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($mercredi_5_5 != null){ ?>
                                    <span class="text-primary"><?= $mercredi_5_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($mercredi_5_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $mercredi_5_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Jeudi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($jeudi_1_5 != null){ ?>
                                    <span class="text-primary"><?= $jeudi_1_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($jeudi_1_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $jeudi_1_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($jeudi_2_5 != null){ ?>
                                    <span class="text-primary"><?= $jeudi_2_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($jeudi_2_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $jeudi_2_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <!-- Vendredi -->
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($vendredi_1_5 != null){ ?>
                                    <span class="text-primary"><?= $vendredi_1_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($vendredi_1_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $vendredi_1_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <?php if($vendredi_2_5 != null){ ?>
                                    <span class="text-primary"><?= $vendredi_2_5[0]->get_matiere() ?>, terminale</span>
                                    <hr class="w-25">
                                    Elèves :<br>
                                            <?php foreach($vendredi_2_5 as $creneau){ ?>
                                        <span style="font-size:0.9em;"><?= $creneau->get_eleve() . '<br>' ?></span>
                                        <?php } ?>
                                    <hr class="w-25">
                                    <span class="text-primary">Intervenant : <?= $vendredi_2_5[0]->get_intervenant() . '<br>' ?></span>
                                    <?php } else {
                                            echo '<div class="text-center">x</div>';
                                        } ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>