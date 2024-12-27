<?php
    // Inclusion de la configuration de la base de données
    include 'config/config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Récupérer les données envoyées en POST
        $visitor_name = $_POST['visitor_name'];
        $review = $_POST['review'];

        try {
            // Préparer et exécuter la requête d'insertion
            $stmt = $pdo->prepare("INSERT INTO reviews (visitor_name, review) VALUES (:visitor_name, :review)");
            $stmt->bindParam(':visitor_name', $visitor_name);
            $stmt->bindParam(':review', $review);
            $stmt->execute();

            // Répondre avec un succès
            echo 'success';
        } catch (PDOException $e) {
            echo 'error';
        }
    }
?>
