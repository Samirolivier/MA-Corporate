<?php
// Inclusion du fichier de configuration
include 'config/config.php';

try {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $nom_entreprise = $_POST['nom_entreprise'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $detail_demande = $_POST['detail_demande'];

    // Vérification des données obligatoires
    if (empty($nom) || empty($prenom) || empty($email) || empty($telephone) || empty($detail_demande)) {
        throw new Exception("Veuillez remplir tous les champs obligatoires.");
    }

    // Préparation de la requête SQL
    $sql = "INSERT INTO devis (nom, prenom, nom_entreprise, email, telephone, detail_demande, created_at, is_read)
            VALUES (:nom, :prenom, :nom_entreprise, :email, :telephone, :detail_demande, NOW(), 0)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':nom_entreprise' => $nom_entreprise,
        ':email' => $email,
        ':telephone' => $telephone,
        ':detail_demande' => $detail_demande
    ]);

    // Redirection après succès
    header("Location: devis.php?success=1");
    exit;
} catch (Exception $e) {
    // Gestion des erreurs
    header("Location: devis.php?error=" . urlencode($e->getMessage()));
    exit;
}
?>
