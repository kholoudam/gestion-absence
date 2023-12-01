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
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Liste des satagiaires</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <tr class="row">
                                        <TD class="col-lg-1 col-md-3 col-sd-6">CIN</TD>
                                        <TD class="col-lg-2 col-md-3 col-sd-6">Nom</TD>
                                        <TD class="col-lg-2 col-md-3 col-sd-6">Prénom</TD>
                                        <TD class="col-lg-2 col-md-3 col-sd-6">Email</TD>
                                        <TD class="col-lg-2 col-md-3 col-sd-6">Téléphone</TD>
                                        <TD class="col-lg-3 col-md-3 col-sd-6">Absences</TD>
                                    </tr>
                                    <?php
                                        while($row=mysqli_fetch_assoc($resultat)){
                                    ?>
                                    <TR class="row">
                                        <TD class="col-lg-1 col-md-3 col-sd-6"><?=$row['CIN']?></TD>
                                        <TD class="col-lg-2 col-md-3 col-sd-6"><?=$row['nom']?></TD>
                                        <TD class="col-lg-2 col-md-3 col-sd-6"><?=$row['prenom']?></TD>
                                        <TD class="col-lg-2 col-md-3 col-sd-6"><?=$row['email']?></TD>
                                        <TD class="col-lg-2 col-md-3 col-sd-6"><?=$row['phone']?></TD>
                                        <TD class="col-lg-3 col-md-3 col-sd-6">
                                            <a class="btn btn-primary" role="button" href="absences.php" target="_blank">
                                                <i class="fa fa-plus"></i>
                                                Marquer l'absences
                                            </a>
                                        </TD>
                                    </TR>
                                    <?php   } ?>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite"></p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
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