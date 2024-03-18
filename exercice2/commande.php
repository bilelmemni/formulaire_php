<?php
// Prix unitaires des articles
$prix_unitaires = array(
    "huile" => 10.50,
    "pneu" => 100.00,
    "bougie" => 2.30
);

// Récupération des données du formulaire
$title = $_GET['title'];
$name = $_GET['name'];
$item1 = $_GET['item1'];
$quantity1 = $_GET['quantity1'];
$item2 = $_GET['item2'];
$quantity2 = $_GET['quantity2'];
$item3 = $_GET['item3'];
$quantity3 = $_GET['quantity3'];

// Calcul du total hors taxe (THT)
$total_ht = ($prix_unitaires['huile'] * $quantity1) + ($prix_unitaires['pneu'] * $quantity2) + ($prix_unitaires['bougie'] * $quantity3);

// Calcul de la TVA (17%)
$tva = $total_ht * 0.17;

// Calcul du total tous taxes compris (TTTC)
$total_ttc = $total_ht + $tva;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande en ligne</title>
</head>
<body>
    <form action="confcmd.php" method="post">
        <h1>Commande en ligne</h1>
        <p>à <?php echo $title; ?> <?php echo $name; ?></p>
        <p>Votre commande :</p>
        <table>
            <tr>
                <th>Article</th>
                <th>Quantité</th>
                <th>Prix</th>
            </tr>
            <tr>
                <td>huiles</td>
                <td><input type="number" id="huile" name="huile" value="<?php echo $quantity1; ?>" readonly></td>
                <td><input type="number" id="huile_price" name="huile_price" value="<?php echo $prix_unitaires['huile']; ?>" readonly></td>
            </tr>
            <tr>
                <td>pneus</td>
                <td><input type="number" id="pneu" name="pneu" value="<?php echo $quantity2; ?>" readonly></td>
                <td><input type="number" id="pneu_price" name="pneu_price" value="<?php echo $prix_unitaires['pneu']; ?>"

