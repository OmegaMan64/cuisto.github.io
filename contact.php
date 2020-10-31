<?php
    $host="localhost"; //Add your SQL Server host here
    $user="toto"; //SQL Username
    $pass="toto"; //SQL Password
    $dbname="contact"; //SQL Database Name
    $con=mysqli_connect($host,$user,$pass,$dbname);
    if (mysqli_connect_errno($con))
    {
        echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() ."</h1>";
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $mobile=$_POST['mobile'];
    $adresse=$_POST['adresse'];
    $sql="INSERT INTO contact(name, email, tel, mobile, adresse) VALUES('$name','$email','$tel','$mobile','$adresse')";
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error($con));
    }
    else
        echo "Vos informations sont bien enregistrer";
    mysqli_close($con);
?>