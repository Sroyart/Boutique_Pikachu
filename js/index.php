<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/burger.css">
    <title>Boutique Pikachu</title>
</head>
<body>
    <!-- Inclusion du header -->
    <?php require("header.php"); ?>

    <?php
     include("config/config.php");
     // Connexion à la base de données
     $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$utilisateur,$mot_de_passe);
     
    // Récupération du nombre de catégories
    $requete='SELECT COUNT(*) FROM categorie;';
    $resultats = $bdd->query($requete);
    $nbcategorie = $resultats->fetch();
    $resultats->closeCursor();

    // Récupération de toutes les catégories
    $requete = 'SELECT * FROM categorie';
    $resultats = $bdd->query($requete);
    $tableaucategorie = $resultats->fetchAll();
    $resultats->closeCursor();
    ?>

    <ul>
        <?php
        // Boucle pour afficher chaque catégorie dans une balise li
        for ($i = 0; $i < $nbcategorie[0]; $i++){
            echo '<li><a href="article.php?id=' . $tableaucategorie[$i]["id_categorie"] . '">' . $tableaucategorie[$i]["nom"] . '</a></li>' . "\n";
        }
        ?>
    </ul>
    <div>
        <button class="carrousel_left"><</button>
        <button  class="carrousel_right">></button>
        <div class="album_pic">
   <img src="image_boutique/affiche_décoration.png" id="track_art" alt="cover image" />    </div>
    </div>
    
    <?php require("footer.php"); ?>

</body>

</html>

<script type=" text/javascript" src="js/carrousel.js"></script>
