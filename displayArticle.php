<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display article page</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <center>
        <?php
            include 'header.php';
        ?>
        <h1>Ajout d'article</h1>
        <?php
            // servername => localhost
            // username => babook
            // password => campusnum
            // database name => exo1
            $conn = mysqli_connect("localhost", "babook", "campusnum", "exo1");

             // Check connection
            if($conn === false){
                die("ERROR: Could not connect. " 
                    . mysqli_connect_error());
            }
            
            // Taking all 4 values from the form data(input)
            $name =  $_REQUEST['name'];
            $prix = $_REQUEST['prix'];
            $photo =  $_REQUEST['photo'];
            $description = $_REQUEST['description'];
            
            // Performing insert query execution
            // here our table name is college
            $sql = "INSERT INTO add_article  VALUES ('$name', 
            '$prix','$photo','$description')";
      
            if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully." 
                    . " Please browse your localhost php my admin" 
                    . " to view the updated data</h3>"; 

                echo nl2br("\n$name\n $prix\n "
                    . "$photo\n $description");
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
            
            // Close connection
            mysqli_close($conn);
    




            // echo '<img class=img src='.$_POST["photo"].'>',''.$_POST["name"].'</p>','<p>Prix :</p>','<p class=texte_ajout>'.$_POST["prix"]. '€','</p>',"<br>",'<p>'.$_POST["description"].'</p>',"<br>";
            

            include 'footer.php';
        ?>
    </center>
</body>
</html>