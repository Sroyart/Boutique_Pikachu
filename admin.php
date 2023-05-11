<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout d'un article</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- Inclusion de l'en-tête -->
    <?php require("components/header.php");; 
     include("config/config.php");
     // Connexion à la base de données
     $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$utilisateur,$mot_de_passe);
     ?>
    

    <!-- Formulaire d'ajout d'un article -->
    <h2>Ajout d'un article</h2>
    <form action="ajouter_un_article.php" method="POST">
        <p>
            <!-- Champ pour le nom de l'article -->
            <label for="titre">Nom de l'article :</label>
            <input type="text" id="titre" name="titre" required="required" />
        </p>
        <p>
            <!-- Champ pour le prix de l'article -->
            <label for="prix">Prix :</label>
            <input type="text" id="prix" name="prix" required="required" />
        </p>
        <p>
            <!-- Liste déroulante pour la catégorie de l'article -->
            <label for="categorie">Catégorie :</label>
            <select id="categorie" name="categorie" required="required">
                <option value="1">Déco</option>
                <option value="2">Vêtement</option>
            </select>
        </p>
        <input type="submit" value="Ajouter l'article"/>
    </form>
    <?php require("components/footer.php"); ?>
</body>
</html>

