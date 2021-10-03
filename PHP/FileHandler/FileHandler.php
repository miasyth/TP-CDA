<?php

/*
$myfile=fopen("text.txt", "r") or die("unable to open file!"); // open file

fread($myfile, filesize("text.txt")); // read file

fclose($myfile); // close file
*/

/*
$myfile=fopen("text.txt", "r") or die("unable to open file!"); // open file

while (!feof($myfile)){ // reads file
    echo(fgets($myfile));
}
fclose($myfile); // close file
*/

/*
$myfile=fopen("text.txt", "w") or die("unable to open file!"); // open file

$fullName="Corentin Fouquet";

fwrite($myfile, $fullName.PHP_EOL); // write 2nd parameter in file and passes a line

$fullName="Amy Lee";

fwrite($myfile, $fullName); // write 2nd parameter in file

fclose($myfile); // close file
*/

/*
$res=fopen("text.txt", "r") or die("unable to open file!"); // open file
while (!feof($res)) {
    echo("Le pointeur est au niveau du caractère ".ftell($res)."\n");
    $ligne=fgets($res);
    echo('La ligne '.trim($ligne).' contient '.strlen($ligne)." caractères \n\n");
}
*/

/*
$res=fopen("text.txt", "rb"); // open file
echo('Le pointeur est derrière le caractère '.ftell($res).PHP_EOL);
echo('Le caractère '.(ftell($res)+1).' est un '.fgetc($res).PHP_EOL);
echo('Le pointeur est derrière le caractère '.ftell($res).PHP_EOL);
fseek($res,20);
echo('Le pointeur est derrière le caractère '.ftell($res).PHP_EOL);
echo('Le caractère '.(ftell($res)+1).' est un '.fgetc($res).PHP_EOL);
echo('Le pointeur est derrière le caractère '.ftell($res).PHP_EOL);
fseek($res,40,SEEK_CUR);
echo('Le pointeur est derrière le caractère '.ftell($res).PHP_EOL);
echo('Le caractère '.(ftell($res)+1).' est un '.fgetc($res).PHP_EOL);
*/

/*
$TabFich=[0,1,2];
$Fichier="text.txt";
if(is_file($Fichier)){
    for($i=0;$i<count($TabFich);$i++){
        echo($TabFich[$i]);
    }
} else {
    echo("Le fichier ne peut être lu...<br>");
}
*/

$list=array(
    array('aaa', 'bbb', 'ccc', 'dddd'),
   array('123', '456', '789'),
   array('aaa', 'bbb')
);

$fp = fopen('test.txt', 'w+');

foreach ($list as $fields) { 
    fputcsv($fp, $fields,";");
}

fclose($fp);

?>