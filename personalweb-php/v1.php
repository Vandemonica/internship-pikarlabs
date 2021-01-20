<?php
session_start();
include "components/data.php";
include "components/backend.php";
include "components/header.php";
?>


<!-- Pop-Up Galeri Starts -->
<div>
    <?php
        $len = count($portfolio);
        $y = 0;

        include_once "components/galeri.php";

        while($y !== 3){
            $image = GetGaleriContent($portfolio[$y]['img'], $portfolio[$y]['imgx']);
            $capt = GetGaleriContent($portfolio[$y]['capt'], $portfolio[$y]['captx']);
    
            $modalLen = count($image);
            
            ModalGaleri(true, $y, $modalLen, $capt, $image);

            $y++;
        }

        
    ?>
</div>
<!-- Pop-Up Galeri Ends -->



<!-- Navigation Bar Starts -->
<?php include "components/navbar.php";?>
<!-- Navigation Bar Ends -->



<!-- Main Banner Starts -->
<div class="w-auto">
    <div class="float-center bg-black md:float-left">
        <img class="opacity-60" src="assets/refuge.png" alt="Banner">
    </div>
    <div class="text-white relative bg-gray-900 h-50 w-full p-4 border-t-2 border-b-2 border-solid border-indigo-900 md:flex md:flex-row">
        <div class="inline-block absolute -top-20 float-center p-2 sm:-top-40 md:ml-8 md:float-left md:-top-52">
            <img class="w-28 border-2 rounded-full border-solid sm:w-40 md:w-60" src="assets/<?=$profil['foto'];?>" alt="Profil-Img" id="Profil">
        </div>
        <div class="inline-block float-center p-2 md:float-left md:inline">
            <h1 class="font-bold text-xl mt-5 mb-1 md:text-2xl md:px-20">
                <?=$profil['nama'];?>
            </h1>
            <p class="text-md md:text-lg md:px-20">
                <?=$profil['deskripsi'];?>
            </p>
        </div>
    </div>
</div>
<!-- Main Banner Ends -->



<!-- Skills x Education Starts -->
<div class="bg-gray-800 grid-col-8 p-2 md:flex md:flex-row">
    <!-- Skills Starts -->
    <div class="container py-6 md:py-12">
        <div class="ml-2 mt-2 text-white text-lg md:text-xl md:ml-16">
            <h6 class="font-bold">My Skills:</h6>
        </div>
        <?php foreach($skills as $i):?>
        <div class="w-full text-white rounded-xl mt-4 p-2">
            <h7 class="ml-6">
                <?=$i['bahasa'];?>
            </h7>
            <div class="bg-white cursor-default text-center border rounded-lg">
                <div style="width: <?=$i['xp'];?>%; background-color: <?=$i['color'];?>;" class="rounded-lg">
                    <?=$i['xp'];?>%
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <!-- Skills Ends -->

    <!-- Education Starts -->
    <div class="container py-6 md:py-12">
        <div class="ml-2 mt-2 text-white text-lg md:text-xl md:ml-16">
            <h6 class="font-bold">Riwayat Pendidikan:</h6>
        </div>
        <div class="mt-1 text-white">
            <?php foreach($education as $i):?>
                <div class="p-4 rounded-xl mt-6 md:ml-2">
                    <h7 class="ml-4"> 
                        Pada tahun: <?=$i['tahun'];?>
                    </h7>
                    <div class="bg-gray-700 p-1 px-4 border border-gray-600">
                        <p>Menempuh pendidikan di <i><?=$i['nama'];?></i> </p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <!-- Education Ends -->
</div>
<!-- Skills x Education Ends -->



<!-- Portfolio Starts -->
<div class="bg-gray-800 py-10 border-t border-gray-700 border-solid">
    <div class="text-center text-white text-lg">
        <h6 class="pt-40 -mt-40 font-bold text-2xl" id="Portfolio">--Portfolio--</h6>
    </div>
    <div class="mt-3 text-white mx-2 md:mx-40">
        <?php foreach($portfolio as $k => $i):?>
            <div class="p-4 rounded-lg mt-4 bg-gray-700 lg:px-16 lg:py-4 md:ml-2">
                <h7 class="ml-4 px-4 border text-xl font-bold md:text-2xl">
                    <span>
                        <?=$i['judul'];?>
                    </span>
                    <span class="border-l pl-4">
                        <?=$i['tahun'];?>
                    </span>
                </h7>
                <div class="border border-solid md:w-3/4">
                    <img class="w-full" src="assets/<?=$i['img'];?>" alt="<?=$i['img'];?>">
                </div>
                <div class="m-2 space-x-4 bg-gray-700">
                    <p class="m-2 text-lg pb-5">
                        <?=$i['ket'];?>
                    </p>
                    <a class="cursor-pointer bg-blue-700 py-1 px-6 rounded-md border border-solid hover:bg-blue-500" 
                            onclick="document.getElementById('galeri-<?=$k;?>').style.display='block';
                                    document.getElementById('slide-0').style.display='block';">
                        Galeri<?=$k;?>
                    </a>
                    <a class="bg-green-700 py-1 px-4 rounded-md border border-solid hover:bg-green-500"
                            href="<?=$i['link'];?>">
                        Kunjungi
                    </a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
<!-- Portfolio Ends -->



<!-- Contact Starts -->
<div class="bg-gray-800 text-white p-2">
    <?php include"components/contact.php";?>
    <?php ContactBox('gray-800','white');?>
</div>
<!-- Contact Ends -->

<?php
include "components/footer.php";
?>