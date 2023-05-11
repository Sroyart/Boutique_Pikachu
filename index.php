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
    <?php require("components/header.php"); ?>
    <?php include("components/carrousel.php"); ?>

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

    <div>
        <ul class="space-evenly">
            <?php
            // Boucle pour afficher chaque catégorie dans une balise li
            for ($i = 0; $i < $nbcategorie[0]; $i++){
                echo '<li class="rectangle-background center"><a href="article.php?id=' . $tableaucategorie[$i]["id_categorie"] . '">' . $tableaucategorie[$i]["nom"] . '</a></li>' . "\n";
            }
            ?>
        </ul>
        </div>

    <?php 
    $images = array(
        "image_boutique/affiche_décoration.png",
        "image_boutique/affiche_vetement.png",
        "image_boutique/auto_collant_pikachu.jpg",
    );
    
    echo '<section class="section">';
    carrousel($images);
    echo '</section>';
    ?>

    
    <?php require("components/footer.php"); ?>

</body>

</html>

