<?php
$con= mysqli_connect("127.0.0.1","root","","inscription") or die(mysqli_error($con));
$query= "SELECT * from utilisateur";
$result= mysqli_query($con,$query) or die(mysqli_error($con));
$rows= mysqli_fetch_all($result,MYSQLI_ASSOC);




?>

<?php foreach($rows as $row){ ?>
    <br>
    names: <?=  $row["Nom_utilisateur"]?><br><br>
    prenoms: <?php echo $row["Prenom_utilisateur"]?><br><br>
    emails: <?php echo $row["email_utilisateur"]?><br><br>
    ___________________________________________________________ <br>
    <?php } ?> 