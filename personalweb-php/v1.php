<?php
include "components/data.php";
include "components/header.php";
?>

<!-- Navigation Bar Starts -->
<?php include "components/navbar.php";?>
<!-- Navigation Bar Ends -->

<!-- Main Banner Starts -->
<div class="w-auto">
    <div class="float-center bg-black md:float-left">
        <img class="opacity-60" src="assets/refuge.png" alt="Banner">
    </div>
    <div class="text-white relative bg-gray-900 h-50 w-full p-4 border-t-2 border-b-2 border-solid border-indigo-900 md:flex md:flex-row">
        <div class="inline-block absolute -top-12 float-center p-2 sm:-top-40 md:float-left md:-top-52">
            <img class="w-20 border rounded-full border-solid sm:w-40 md:w-60" src="assets/redacted.jpg" alt="Profil-Img" id="profil">
        </div>
        <div class="inline-block float-center p-2 md:float-left md:inline">
            <h1 class="font-bold text-xl mt-5 mb-1 md:text-2xl md:px-20">Ivan Nircahya</h1>
            <p class="text-md md:text-lg md:px-20">
                <?=$deskripsi;?>
            </p>
        </div>
    </div>
</div>
<!-- Main Banner Ends -->

<!-- Skills x Education Starts -->
<div class="bg-gray-800 p-2 md:flex md:flex-row">
    <!-- Skills Starts -->
    <div class="container border-t-2 border-solid pb-4">
        <div class="ml-2 mt-2 text-white text-lg md:ml-16">
            <h6 class="font-bold">My Skills:</h6>
        </div>
        <?php foreach($skills as $i):?>
        <div class="w-full text-white rounded-xl hover:bg-gray-700 mt-4 p-2">
            <h7 class="ml-6">
                <?=$i['bahasa'];?>
            </h7>
            <div class="bg-white text-center border-solid border-gray-400 border-2 rounded-xl">
                <div style="width: <?=$i['xp'];?>%; background-color: <?=$i['color'];?>;" class="rounded-xl">
                    <p> <?=$i['xp'];?>% </p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <!-- Skills Ends -->

    <!-- Education Starts -->
    <div class="container border-t-2 border-solid">
        <div class="ml-2 mt-2 text-white text-lg md:ml-16">
            <h6 class="font-bold">Riwayat Pendidikan:</h6>
        </div>
        <div class="mt-3 text-white">
            <?php foreach($education as $i):?>
                <div class="p-4 rounded-xl mt-4 hover:bg-gray-700 md:ml-2">
                    <h7 class="bg-indigo-400 p-1 border-solid border-2 border-white ml-4"> 
                        Pada tahun: <?=$i['tahun'];?>
                    </h7>
                    <div class="bg-gray-700 p-2 border-solid border-2 border-white">
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
<div class="bg-gray-800 py-10 border-t-2 border-solid" id="portfolio">
    <div class="text-center text-white text-lg">
        <h6 class="font-bold text-2xl">--Portfolio--</h6>
    </div>
    <div class="mt-3 text-white mx-2 md:mx-40">
        <?php foreach($portfolio as $i):?>
            <div class="p-4 rounded-xl mt-4 bg-gray-700 md:ml-2">
                <h7 class="ml-4 px-4 border-2 border-solid text-xl font-bold md:text-2xl">
                    <?=$i['judul'];?>
                </h7>
                <div class="border-2 border-solid md:w-1/2">
                    <img src="assets/<?=$i['img'];?>" alt="<?=$i['img'];?>">
                </div>
                <div class="m-2">
                    <div class="bg-gray-700">
                        <p class="m-2 text-lg pb-5">
                            <?=$i['ket'];?>
                        </p>
                        <a class="bg-green-700 p-1 px-4 rounded-xl border-2 border-solid hover:bg-green-500"
                                href="<?=$i['link'];?>">
                            Kunjungi
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
<!-- Portfolio Ends -->

<?php
include "components/footer.php";
?>