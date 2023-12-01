<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Suppression</title>
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
                $nom=(isset($request_method['nom'])?$request_method['nom']:'');
                $query = 'SELECT nom FROM formateurs WHERE nom = "'.$_REQUEST['nom'].'"';
                $query='DELETE FROM formateurs WHERE nom = "'.$_REQUEST['nom'].'"';
                //echo $query;
                if(mysqli_query($conn, $query))
                {
                    $message ='<BR>Formateur supprimé avec succés.<BR>';
                }
                else
                {
                    $message ='<BR>Echec de supression du formateur .<BR>';
                }
                //echo $message;
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
                                <h1 class="text-dark mb-4" style="font-family: Bitter, serif;font-weight: bold;">Supprimer un client</h1>
                            </div>
                            <form class="user" method="POST">
                                <div class="row mb-3">
                                    <div class="col-sm-6 col-md-12 mb-3 mb-sm-0">
                                        <input class="form-control form-control-user" type="text" name="nom" placeholder="Nom " autofocus="">
                                    </div>
                                </div>
                                <hr><button class="btn btn-primary d-block btn-user w-100" name="btn_supprimer_dest" type="submit">SUPPRIMER</button>
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