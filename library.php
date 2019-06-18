<?php
/* 
    Fonction qui sauve les données dans un fichier au format json
    Retourne false si ne trouve pas le fichier
 */
    function saveData($data, $fileName)
    {
        $json = json_encode($data);
        $fichier = fopen($fileName, "w+");
        fwrite($fichier, $json);
        fclose($fichier);
    }


/*
    Fonction qui récupère les données d'un json dans une variable
    Retourne false si ne trouve pas le fichier
*/
function getData($fileName)
{
    $readable = false;

    if(file_exists($fileName))
    {
        $fichier = fopen($fileName, "r");
        $fileLength = filesize($fileName);
        $json = fread($fichier, $fileLength);
        $readable = json_decode($json);
    }
    return $readable;
}