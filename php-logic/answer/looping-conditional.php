<?php
$input = 5;

if( ($input % 2) == 0){
    echo "Masukkan input genap!";
    die;
}

//echo keterangan dan br(break row) untuk pemisah
echo "<br>Segitiga A, Input = $input<br>";
//deklarasi $horz = 1; jika $horz kurang dari sama dengan $input maka..; incrementkan $horz
for($horz=1; $horz <= $input; $horz++){
    //deklarasi $vert = 1; jika $vert kurang dari sama dengan $horz..; incrementkan $vert
   for($vert=1; $vert <= $horz; $vert++){
    //echo bintang asterik
        echo "*";
    }
    //echo br
    echo "<br>";
}


echo "<br>Segitiga B, Input = $input<br>";
for($horz=1; $horz <= $input; $horz++){
    for($vert=$input; $vert >= $horz; $vert--){
        echo "*";
    }
    echo "<br>";
}


echo "<br>Segitiga C, Input = $input<br>";
for($horz=1; $horz <= $input; $horz++){
    for($spasi=$input; $spasi >= $horz; $spasi--){
        echo " &nbsp";
    }
    for($vert=1; $vert <= $horz; $vert++){
        echo "*";
    }
    echo "<br> ";
}


echo "<br>Segitiga D, Input = $input<br>";
for($horz=1; $horz <= $input; $horz++){
    for($spasi=1; $spasi <= $horz; $spasi++){
        echo " &nbsp";
    }
    for($vert=$input; $vert >= $horz; $vert--){
        echo "*";
    }
    echo "<br> ";
}


echo "<br>Segitiga E, Input = $input<br>";
for($horz=1; $horz <= $input; $horz++){
    for($vert=1; $vert <= $horz%2; $vert++){
        for($left=0; $left <= $horz; $left++){
            echo " &nbsp";
        }
        for($right=$input; $right >= $horz; $right--){
            echo "*";
            echo "&nbsp ";
        }
    echo "<br>";
    }
}


echo "<br>Segitiga F , Input = $input<br>";
for($horz=1; $horz <= $input; $horz++){
    for($vert=1; $vert <= $horz%2; $vert++){
        for($left=$input; $left >= $horz; $left--){
            echo " &nbsp";
        }
        for($right=1; $right <= $horz; $right++){
            echo "*";
            echo "&nbsp ";
        }
    echo "<br>";
    }
}


echo "<br>Segitiga G, Input = $input<br>";
for($horz=1; $horz <= $input; $horz++){
    if($horz <= $input/2){
        for($vert=1; $vert <= $horz; $vert++){
            echo "*";
        }
    }
    elseif($horz >= $input/2){
        for($vert=$input; $vert >= $horz; $vert--){
            echo "*";
        }
    }
    if($horz != 1 && $horz != $input){
        echo "*";
    }
    echo "<br>";
}



echo "<br>Segitiga H, Input = $input<br>";
for($horz=1; $horz <= $input; $horz++){
    if($horz <= $input/2){
        for($spasi=$input; $spasi >= $horz; $spasi--){
            echo " &nbsp";
        }
        if($horz != 1){
            echo "*";
        }
        else{
            echo " &nbsp";
        }
        for($vert=1; $vert <= $horz; $vert++){
            echo "*";
        }
    }
    elseif($horz >= $input/2){
        for($spasi=1; $spasi <= $horz; $spasi++){
            echo " &nbsp";
        }
        if($horz != $input){
            echo "*";
        }
        else{
            echo " &nbsp";
        }
        for($vert=$input; $vert >= $horz; $vert--){
            echo "*";
        }
    }
    echo "<br>";
}

echo "<br><br><br>";