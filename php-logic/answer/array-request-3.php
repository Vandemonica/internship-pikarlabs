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

        //hanya var handling agar tdk error ketika $_POST['cari'] kosong
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
if(isset($_POST["reset"])){
    //redirect ke file ini tanpa query $_GET
    header("location: array-request-3.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        th{
            border: 1px solid black;
            padding: 4px;
        }
        td{
            border: 1px solid black;
            padding: 4px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Request 1</title>
</head>
<body>
    <!-- jika $_GET['id'] isset(ada nilainya) -->
    <?php if(isset($_GET["id"])):?>
        <?php foreach($input as $inp => $val):?>
            <?php if($val["id"] == $_GET["id"]):?>

                <p> Profil siswa ID = <?=$val["id"];?> </p>

                <ul>
                    <li> ID : <?=$val["id"];?>       </li>
                    <li> Nama : <?=$val["nama"];?>   </li>
                    <li> Asal : <?=$val["asal"];?>   </li>
                </ul>

                <a href="array-request-3.php">Kembali</a>

            <?php endif;?>
        <?php endforeach;?>
    <!-- jika $_GET['cari'] atau $_GET['go'] isset(ada nilainya) -->
    <?php elseif(isset($_POST["cari"]) || isset($_POST["go"])):?>
        <form method="post">
            <input type="text" name="cari" placeholder="<?=$_POST['cari'];?>">
            <button type="submit" name="go">Cari</button>
            <button type="submit" name="reset">Reset</button>
        </form>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Link</th>
            </tr>
            <!-- panggil function -->
            <?php PencariSubstring($_POST["cari"], $input)?>
        </table>
    <?php else:?>
        <form method="post">
            <input type="text" name="cari" placeholder="Cari..">
            <button type="submit" name="go">Cari</button>
            <button type="submit" name="reset">Reset</button>
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