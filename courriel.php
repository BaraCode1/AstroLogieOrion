<?php

$nom=$_POST['nom'];
$courriel=$_POST['courriel'];
$text=$_POST['textArea'];

$to="bdiouf1986@gmail.com";
$subject = "Mail from Customers";
$txt="Name = ".$nom."\r\nEmail=".$courriel."\r\nMessage= ".$text;


   mail($to,$subject,$txt);
    echo '<script> alert("email envoyé")</script>';
?>

