
<html>

    <?php
    
        if(isset($_POST['submit'])){
            $name=$_¨POST["name"];
            $prix=$_¨POST["prix"];
            $photo=$_¨POST["photo"];
            $description=$_¨POST["description"];
        }
    
    ?>

    <form class="form_article" action="index.php?page=catalogue" method="post">

        <p>
            <label for="Name">Nom de l'article :</label>
            <input type="text" name="name" id="Name" placeholder="Entrez appellation de l'article...">
        </p>
        <p>
            <label for="Prix">Prix :</label>
            <input type="number" name="prix" id="Prix" placeholder="Entrez appellation de l'article...">
        </p>
        <p>
            <label for="Photo">Photo de l'article :</label>
            <input type="url" name="photo" id="Photo" placeholder= "Entrez le lien URL de votre image">
        </p>
        <p>
            <label for="Name">Description de l'article:</label>
            <input type="text" name="description" id="Description" placeholder="Entrez la description de l'article">
        </p>

        <button type="submit" name="submit">Envoyer</button>

    </form>
</html>
