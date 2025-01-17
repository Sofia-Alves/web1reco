<?php
// includes 
require './classes/Formulaires.php';
require './assets/config.php';
// instanciate class
$formulaire = new Formulaire();// TODO change the name for the first formulaire


$sql = "SELECT id, nom, descriptions,Categorie_id,source FROM base1reco.produits";

// Exécution de la requête de sélection
$resultat = $dbh->query($sql);
$les_produits = $resultat->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive Service</title>
    <link href="./assets/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
</head>

<body>
    <?php
    
        foreach ($les_produits as $produit) {
            echo "  <div class='card product_card'>
                        <img class='card-img-top' alt='photo produit' src='./images/produits/".$produit['Categorie_id']."/".$produit['source']'>
                        <div class='card-body'>
                            <h5 class='card-title'>".$produit['nom']."</h5>
                            <p class='card-text'>".$produit['descriptions']."</p>
                            <button class='btn btn-primary'>Add to Cart</button>
                        </div>
                    </div>";
        }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

</body>

</html>