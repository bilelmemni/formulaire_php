<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Résultat du Traitement</title>
</head>
<body>

    <h1>Résultat du Traitement</h1>

    <?php
    // Vérifier si des données ont été soumises
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $adresse = htmlspecialchars($_POST["adresse"]);
        $ville = htmlspecialchars($_POST["ville"]);
        $code_postal = htmlspecialchars($_POST["code_postal"]);

        // Afficher les données dans un tableau HTML
        echo "<table border='1'>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code Postal</th>
                </tr>
                <tr>
                    <td>$nom</td>
                    <td>$prenom</td>
                    <td>$adresse</td>
                    <td>$ville</td>
                    <td>$code_postal</td>
                </tr>
            </table>";
    } else {
        echo "<p>Aucune donnée soumise.</p>";
    }
    ?>

</body>
</html>
