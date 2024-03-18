<?php
try {
    // Paramètres de connexion
    $serveur = "FILMS";
    $utilisateur = "votre_utilisateur"; // Remplacez par le nom d'utilisateur de votre base de données
    $motDePasse = "votre_mot_de_passe"; // Remplacez par le mot de passe de votre base de données

    // Connexion à la base de données avec PDO
    $bdd = new PDO("mysql:host=$serveur;dbname=BDD_films", $utilisateur, $motDePasse);

    // Définir le mode d'erreur PDO sur Exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussie !";
} catch (PDOException $e) {
    // En cas d'erreur, afficher le message d'erreur
    echo "Erreur de connexion : " . $e->getMessage();
}
?>