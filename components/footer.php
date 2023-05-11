<?php
  include("config/config.php");
  // Connexion à la base de données
  $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$utilisateur,$mot_de_passe);
  
// Requête SQL pour récupérer toutes les fiches clients
$requete = 'SELECT * FROM fiche_client';
$resultats = $bdd->query($requete);

// Récupération des résultats de la requête dans un tableau
$tableauclient = $resultats->fetchAll();

// Fermeture de la connexion à la base de données
$resultats->closeCursor();

// Requête SQL pour récupérer toutes les catégories
$requete = 'SELECT * FROM categorie';
$resultats = $bdd->query($requete);

// Récupération des résultats de la requête dans un tableau
$tableaucategorie = $resultats->fetchAll();

// Fermeture de la connexion à la base de données
$resultats->closeCursor();

?>
    <footer>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="admin.php">Page Admin</a></li>
            <li class="dropdown">
                <div class="dropdown-content">
                    <!-- Liens vers les pages des différentes catégories -->
                    <?php
                    // Boucle pour afficher chaque catégorie dans le menu déroulant
                    foreach ($tableaucategorie as $categorie) {
                        echo '<a href="article.php?id=' . $categorie["id_categorie"] . '">' . $categorie["nom"] . '</a>' . "\n";
                    }
                    ?>
                </div>
            </li>
            <li>
                <!-- Menu déroulant pour sélectionner un client -->
                <form action="client.php" method="get">
                    <label for="selectionneclient">Qui êtes-vous :</label>
                    <select id="selectionneclient" name="id">
                        <?php
                        // Boucle pour afficher chaque client dans la liste déroulante
                        foreach ($tableauclient as $client) {
                            echo '<option value="' . $client["id_client"] . '">' . $client["nom"] . ' ' . $client["prenom"] . '</option>';
                        }
                        ?>
                    </select>
                    <input type="submit" value="Valider">
                </form>
            </li>
        </ul>
</footer>
