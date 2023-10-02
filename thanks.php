<?php

$user_firstname = $_POST['user_firstname'];
$lastName = $_POST['user_lastname'];
$mail = $_POST['user_mail'];
$phoneNumber = $_POST['phone_number'];
$option = $_POST['probleme'];
$message = $_POST['user_message'];


echo "Merci " . $user_firstname . " " . $lastName . " de nous avoir contacté à propos de " . $option . " . " . "<br>" .
"Un de nos conseillers vous contactera soit à l’adresse " . $mail . " ou par téléphone au " . $phoneNumber . " dans les plus brefs délais pour traiter votre demande :"; 

echo $message;

