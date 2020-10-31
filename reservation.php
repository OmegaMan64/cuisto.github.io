<?php
    $host="localhost"; //Add your SQL Server host here
    $user="toto"; //SQL Username
    $pass="toto"; //SQL Password
    $dbname="reservation"; //SQL Database Name
    $con=mysqli_connect($host,$user,$pass,$dbname);
    if (mysqli_connect_errno($con))
    {
        echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() ."</h1>";
    }
    $date=$_POST['date'];
    $heure=$_POST['heure'];
    $nombre=$_POST['nombre'];
    $adult=$_POST['adult'];
    $kid=$_POST['kid'];
    $sql="INSERT INTO reservation(date, heure, nombre, adult, kid) VALUES('$date','$heure','$nombre','$adult','$kid')";
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error($con));
    }
    else
        echo "merci pour votre réservation";
    mysqli_close($con);
?>