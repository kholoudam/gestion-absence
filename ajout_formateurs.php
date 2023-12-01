<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
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
        include 'connect_bd_absences.php';
    ?>
   </HEAD>
   <body class="bg-gradient-primary">
   <?php
    if (!$conn)
    {
        echo '<BR>Pb de connexion a la base de donnees<BR>';
    }
    else
    {
        $request_method = $_SERVER["REQUEST_METHOD"];
        if($request_method=='POST'){
            $nom=(isset($_REQUEST['nom'])?$_REQUEST['nom']:'');
            $prenom=(isset($_REQUEST['prenom'])?$_REQUEST['prenom']:'');
            $module=(isset($_REQUEST['module'])?$_REQUEST['module']:'');
            $filieres=(isset($_REQUEST['filieres'])?$_REQUEST['filieres']:'');
            $query="SELECT * FROM formateurs";
            $query="INSERT INTO formateurs(nom,prenom,module,filieres)
            VALUES('".$nom."', '".$prenom."', '".$module."', '".$filieres."')";
            //echo $query;
            if(mysqli_query($conn, $query))
            {
                $message ='<BR>Formateur ajouté(e) avec succés.<BR>';
            }
            else
            {
                $message ='<BR>Echec d\'ajout du formateur .<BR>';
            }
            echo $message;
            header('location: formateurs.php');
        }
        else{
?>
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-7 col-xxl-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="text-dark mb-4" style="font-family: Bitter, serif;font-weight: bold;">Créer un nouveau formateur</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="row mb-3">
                                    <div class="col-sm-6 col-md-12 mb-3 mb-sm-0">
                                        <input class="form-control form-control-user" type="text" name="nom" placeholder="Nom " autofocus="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xxl-12">
                                        <input class="form-control form-control-user" type="text" name="prenom" placeholder="Prénom">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xxl-12">
                                        <input class="form-control form-control-user" type="text" name="module" placeholder="Module">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xxl-12">
                                        <input class="form-control form-control-user" type="text" name="filieres" placeholder="Filières">
                                    </div>
                                </div>
                                <hr><button class="btn btn-primary d-block btn-user w-100" name="btn_enregistrer_dest" type="submit">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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