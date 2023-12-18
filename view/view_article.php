<h1>Ajout d'un article dans la base de donnée</h1>

<form action="index.php" method="POST">
        <input type="text" name="nom_article" placeholder="nom de l'article">
        <input type="number" step="0.01" name="prix_article" placeholder="prix de l'article">
        <input type="submit" name="submit">
</form>

<p><?php echo $message ?></p>

<p><?php echo $afficherTicket ?></p>