<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Information client</title>
  </head>
  <body>
    <?php
      require("components/header.php");;
      
      include("config/config.php");
// Connexion à la base de données
$bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$utilisateur,$mot_de_passe);
      // Récupération des informations du client
      $requete = 'SELECT COUNT(*) FROM fiche_client WHERE id_client=' . $_GET["id"];
      $resultats = $bdd->query($requete);
      $nbclient = $resultats->fetch();
      $resultats->closeCursor();

      $requete = 'SELECT * FROM fiche_client WHERE id_client=' . $_GET["id"];
      $resultats = $bdd->query($requete);
      $tableauclient = $resultats->fetchAll();
      $resultats->closeCursor();

      // Affichage des informations du client si trouvé
      if (count($tableauclient) > 0) {
        echo "<h2>Information Client:</h2>";
        echo "<table>";
        foreach ($tableauclient as $client) {
          echo "<tr><td>nom:</td><td>" . $client["nom"] . "</td></tr>";
          echo "<tr><td>prenom:</td><td>" . $client["prenom"] . "</td></tr>";
          echo "<tr><td>date de naissance:</td><td>" . $client["date_de_naissance"] . "</td></tr>";
          echo "<tr><td>sexe:</td><td>" . $client["sexe"] . "</td></tr>";
          echo "<tr><td>adresse postal:</td><td>" . $client["adresse_postal"] . "</td></tr>";
          echo "<tr><td>adresse mail:</td><td>" . $client["adresse_mail"] . "</td></tr>";
        }
        echo "</table>";
      } else {
        echo "<p>Aucune fiche_client n'a été trouvée pour ce client.</p>";
      }

      // Récupération de l'historique de commande du client
      $requete = 'SELECT COUNT(*) FROM commande WHERE id_commande=' . $_GET["id"];
      $resultats = $bdd->query($requete);
      $nbcommande = $resultats->fetch();
      $resultats->closeCursor();

      $requete = 'SELECT * FROM commande WHERE id_commande=' . $_GET["id"];
      $resultats = $bdd->query($requete);
      $tableaucommande = $resultats->fetchAll();
      $resultats->closeCursor();

      // Affichage de l'historique de commande si trouvé
      if (count($tableaucommande) > 0) {
        echo "<h2>Historique de commande:</h2>";
        echo "<table>";
        foreach ($tableaucommande as $commande) {
          echo "<tr><td>Nombre de commande passé:</td><td>" . $commande["nombre_de_commande_passé"] . "</td></tr>";
          echo "<tr><td>Date de la derniere commande:</td><td>" . $commande["date_de_la_derniere"] . "</td></tr>";
          echo "<tr><td>Prix de la commande:</td><td>" . $commande["prix_de_la_derniere_commande"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p>Aucune commande trouvée pour ce client.</p>";
}
?>
<?php require("components/footer.php"); ?>
</body>
</html>