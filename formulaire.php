<?php
 
 if(isset($_POST['send'])){
    
    $service = $_POST['service'];
    $besoins = $_POST['besoins'];
    $quantite = $_POST['quantite'];
    $quantiteenstock = $_POST['quantiteenstock'];
    $date = $_POST['dates'];
    if (!(empty($service) || empty($besoins) || empty($quantite) || empty($quantiteenstock) || empty($date))){
       
try {
    $pdo = new pdo('mysql:host=localhost;dbname=test2','root','');
} catch (\Throwable $th) {
    echo 'erreur de connexion';
}

        $pdostat = $pdo->prepare('INSERT INTO user (services,besoins,quantite,stock,dates) values(?,?,?,?,?)');
        $pdostat->bindparam(1,$service);
        $pdostat->bindparam(2,$besoins);
        $pdostat->bindparam(3,$quantite);
        $pdostat->bindparam(4,$quantiteenstock);
        $pdostat->bindparam(5,$date);
        $pdostat->execute();
    }

 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="\bootstrap-5.0.2-dist\css\bootstrap.min.css">
</head>
<body class="bg-secondary">
    
    <div class="w-50 mx-auto vh-100  d-flex align-items-center">
        
        <form action="#" method="post" class="row gx-2 gy-2 px-2 py-3 bg-light border rounded" id="formulaire">
            <div class="col-12 text-center">
               
            </div>
            <div class="col-6">
                <input type="text" placeholder="entrer le service" name="service" class="form-control " style="width:300px;margin-bottom:10px; padding:5px 0;">
            </div>
            <div class="col-6">
                <input type="text" placeholder="entrer le besoins" name="besoins" class="form-control" style="width:300px;margin-bottom:10px; padding:5px 0;">
            </div>
            <div class="col-6">
                <input type="number" placeholder="entrer la quatite" name="quantite" class="form-control " style="width:300px;margin-bottom:10px; padding:5px 0;">
            </div>
            <div class="col-6">
                <input type="number" placeholder="entrer la quantite en stock" name="quantiteenstock" class="form-control " style="width:300px;margin-bottom:10px; padding:5px 0;">
            </div>
            <div class="col-6">
                <input type="date" placeholder="entrer la date" name="dates" class="form-control" style="width:300px;margin-bottom:10px; padding:5px 0;">
            </div>
            <div class="col-6">
                <input type="submit" value="enregistrer" name="send" class="btn btn-success w-100 " id="bout" style="width:300px;margin-bottom:10px; padding:5px 0;">
            </div>
        </form>
    </div>

    </style>
    <script>
  
</body>
</html>