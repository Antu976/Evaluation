<?php
function ticket($name,$prix,$bdd){
    try{
        $req=$bdd->prepare('INSERT INTO article nom_article, prix_article) VALUES(?,?)');
        $req->bindParam(1,$name,PDO::PARAM_STR);
        $req->bindParam(2,$prix,PDO::PARAM_STR);

        $req->execute();

        return "l'article du nom de $name, au prix de $prix à bien été ajouté.....";
    }catch(Exception $error){
        return $error->getMessage();
    }
        
}

function afficherTicket($bdd){
    try{
        $req=$bdd->prepare('SELECT article.id_article, article.nom_article, article.prix_article FROM article');

        $req->execute();

        $data=$req->fetchAll();

        return $data;
    }catch(Exception $error){
        return $error->getMessage();
    }
}

?>