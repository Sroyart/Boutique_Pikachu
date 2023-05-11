<!DOCTYPE html>
<html lang="fr"> 
<head> 
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <?php
    include("config/config.php");
    // Connexion à la base de données
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$utilisateur,$mot_de_passe);
    require("components/header.php");;

    // Récupération du nombre d'articles correspondant à l'ID
    $requete = 'SELECT COUNT(*) FROM article WHERE id_article LIKE '.$_GET["id"]; ;
    $resultats = $bdd->query($requete) ;
    $nbarticle = $resultats->fetch() ;
    $resultats->closeCursor() ;

    // Récupération du nom et du prix de l'article correspondant à l'ID
    $requete = 'SELECT nom_article, prix_article, image FROM article WHERE id_article LIKE '.$_GET["id"]; 
    $resultats = $bdd->query($requete) ;
    $tableauarticle = $resultats->fetchAll() ;
    $resultats->closeCursor() ;
    ?>

    <ul>
        <li><?php echo "Nom: ".$tableauarticle[0]["nom_article"]; ?></li>
        <li><?php echo "Prix: ".$tableauarticle[0]["prix_article"]; ?> €</li>
        <li><?php echo "<img class='img-zoom img-cap img-rotate' src='./image_boutique/".$tableauarticle[0]["image"]."'"; ?> </li>
        
        
    </ul>
    <?php require("components/footer.php"); ?>


    <script>
        document.getElementsByClassName('img-rotate')[0].addEventListener('click', function() {
            this.classList.toggle('active');
        });
    </script>
</body>
</html>
    