<?php
$input = 5;

//echo keterangan dan br(break row) untuk pemisah
echo "<br>Segitiga A, Input = $input<br>";
//deklarasi $horz = 1; jika $horz kurang dari sama dengan $input maka..; incrementkan $horz
for($horz = 1; $horz <= $input; $horz++){
    //deklarasi $vert = 1; jika $vert kurang dari sama dengan $horz..; incrementkan $vert
   for($vert = 1; $vert <= $horz; $vert++){
    //echo bintang asterik
        echo "*";
    }
    //echo br
    echo "<br>";
}


echo "<br>Segitiga B, Input = $input<br>";
for($horz = 1; $horz <= $input; $horz++){
    for($vert = $input; $vert >= $horz; $vert--){
        echo "*";
    }
    echo "<br>";
}


echo "<br>Segitiga C, Input = $input<br>";
for($horz = 1; $horz <= $input; $horz++){
    for($spasi = $input; $spasi >= $horz; $spasi--){
        echo "  &nbsp";
    }
    for($vert = 1; $vert <= $horz; $vert++){
        echo "*";
    }
    echo "<br> ";
}


echo "<br>Segitiga D, Input = $input<br>";
for($horz = 1; $horz <= $input; $horz++){
    for($spasi = 1; $spasi <= $horz; $spasi++){
        echo "  &nbsp";
    }
    for($vert = $input; $vert >= $horz; $vert--){
        echo "*";
    }
    echo "<br> ";
}

?>