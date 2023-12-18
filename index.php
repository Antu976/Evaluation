<?php
include("./model/model_article.php");
include("./utils/bdd.php");


$message ="";
$afficherTicket ="";
$name = "";
$prix ="";


if(isset($_POST['submit'])){
    if(isset($_POST['nom_article']) && !empty($_POST['nom_article']) 
        && isset($_POST['prix_article']) && !empty($_POST['prix_article'])){

        $name = htmlentities(strip_tags(trim($_POST['nom_article'])));
        $prix = htmlentities(strip_tags(trim($_POST['prix_article'])));

        
        $message = ticket($name,$prix,$bdd);

    }
    else {
    
            $message = 'il y a une erreur quelques part';
    }
}

$data = afficherTicket($bdd);
foreach($data as $article){
    $afficherTicket = $afficherTicket."<p>numéro de l'article : {$article['id_article']}</p>
    <p>nom de l'article : {$article['nom_article']}</p>
    <p>le prix que vaut l'article : {$article['prix_article']}</p>
    <br><br>";
}

include('./view/header.php');
include('./view/view_article.php');
include('./view/footer.php');
?>