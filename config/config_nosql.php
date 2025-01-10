<?php
require 'vendor/autoload.php'; // Charge le client MongoDB via Composer

// Configuration MongoDB
try {
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $db = $client->maplus; 
    $collection = $db->reviews;
} catch (Exception $e) {
    die("Erreur de connexion à MongoDB : " . $e->getMessage());
}
?>
