<?php
// connexion à la base de données PixUs
try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=PixUs;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

