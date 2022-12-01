<?php
echo('Merci ' . $_POST['prénom'] . ' ' . $_POST['nom'] . ' de nous avoir contacté à propos de “' . $_POST['sujet'] . '”.');

echo('Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['e-mail'] . ' ou par téléphone au ' . $_POST['téléphone'] . ' dans les plus brefs délais pour traiter votre demande : ');

echo($_POST['message']);
?>