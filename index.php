<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <span>Nom:</span>
        <input placeholder="Entrez votre Nom" name="nom" type="text"><br><br>
    <span>Prenom:</span>
        <input placeholder="Entrez votre Prenom" name="prenom" type="text"><br><br>
    <span>Email:</span>
        <input placeholder="Entrez votre email" name="email" type="text"><br><br>
        <button name="buts">valider</button>
    </form>
<?php
    




if(isset($_POST["buts"])){
    $con=mysqli_connect('127.0.0.1','root','','inscription') or die(mysqli_error($con)); 
    extract($_POST);
    $query= "INSERT INTO utilisateur VALUES('$nom','$prenom','$email')";
    mysqli_query($con,$query) or die(mysqli_error($con));
    header("location:affich.php");
}
?>    







</body>
</html>