<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GIT ajout pays .json </title>
</head>

<body>

    <h1>Les pays</h1>

    <?php
    // ajouter le contenu du fichier library.php dans le fichier fruit.php
    require "library.php";
    $nomFichier = "pays.json";

    
    $pays = getData($nomFichier);
    /* si mon fichier n'existe pas alors je décide que pays est un tableau vide []*/

    if($pays === false) {
        $pays = ["Belgique","France"];
    }

    if (isset($_GET["pays"])) {
        
        $pay = $_GET["pays"];
   
        

        if(in_array($pay,$pays))
        {
            echo "Le pays  existe déjà dans le tableau !";
        }
        else{
            array_push($pays, $pay);
            saveData($pays, $nomFichier);
        }
    
    }
   
    ?>

    <form>
        <input type="text" name="pays" placeholder="Nom du pays">
        <input type="submit" value="Ajouter">
    </form>

</body>

</html>