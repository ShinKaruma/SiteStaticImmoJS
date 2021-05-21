<?php

function connexionBDD() {
    $bdd = 'mysql:host=localhost;dbname=site_immo';
    $user = 'AP2Mission3';
    $password = 'master';

    try {

        $ObjConnexion = new PDO($bdd, $user, $password, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (PDOException $e) {

        echo $e->getMessage();
    }

    return $ObjConnexion;
}

function deconnexionBDD($cnx) {
    $cnx = null;
}

function connexionUser($objConnexion, $login, $passe) {
    $monObjPdoStatement = $objConnexion->prepare("select passe from utilisateur where login = :login");
    $bvc1 = $monObjPdoStatement->bindValue(':login', $login);

    var_dump($bvc1);

    $tab = $monObjPdoStatement->execute();
    $test = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement->closeCursor();


    if (sizeof($test) == 0) {
        return false;
    } else {
        $passe_hash = $test[0]['passe'];
        if (password_verify($passe, $passe_hash)) {
            return true;
        } else {
            return false;
        }
    }
}

function ajouterUser($objConnexion, $login, $passe) {
    $passe_hash = password_hash($passe, PASSWORD_DEFAULT);
    $monObjPdoStatement = $objConnexion->prepare("insert into utilisateur(login,passe) values(:login,:passe)");
    $bvc1 = $monObjPdoStatement->bindValue(':login', $login);
    $bvc2 = $monObjPdoStatement->bindValue(':passe', $passe_hash);

    var_dump($bvc1);
    var_dump($bvc2);


    $tab = $monObjPdoStatement->execute();
    $monObjPdoStatement->closeCursor();

    return $tab;
}

function droitsUser($objConnexion, $login) {
    $monObjPdoStatement = $objConnexion->prepare("select droits from utilisateur where login = :login");
    $bvc1 = $monObjPdoStatement->bindValue(':login', $login);
    var_dump($monObjPdoStatement);

    $tab = $monObjPdoStatement->execute();
    $droit = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement->closeCursor();

    var_dump($droit);
    return $droit[0]['droits'];
}

function checkUser($objConnexion, $login) {
    $monObjPdoStatement = $objConnexion->prepare("select count(*) from utilisateur where login = :login");
    $bvc1 = $monObjPdoStatement->bindValue(':login', $login);

    var_dump($bvc1);

    $tab = $monObjPdoStatement->execute();
    $test = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement->closeCursor();


    return $test[0]['count(*)'];
}

function ajoutBien($objConnexion, $IDb, $type, $jardin, $surface, $pieces, $prix, $ville, $adresse) {
    
    $monObjPdoStatement = $objConnexion->prepare("insert into bien('IDb', 'Type', 'Jardin', 'Taille', `NbPiece', 'Prix', 'Ville', 'Adresse') values(:id,:type,:jardin,:taille,:pieces,:prix,:ville,:adresse)");
    $bvc1 = $monObjPdoStatement->bindValue(':id', $IDb);
    $bvc2 = $monObjPdoStatement->bindValue(':type', $type);
    $bvc3 = $monObjPdoStatement->bindValue(':jardin', $jardin);
    $bvc4 = $monObjPdoStatement->bindValue(':taille', $surface);
    $bvc5 = $monObjPdoStatement->bindValue(':pieces', $pieces);
    $bvc6 = $monObjPdoStatement->bindValue(':prix', $prix);
    $bvc7 = $monObjPdoStatement->bindValue(':ville', $ville);
    $bvc8 = $monObjPdoStatement->bindValue(':adresse', $adresse);
    
    $tab = $monObjPdoStatement->execute();
    $monObjPdoStatement->closeCursor();
}

function ajoutImage($objConnexion,$nom ) {
    
    $monObjPdoStatement = $objConnexion->prepare("insert into images ('Images') values ($nom)");
    
    $tab = $monObjPdoStatement->execute();
    $monObjPdoStatement->closeCursor();
    
}

function getResult($objConnexion, $choice) {
    $monObjPdoStatement = $objConnexion->prepare("Select * From bien where idB = $choice");
    
    $executionOk = $monObjPdoStatement->execute();
    $result = $monObjPdoStatement->fetchAll();

    $monObjPdoStatement->closeCursor();
    return $result;
}

function getImage($objConnexion, $choice) {
    
    $monObjPdoStatement = $objConnexion->prepare("Select Images From images where idB = $choice");
    
    $executionOk = $monObjPdoStatement->execute();
    $result = $monObjPdoStatement->fetchAll();

    $monObjPdoStatement->closeCursor();
    
    return $result;
}
    

function modificationBien($IDb, $type, $desc, $jardin, $taille, $NbPiece, $Prix, $Ville, $Adresse) {
    $req = $bdd->prepare('UPDATE `bien` (`IDb`, `Type`, `Desc`, `Jardin`, `Taille`, `NbPiece`, `Prix`, `Ville`, `Adresse`)');
    $req->execute(array(
        'IDb' => $IDb,
        'Type' => $Type,
        'Desc' => $Desc,
        'Jardin' => $Jardin,
        'Taille' => $Taille,
        'NbPiece' => $NbPiece,
        'Prix' => $Prix,
        'Ville' => $Ville,
        'Adresse' => $Adresse,
    ));

    var_dump($bdd);

    echo 'Le bien a été modifié !';
}



function triBiens($objConnexion, $type, $jardin, $taille, $NbPiece, $PrixMini, $PrixMax, $Ville){
    $requete = "select Description, Jardin, Taille, NbPiece, Prix, Ville, Adresse from bien where Type = :type";
    if ($jardin != null) {$requete = $requete . " and Jardin = :jardin";}
    if ($taille != null) {$requete = $requete . " and Taille <= :taille";}
    if ($NbPiece != null) {$requete = $requete . " and NbPiece = :nbPiece";}
    if ($PrixMini != null) {$requete = $requete . " and Prix >= :prixMini";}
    if ($PrixMax != null) {$requete = $requete . " and Prix <= :prixMax";}
    if ($Ville != null) {$requete = $requete . " and Ville = :ville";}
    $monObjPdoStatement = $objConnexion->prepare($requete); 
    if ($type != null) {$bvc1 = $monObjPdoStatement->bindValue(':type', $type);}
    if ($jardin != null) {$bvc2 = $monObjPdoStatement->bindValue(':jardin', $jardin);}
    if ($taille != null) {$bvc3 = $monObjPdoStatement->bindValue(':taille', $taille);}
    if ($NbPiece != null) {$bvc4 = $monObjPdoStatement->bindValue(':nbPiece', $NbPiece);}
    if ($PrixMini != null) {$bvc5 = $monObjPdoStatement->bindValue(':prixMini', $PrixMini);}
    if ($PrixMax != null) {$bvc6 = $monObjPdoStatement->bindValue(':prixMax', $PrixMax);}
    if ($Ville != null) {$bvc7 = $monObjPdoStatement->bindValue(':ville', $Ville);}
    $executionOk = $monObjPdoStatement->execute();
    var_dump($monObjPdoStatement);
    $result = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement->closeCursor();
    return $result;
}


function selectionVilles($objConnexion){
    $requete = "select distinct Ville from bien";
    $monObjPdoStatement = $objConnexion->prepare($requete); 
    $executionOk = $monObjPdoStatement->execute();
    $result = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement->closeCursor();
    return $result;
}

function randomlink() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function changementMDP($objConnexion, $login, $mdp){
    $passe_hash = password_hash($mdp, PASSWORD_DEFAULT);
    $monObjPdoStatement = $objConnexion->prepare("UPDATE utilisateur SET 'passe'= :mdp where 'login' = :login");
    $bvc1 = $monObjPdoStatement->bindValue(':mdp', $passe_hash);
    $bvc2 = $monObjPdoStatement->bindValue(':login', $login);

    $tab = $monObjPdoStatement->execute();
    $monObjPdoStatement->closeCursor();

    return $tab;
}