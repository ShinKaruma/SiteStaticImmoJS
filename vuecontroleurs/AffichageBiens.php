<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>info Appart1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
        
        <?php
        
        include_once '../modeles/mesFonctionsAccesAuxDonnees.php';
        
            $lePdo = connexionBDD();

            var_dump($lePdo);

            $statement = "Select * From bien";

            $resultat = getResult($lePdo, $statement);
            
            echo "Appartement 1 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[0]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[0]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[0]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[0]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[0]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[0]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[0]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[0]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Maison 1 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[1]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[1]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[1]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[1]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[1]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[1]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[1]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[1]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Maison 2 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[2]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[2]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[2]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[2]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[2]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[2]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[2]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[2]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Maison 3 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[3]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[3]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[3]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[3]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[3]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[3]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[3]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[3]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Maison 4 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[4]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[4]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[4]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[4]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[4]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[4]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[4]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[4]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Maison 5 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[5]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[5]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[5]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[5]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[5]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[5]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[5]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[5]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Appartement 2 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[6]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[6]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[6]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[6]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[6]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[6]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[6]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[6]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Appartement 3 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[7]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[7]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[7]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[7]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[7]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[7]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[7]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[7]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Appartement 4 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[8]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[8]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[8]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[8]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[8]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[8]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[8]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[8]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Appartement 5 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[9]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[9]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[9]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[9]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[9]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[9]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[9]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[9]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Appartement 6 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[10]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[10]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[10]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[10]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[10]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[10]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[10]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[10]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Appartement 7 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[11]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[11]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[11]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[11]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[11]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[11]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[11]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[11]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Immeuble 1 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[12]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[12]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[12]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[12]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[12]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[12]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[12]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[12]["Adresse"]);
            echo nl2br("\n") ;
            echo nl2br("\n") ;
            echo "Immeuble 2 :";
            echo nl2br("\n") ;
            echo "Id du bien :";
            echo($resultat[13]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[13]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[13]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[13]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[13]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[13]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[13]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[13]["Adresse"]);
        ?>
    </body>
</html>
