<!DOCTYPE html>
<html lang="fr"> 
<head> 
    <meta charset="UTF-8">
    <title>Ajout d'un article</title> <!-- Ajout du titre de la page -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <?php
    include("config/config.php");
    // Connexion à la base de données
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$utilisateur,$mot_de_passe);

    // Récupération des données du formulaire
    $titre=htmlspecialchars($_POST["titre"]); // échappement des caractères spéciaux
    $prix=$_POST["prix"];
    $categorie=$_POST["categorie"] ;

    // ajout d'un article dans la base de données
    $requete_preparee= $bdd->prepare('INSERT INTO article(id_article,prix_article,nom_article,id_categorie) VALUES (NULL,:prix,:titre,:categorie)');
    $requete_preparee->bindParam(':prix', $prix) ;
    $requete_preparee->bindParam(':titre', $titre);
    $requete_preparee->bindParam(':categorie',$categorie);
    $res=$requete_preparee->execute();

    header('Location: admin.php');
    exit();
    ?>
    <?php require("components/footer.php"); ?>
</body>
</html>
