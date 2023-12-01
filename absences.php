<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <?php
        include 'connect_bd_absences.php'
    ?>
</head>

<body id="page-top">
<?php
if (!$conn){
    echo '<BR>Pb de connexion a la base de donnees<BR>';
}
else{
    $text_requete="SELECT * FROM `stagiaires` ";
    $resultat=mysqli_query($conn,$text_requete);
    if(mysqli_num_rows($resultat)==0){
        echo '<BR>aucun stagiaires n\'est existant dans la base de donnees<BR>';
    }
    else 
    {
        function getEtudiant($codeStagiaire)
        {
            $student = "";
            $sttm = $conn->prepare("SELECT * FROM stagiaires where codeStagiaire=:codeStagiaire");
            $sttm->bindParam(':codeStagiaire', $codeStagiaire);
            if ($sttm->execute()) {
                $student = $sttm->fetch(PDO::FETCH_ASSOC);
                return $student;
            }
            return $student;
        }
        function listModules()
        {
            $modules = [];
            $sttm = $conn->prepare("SELECT * FROM modules");
            if ($sttm->execute()) {
                $modules = $sttm->fetchAll();
                return $modules;
            }
            return $modules;
        }
        $etudiant = getEtudiant($_GET["codeStagiaire"]);
        $modules = listModules();
?>
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-text mx-3" style="width: 180px;height: 54.375px;">
                        <img class="img-thumbnail rounded-circle" id="amspec_img-1" src="assets/img/isgi1.jpg">
                    </div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item">
                        <a class="nav-link active" href="acceuil.php">
                            <i class="fa fa-home"></i>
                            <span>Accueil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formateurs.php">
                            <i class="fas fa-table"></i>
                            <span>Formateurs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modules.php">
                            <i class="fas fa-table"></i>
                            <span>Modules</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stagiaires.php">
                            <i class="fas fa-table"></i>
                            <span>Stagiaires</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="liste_absences.php">
                            <i class="fas fa-table"></i>
                            <span>Liste d'absences</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="principale.php">
                            <i class="fa fa-sign-out"></i>
                            <span>Se connecter</span>
                        </a>
                    </li>
                </ul>
                <div class="text-center d-none d-md-inline">
                    <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                </div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3>Etudiant : <?= $etudiant["nom"] ?> <?= $etudiant["prenom"] ?></h3></div>
                                <div class="panel-body">
                                    <h4>CNE : <?=$etudiant["cne"] ?></h4>
                                    <h4>EMAIL : <a target="_blank" href="mailto:<?=$etudiant["email"] ?>"  ><?=$etudiant["email"] ?></a></h4>
                                    <h4>Téléphone : <?=$etudiant["telephone"] ?></h4>
                                    <hr>
                                    <form action="marquer_absence.php" method="POST">
                                        <input type="hidden" name="id" value="<?=$etudiant["id"]; ?>" >
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Module</label>
                                                    <select class="form-control" name="module" id="">
                                                        <?php foreach ($modules as $m): ?>
                                                            <option value="<?= $m["nom_module"] ?>"><?= $m["nom_module"] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Date absence</label>
                                                    <input type="date" name="date_absence" class="form-control" placeholder="Date absence" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Créneau horaire</label>
                                                    <select name="crn_horaire" id="" class="form-control">
                                                        <option value="8-10">8-10</option>
                                                        <option value="10-12">10-12</option>
                                                        <option value="13-15">13-15</option>
                                                        <option value="15-17">15-17</option>
                                                        <option value="17-19">17-19</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Type d'absence</label>
                                                    <select class="form-control" name="type_absence" id="">
                                                        <option value="Absence justifiée" selected >Absence justifiée</option>
                                                        <option value="Absence non-justifiée">Absence non-justifiée</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-warning" name="marquer-absence" >Marquer l'absence</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <?php
            }
        }
    ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>