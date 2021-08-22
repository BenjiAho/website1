<?php
    

        // servername => localhost
            // username => babook
            // password => campusnum
            // database name => exo1
            $BDD = new PDO('mysql:host=localhost:3306; dbname=exo1', "babook", "campusnum");
            
            if (isset($_POST['name']) && isset($_POST['photo']) && isset($_POST['prix']) && isset($_POST['description'])){

                try{
                    $article = $BDD->prepare('INSERT INTO add_article(name, photo, prix, description) VALUES(?, ?, ?, ?)');
                    $article->execute(array(($_POST['name']), ($_POST['photo']), $_POST['prix'], $_POST['description']));
                }
                catch(PDOException $e){
                    echo 'Impossible de traiter les données!' .$e->getMessage();
                }
            }
            
            $affiche_article = $BDD->query('SELECT * FROM add_article');
                while ($donnee = $affiche_article->fetch() ) {
                    echo '<div class="contain_catalogue"><div class="photo_article"><a href ="index.php?page=article&idArticle='.$donnee['name'].'"><img class="img" src="'.$donnee['photo'].'"/></a></div><div id="texte_description"><h2 class="donnee_name">'.$donnee['name'],'</h2><div class="donnee_description">', $donnee['description'], '</div><div class="control"><button class="btn"><span class="price">'.$donnee['prix'],'€<span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></span><span class="buy">Ajouter</span></div></button></div></div>';
                }

            // <!-- <button class="btn">
	        //     <span class="price">$250</span>
            //      <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
            //     <span class="buy">Get now</span>
            // </button> -->

    include 'footer.php';
?>

