<?php
// Inclusion de la configuration de la base de données MongoDB
include 'config/config_nosql.php'; // Assurez-vous que ce fichier contient la configuration MongoDB

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données envoyées en POST
    $visitor_name = $_POST['visitor_name'];
    $review = $_POST['review'];

    try {
        // Créer un tableau de données à insérer
        $data = [
            'visitor_name' => $visitor_name,
            'review' => $review,
            'is_validated' => 0, // Par défaut, les avis sont non validés
            'created_at' => new MongoDB\BSON\UTCDateTime(), // Timestamp pour la date de création
        ];

        // Insérer le document dans la collection "reviews" de MongoDB
        $result = $collection->insertOne($data);

        // Vérifier si l'insertion a réussi
        if ($result->getInsertedCount() > 0) {
            echo 'success'; // Retourner un message de succès
        } else {
            echo 'error'; // Retourner un message d'erreur
        }
    } catch (MongoDB\Driver\Exception\Exception $e) {
        // Retourner l'erreur spécifique si quelque chose échoue
        echo 'error: ' . $e->getMessage(); // Retourner l'erreur MongoDB
    }
}
?>
