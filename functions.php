<?php


    //afficher l'article
    function afficheA($article_info)
    {
        $affiche_article = 'SELECT * FROM add_article';
        

        foreach ($affiche_article as $donnee){
            if ($article_info == $donnee['id'] ) {
                    echo '<div class="contain_catalogue"><div class="photo_article"><a href ="index.php?page=article&idArticle='.$donnee['name'].'"><img class="img" src="'.$donnee['photo'].'"/></a></div><div id="texte_description"><h2 class="donnee_name">'.$donnee['name'],'</h2><div class="donnee_description">', $donnee['description'], '</div><div class="control"><button class="btn"><span class="price">'.$donnee['prix'],'€<span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></span><span class="buy">Ajouter</span></div></button></div></div>';
                }
        }
    }
        // foreach ($liste_article as $liste_articles) {
        //     if ($article_info == $liste_articles['id']) {
        //         echo '<div class="contain">', '<img class="img" src="' . $liste_articles['photo'] . '" />' . "\n", $liste_articles['nom'], $liste_articles['prix'], '</div>';
        //     }
        // } 

        //  $liste_article = [

        //     [
        //         'id' => 1,
        //         'photo' => "https://images.rtl.fr/~c/2000v2000/rtl/www/1175668-confinement-gilbert-montagne-propose-une-version-arrangee-de-viens-danser.jpg",
        //         'nom' => "<p>Gilbert Montagné</p> ",
        //         'prix' => "<p>25000€</p>"
        //     ],
        //     [
        //         'id' => 2,
        //         'photo' => "https://resize-gulli.jnsmedia.fr/r/890,__ym__/img//var/jeunesse/storage/images/gulli/chaine-tv/dessins-animes/pokemon/pokemon/pikachu/26571681-1-fre-FR/Pikachu.jpg ",
        //         'nom' => "<p>Pikachu!</p> ",
        //         'prix' => "<p>999 999€</p>"    
        //     ],
        //     [
        //         'id' => 3,
        //         'photo' => "https://data.topquizz.com/distant/question/big/5/7/7/4/614775_59430f23f3.jpg",
        //         'nom' => "<p>Lapin spécial</p>",
        //         'prix' => "<p>0.99€</p>" 
        //     ]
            
        //     ];
?>