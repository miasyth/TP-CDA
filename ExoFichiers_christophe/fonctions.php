<?php

function saveToArray($filename = '', $delimiter = '', &$donnees)
{

    if (!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $donnees = array();
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
            if (!$header)
                $header = $row;
            else
                $donnees[] = array_combine($header, $row);
        }
        fclose($handle);
    }
    unlink($filename);
}

function replaceId(&$donnees)
{
    $cptId = 1;
    foreach ($donnees as $keys => $donnee) {
        foreach ($donnee as $key => $value) {
            if ($key == 'id') {
                $donnees[$keys]["id"] = str_pad($cptId, 6, 0, STR_PAD_LEFT);
                $cptId++;
            }
        }
    }
}

function arrayToSave($filename = '', &$donnees, $header = array())
{
    $fp = fopen($filename, "w");
    fputcsv($fp, $header, ",", "\t");
    foreach ($donnees as $keys => $row) {
        foreach ($row as $key => $value) {
            if ($key == "id" && $keys == 0) {
                fwrite($fp, $value . ",");
            } elseif ($key == "id") {
                fwrite($fp, "\n" . $value . ",");
            } elseif (preg_match("#adresse#", $key) && $key != "adressePays") {
                fwrite($fp, $value . "|");
            } elseif ($key == "adressePays") {
                fwrite($fp, $value);
            } else {
                fwrite($fp, $value . ",");
            }
        }
    }
    fclose($fp);
}
