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
$requete='SELECT * FROM categorie ';
$resultats = $bdd->query($requete) ;

// Récupération des résultats de la requête dans un tableau
$tableaucategorie=$resultats->fetchAll() ;

// Fermeture de la connexion à la base de données
$resultats->closeCursor() ;

?>

<script>function toggle_dark_mode() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}
</script>


<nav>
<button onclick="toggle_dark_mode()">Toggle dark mode</button>
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="admin.php">Page Admin</a></li>
        <li class="dropdown">
            <div class="dropdown-content">
                <!-- Liens vers les pages des différentes catégories -->
                <?php
                // Boucle pour afficher chaque catégorie dans le menu déroulant
                foreach ($tableaucategorie as $categorie) {
                    echo '<a href="article.php?id=' . $categorie["id_categorie"] . '">' . $categorie["nom"] . '</a>'."\n";
                }
                ?>
            </div>
        </li>
        <li>
            <!-- Menu déroulant pour sélectionner un client -->
            <form action="client.php" method="get">
                <label for="selectionneclient">Qui etes vous:</label>
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
    <div class="header-nav" data-visible="false">
        <nav class="nav">
                <div class="menu-btn">
                    <svg viewBox="0 0 100 80" width="40" height="40">
  <rect width="100" height="20"></rect>
  <rect y="30" width="100" height="20"></rect>
  <rect y="60" width="100" height="20"></rect>
</svg>
                </div>
            <ul class="nav-list burger">
                <li class="nav__list_item" style="margin-left: 0px;"><a class="nav__link" href="#">Test test test test test</a></li>
                <li class="nav__list_item" style="margin-left: 0px;"><a class="nav__link" href="#">Test</a></li>
                <li class="nav__list_item"  style="margin-left: 0px;"><a class="nav__link" href="#">Test</a></li>
                <li class="nav__list_item"  style="margin-left: 0px;"><a class="nav__link" href="#">Test</a></li>
            </ul>
        </nav>
    </div>
</nav>

<script type="text/javascript" src="js/script.js"></script>
