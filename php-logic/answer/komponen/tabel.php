<table>

    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Asal</th>
        <th>Link</th>
    </tr>

    <?php if( !empty($array) ):?>
        <?php foreach($array as $data):?>

            <tr>
                <td> <?=$data['id'];?> </td>
                <td> <?=$data['nama'];?> </td>
                <td> <?=$data['asal'];?> </td>
                <td> <a href="?id=<?=$data['id'];?>"> Profil </a> </td>
            </tr>
    
        <?php endforeach;?>
    <?php else:?>
        
        <tr>
            <td colspan="4">Data tidak cocok</td>
        </tr>

    <?php endif;?>

</table>