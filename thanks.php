<?php
session_start();

$message= "merci" . $_POST['LastName'] . " " . $_POST['FirstName'] . " de nous avoir contacté à propos de " . $_POST['Sujet'] . "." . "</br>" . "Un de nos conseiller vous contactera soit à l'adresse " . $_POST['E-Mail'] . "ou par téléphone au " . $_POST['NumberPhone'] . " dans les plus brefs délais pour traiter votre demande : " . $_POST['message'];

echo $message;