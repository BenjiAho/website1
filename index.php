<?php
    require 'functions.php';
    include 'header.php';

    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'accueil') {
            include 'main.php';
        }
        if ($_GET['page'] == 'catalogue') {
            include 'catalogue.php';
        }
        if ($_GET['page'] == 'article') {
            include 'article.php';
        }
        if ($_GET['page'] == 'form') {
            include 'form.php';
        }
    } else {
        include 'main.php';
    }


    include 'footer.php';
?>
