<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama', 'asal' => 'surabaya' ],
    [ 'id' => 227, 'nama' => 'renaldy', 'asal' => 'surabaya' ],
    [ 'id' => 423, 'nama' => 'fakhri', 'asal' => 'surabaya' ],
  ];

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

                    <a href="array-request-1.php">Kembali</a>
                </div>
            <?php endif;?>
        <?php endforeach;?>
    <?php else:?>
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