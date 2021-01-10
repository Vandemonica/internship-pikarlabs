<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama', 'asal' => 'surabaya' ],
    [ 'id' => 227, 'nama' => 'renaldy', 'asal' => 'surabaya' ],
    [ 'id' => 423, 'nama' => 'fakhri', 'asal' => 'surabaya' ],
  ];





//buat function
function PencariSubstring($jarum, $tumpukanJerami){
    //deklarasi
    $terminate = false;
    $life = count($tumpukanJerami);
    $die = 0;

    //loop array dari parameter
    foreach($tumpukanJerami as $val){

        //var handling
        if( empty(trim($jarum)) ){
            $jarum = " ";
            PenampilTabel($tumpukanJerami);
            break;
        }

        //jika id/nama/asal dari tumpukan jerami cocok dengan jarum(ditemukan menggunakan function strpos), maka..
        if(strpos($val['id'], $jarum) !== false){
            //echo data-data
            echo "<tr>";
            echo "<td>".$val["id"]."</td>";
            echo "<td>".$val["nama"]."</td>";
            echo "<td>".$val["asal"]."</td>";
            echo "<td> <a href=?id=".$val['id'].">profil</a> </td>";
            echo "</tr>";
        }
        //jika data tidak cocok
        elseif(strpos($val['id'], $jarum) === false){
            $die++;
            //jika $die sama dengan $life maka...
            if($die == $life){
                $terminate = true;
            }
        }

    }
    //terminate true ketika data benar-benar tidak ditemukan $die == $life
    if($terminate == true){
        echo "<tr>";
            echo "<td colspan='4' class='data'>";
                echo "Tidak ada data yg cocok";
            echo "</td>";
        echo "</tr>";
    }
}



function PenampilTabel($array){
    foreach($array as $val){
        echo "<tr>";
            echo "<td>".$val["id"]."</td>";
            echo "<td>".$val["nama"]."</td>";
            echo "<td>".$val["asal"]."</td>";
            echo "<td> <a href=?id=".$val['id'].">profil</a> </td>";
        echo "</tr>";
    }
}

function HistoriSearch($getData){
    echo "<div class='search-Bar'>";
    echo "<p>";
        echo "Mencari siswa dengan ID: \"$getData\"";
    echo "</p>";
    echo "</div>";
}



//jika $_GET['reset'] isset(ada nilainya)
if(isset($_GET["reset"])){
    //redirect ke file ini tanpa query $_GET
    header("location: array-request-2.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_include/tabela.css">
    <title>Array Request 2</title>
</head>
<body>
    <form method="get" class="cari">
        <input type="text" name="cari" placeholder="Masukkan ID">
        <button type="submit" name="go" class="cari-Btn">Cari</button>
        <button type="submit" name="reset" class="reset-Btn">Reset</button>
    </form>
    <!-- jika $_GET['id'] isset(ada nilainya) -->
    <?php if(isset($_GET["id"])):?>
        <?php foreach($input as $inp => $val):?>
            <?php if($val["id"] == $_GET["id"]):?>
                <div class="data">
                    <p> Profil siswa ID = <?=$val["id"];?> </p>

                    <ul>
                        <li> ID : <?=$val["id"];?>       </li>
                        <li> Nama : <?=$val["nama"];?>   </li>
                        <li> Asal : <?=$val["asal"];?>   </li>
                    </ul>

                    <a href="array-request-2.php">Kembali</a>
                </div>
            <?php endif;?>
        <?php endforeach;?>
    <!-- Selain dari itu(id tidak isset) -->
    <?php else:?>
        <table>
            <!-- untuk label history pencarian -->
            <?php
                if(isset($_GET["cari"])){
                    HistoriSearch($_GET["cari"]);
                }
                else{
                    echo "<div class='search-Bar'>";
                    echo "</div>";
                }
            ?>

            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Profil</th>
            </tr>

            <!-- tabel yg ditampilkan -->
            <?php
            if(isset($_GET["cari"]) || isset($_GET["go"])){
                PencariSubstring($_GET["cari"], $input);
            }
            else{
                PenampilTabel($input);
            }
            ?>
        </table>
    <?php endif;?>
</body>
</html>