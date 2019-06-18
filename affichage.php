<?php 
require "library.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
        $filename = "pays.json";
        $pays = getData($filename);
        if($pays)
        {
            for ($i=0; $i < count($pays); $i++) 
            { 
                echo "<li>".$pays[$i]."</li>";
            }
        }
        else
        {
            echo "<p>Erreur</p>";
        }


    ?>
    </ul>
</body>
</html>