
<?php
require("components/header.php");;
include("components/carrousel.php"); //pour afficher le carrousel
//pour afficher les ellements dans le contenue article qui provienne de la bonne catégorie
include("config/config.php");
// Connexion à la base de données
$bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$utilisateur,$mot_de_passe);

$id_categorie = $_GET["id"];
$requete = 'SELECT COUNT(*) FROM article WHERE id_categorie = :id_categorie';
$resultats = $bdd->prepare($requete);
$resultats->execute(array('id_categorie' => $id_categorie));
$nbarticle = $resultats->fetchColumn();
$resultats->closeCursor();

$requete = 'SELECT id_article,nom_article,image FROM article WHERE id_categorie = :id_categorie'; 
$resultats = $bdd->prepare($requete);
$resultats->execute(array('id_categorie' => $id_categorie));
$tableaucategorie = $resultats->fetchAll();
$resultats->closeCursor();

$requete = 'SELECT * FROM fiche_client'; 
$resultats = $bdd->query($requete);
$tableauclient = $resultats->fetchAll();
$resultats->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr"> 
<head> 
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <ul>
        <?php
        for($i = 0; $i < $nbarticle; $i++){
            echo '<li><a href="acheter.php?id='.$tableaucategorie[$i]["id_article"].'">'.$tableaucategorie[$i]["nom_article"].'</a></li>'."\n" ;
        }
        ?>
    </ul>
    <?php
    $imagesArray = array();

    for($i = 0; $i < $nbarticle; $i++){
        // new array append with the image of the article
        $imagePath = 'image_boutique/'.$tableaucategorie[$i]["image"];

        array_push($imagesArray, $imagePath);

        // echo '<a href="acheter.php?id='.$tableaucategorie[$i]["id_article"].'"><img class="img-zoom img-cap" src="image_boutique/'.$tableaucategorie[$i]["image"].'"></a>'."\n";
        }


        echo '<section class="section">';
        carrousel($imagesArray, "id=1");
        echo '</section>';
        ?>
    <?php require("components/footer.php"); ?>
</body>
</html>