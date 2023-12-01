<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Accueil</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body id="page-top">
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
                <br/>
                <br/>
                <div class="row">
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px;background-color: #780404;">
                            <div class="row g-0">
                                <div class="col text-light">
                                    <br/>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill mx-5" viewBox="0 0 16 16">
                                        <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                        <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                                    </svg>
                                    <div class="card-body mx-3">
                                        <h5>8</h5>
                                        <h5 class="card-title">Formateurs</h5>
                                    </div>
                                </div>
                                <div class="card-footer" style="color: #780404;background-color:#ffe7e7;">
                                    <a href="formateurs.php" class="link">
                                        Détails
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill mx-5" viewBox="0 0 16 16">
                                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3 text-light" style="max-width: 540px;background-color: #780404;">
                            <div class="row g-0">
                                <div class="col">
                                    <br/>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill mx-5" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
                                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                    </svg>
                                    <div class="card-body mx-3">
                                        <h5>8</h5>
                                        <h5 class="card-title">Modules</h5>
                                    </div>
                                </div>
                                <div class="card-footer" style="color: #780404;background-color:#ffe7e7;">
                                    <a href="modules.php" class="link">
                                        Détails
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill mx-5" viewBox="0 0 16 16">
                                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3 text-light" style="max-width: 540px;background-color: #780404;">
                            <div class="row g-0">
                                <div class="col">
                                    <br/>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill mx-5" viewBox="0 0 16 16">
                                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                                    </svg>
                                    <div class="card-body mx-2">
                                        <h5>80</h5>
                                        <h5 class="card-title">Stagiaires</h5>
                                    </div>
                                </div>
                                <div class="card-footer" style="color: #780404;background-color:#ffe7e7;">
                                    <a href="stagiaires.php" class="link">
                                        Détails
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill mx-5" viewBox="0 0 16 16">
                                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3 text-light" style="max-width: 540px;background-color: #780404;">
                            <div class="row g-0">
                                <div class="col">
                                    <br/>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill mx-5" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
                                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                    </svg>
                                    <div class="card-body mx-2">
                                        <h5>4</h5>
                                        <h5 class="card-title">Filières</h5>
                                    </div>
                                </div>
                                <div class="card-footer" style="color: #780404;background-color:#ffe7e7;">
                                    <a href="filieres.php" class="link">
                                        Détails
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill mx-5" viewBox="0 0 16 16">
                                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3 text-light" style="max-width: 540px;background-color: #780404;">
                            <div class="row g-0">
                                <div class="col">
                                    <br/>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill mx-5" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z"/>                                    </svg>
                                    <div class="card-body mx-2">
                                        <h5>8</h5>
                                        <h5 class="card-title">Groupes</h5>
                                    </div>
                                </div>
                                <div class="card-footer" style="color: #780404;background-color:#ffe7e7;">
                                    <a href="groupes.php" class="link">
                                        Détails
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill mx-5" viewBox="0 0 16 16">
                                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                <br/>
                <br/>
                    <div class="row">
                        <div class="col" style="background-color:#ffffff;border-top:2px solid #ffe7e7;padding: 20px;margin-right:10px;">
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn rounded-circle w-50" style="background-color:#e2e2e2;">
                                        <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                        </a>
                                    </button>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <h5 style="font-family:Tahoma;font-weight:bold;color:#001535;">
                                        Adresse :
                                        </h5>
                                        <p style="font-family:Tahoma;color:#001535;">
                                        26 Rue d'avesnes,Bd Med V Casablanca
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn rounded-circle w-50" style="background-color:#e2e2e2;">
                                        <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                        </svg>
                                        </a>
                                    </button>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <h5 style="font-family:Tahoma;font-weight:bold;color:#001535;">
                                            Email :
                                        </h5>
                                        <p style="font-family:Tahoma;color:#001535;">
                                            isgi-casa@ofppt.ma
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn rounded-circle w-50" style="background-color:#e2e2e2;">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                            </svg>
                                        </a>
                                    </button>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <h5 style="font-family:Tahoma;font-weight:bold;color:#001535;">
                                            Téléphone :
                                        </h5>
                                        <p style="font-family:Tahoma;color:#001535;">
                                            +212 22 24 31 88
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--Google map-->
                            <div class="row">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.424453620949!2d-7.603508485546647!3d33.59428984917262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd65706e85d7%3A0x327a13462f2a3fc9!2sInstitut%20sp%C3%A9cialis%C3%A9%20de%20gestion%20et%20de%20l&#39;informatique!5e0!3m2!1sfr!2sma!4v1668095131549!5m2!1sfr!2sma" 
                                width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col" style="background-color:#ffffff;border-top:2px solid #ffe7e7;padding: 20px;">
                            <form>
                                <br/>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            Votre nom
                                            <input type="text" class="form-control" placeholder="Tapez votre nom" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            Votre Email
                                            <input type="email" class="form-control" placeholder="Tapez votre Email" aria-label="Useremail" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            Objet
                                            <input type="text" class="form-control" placeholder="Tapez l'objet du message" aria-label="objet" aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            Message
                                            <textarea class="form-control" placeholder="Tapez votre message" aria-label="With textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <center>
                                    <button type="button" class="btn btn-outline-primary bg-primary text-light rounded-pill" style="width: 140px;">Envoyer</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>