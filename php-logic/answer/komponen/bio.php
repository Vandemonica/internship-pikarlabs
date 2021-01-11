<?php if( isset($i) ):?>
    <div class="data">
        <p> Profil siswa ID = <?=$input[$i]['id'];?> </p>
        <ul>
            <li> ID: <?=$input[$i]['id'];?> </li>
            <li> Nama: <?=$input[$i]['nama'];?> </li>
            <li> Asal: <?=$input[$i]['asal'];?> </li>
        </ul>
        <a href="?">Kembali</a>
    </div>
<?php else:?>
    <div class="data">
        <p>Maaf data yang anda cari invalid</p>
        <a href="?">Kembali</a>
    </div>
<?php endif;?>