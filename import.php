<?php
// Connexion MySQL
$pdo = new PDO('mysql:host=localhost;dbname=maplus', 'root', '');

// Récupérer les données de la table "reviews"
$query = $pdo->query("SELECT * FROM reviews");
$rows = $query->fetchAll(PDO::FETCH_ASSOC);

// Convertir les données en JSON
$jsonData = json_encode($rows, JSON_PRETTY_PRINT);
file_put_contents('reviews.json', $jsonData);

// Connexion MongoDB
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new MongoDB\Driver\BulkWrite;

// Ajouter les documents dans MongoDB
foreach ($rows as $row) {
    $bulk->insert($row);
}

// Effectuer l'insertion
$manager->executeBulkWrite('maplus.reviews', $bulk);

echo "Données exportées de MySQL et importées dans MongoDB avec succès.";
?>
