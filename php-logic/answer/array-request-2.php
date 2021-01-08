<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama', 'asal' => 'surabaya' ],
    [ 'id' => 227, 'nama' => 'renaldy', 'asal' => 'surabaya' ],
    [ 'id' => 423, 'nama' => 'fakhri', 'asal' => 'surabaya' ],
  ];




//buat function
function PencariSubstring($jarum, $tumpukanJerami){
    //loop array dari parameter
    foreach($tumpukanJerami as $val){

        //hanya var handling agar tdk error ketika $_GET['cari'] kosong
        if($jarum == null){
            $jarum = null;
        }
        //jika id/nama/asal dari tumpukan jerami cocok dengan jarum(ditemukan menggunakan function strpos), maka..
        if(strpos($val['id'], $jarum) !== false || strpos($val['nama'], $jarum) !== false || strpos($val['asal'], $jarum) !== false){
            //echo data-data
            echo "<tr>";
            echo "<td>".$val["id"]."</td>";
            echo "<td>".$val["nama"]."</td>";
            echo "<td>".$val["asal"]."</td>";
            echo "<td> <a href=?id=".$val['id'].">profil</a> </td>";
            echo "</tr>";
        }

    }
    
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
    <title>Array Request 1</title>
</head>
<body>
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
    <!-- jika $_GET['cari'] atau $_GET['go'] isset(ada nilainya) -->
    <?php elseif(isset($_GET["cari"]) || isset($_GET["go"])):?>
        <form method="get" class="cari">
            <input type="text" name="cari" placeholder="<?=$_GET["cari"];?>">
            <button type="submit" name="go" class="cari-Btn">Cari</button>
            <button type="submit" name="reset" class="reset-Btn">Reset</button>
        </form>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Link</th>
            </tr>
            <!-- panggil function -->
            <?php PencariSubstring($_GET["cari"], $input)?>
        </table>
    <?php else:?>
        <form method="get" class="cari">
            <input type="text" name="cari" placeholder="Cari..">
            <button type="submit" name="go" class="cari-Btn">Cari</button>
            <button type="submit" name="reset" class="reset-Btn">Reset</button>
        </form>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Link</th>
            </tr>
            <?php foreach($input as $key => $v):?>
            <tr>
                <td> <?=$v["id"];?>   </td>
                <td> <?=$v["nama"];?> </td>
                <td> <?=$v["asal"];?> </td>
                <td> <a href="?id=<?=$v['id'];?>"> profil </a> </td>
            </tr>
            <?php endforeach;?>
        </table>
    <?php endif;?>
</body>
</html>