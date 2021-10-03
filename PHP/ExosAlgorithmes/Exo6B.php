<?php

$t=['belle marquise ','vos beaux yeux ','me font mourir d\'amour '];
$count = count($t);
for($i=0;$i<$count+1;$i++){
    $x=$i;
    $y=$i+1;
    $z=$i+2;
    if($x>$count-1){
        $x=$x-$count;
    }
    if($y>$count-1){
        $y=$y-$count;
    }
    if($z>$count-1){
        $z=$z-$count;
    }
    if($i<$count){
        echo($t[$x].$t[$y].$t[$z]."\n");
    }
    if($i==$count){
        echo($t[$y].$t[$x].$t[$z]."\n");
    }
}

?>
