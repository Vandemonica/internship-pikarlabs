<?php
include "components/data.php";
include "components/backend.php";
include "components/header.php";
?>

<style>
    body{
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
    }
</style>


<!-- Navigation Bar Starts -->
<?php include "components/navbar.php";?>
<!-- Navigation Bar Ends -->



<!-- Main Banner Starts -->
<div class="pt-60 w-full md:pt-80">
    <div class="w-full absolute top-24 md:top-32" id="Profil">
        <img class="w-44 mx-auto border-2 border-gray-500 rounded-full md:w-60" src="assets/<?=$profil['foto'];?>" alt="Profil Picture">
    </div>
    <div class="w-full pt-8 pb-2 bg-gray-100 border-t-2 border-b-2 border-gray-400 md:pt-10">
        <div class=" m-2 text-md px-2 md:px-20 md:text-lg">
            <h5 class="mx-auto text-2xl text-center mb-2 text-bold md:text-3xl"><?=$profil['nama'];?></h5>
            <p class="text-md md:text-lg md:px-10 lg:px-40"> <?=$profil['deskripsi'];?> </p>
        </div>
    </div>
</div>
<!-- Main Banner Ends -->



<!-- Skills Starts -->
<div class="mt-10 p-2 md:px-10 lg:px-60">
    <div class="m-2 w-32 border-b border-gray-400">
        <h1 class="font-black text-xl">My Skills</h1>
    </div>
    <div class="grid md:grid-cols-2">
        <?php foreach($skills as $i):?>
            <ul class="container">
                <li class="m-2">
                    <p><?=$i['bahasa'];?></p>
                    <div class="bg-gray-300 cursor-default rounded-lg text-right text-sm">
                        <div class="text-white p-1 rounded-lg md:p-2" style="background-color:<?=$i['color'];?>; width:<?=$i['xp']+10;?>%;">
                            <?=$i['xp'];?>%
                        </div>
                    </div>
                </li>
            </ul>
        <?php endforeach;?>
    </div>
</div>
<!-- Skills Ends -->



<!-- Education Starts -->
<div class="mt-10 p-2 md:px-10 lg:px-60">
    <div class="m-2 w-60 border-b border-gray-400">
        <h1 class="font-black text-xl">Riwayat Pendidikan</h1>
    </div>
    <div class="grid md:grid-cols-3">
        <?php foreach($education as $i):?>
            <ul class="container">
                <li class="m-2">
                    <p class="font-bold ml-2 text-md md:text-sm lg:text-md">Tahun <?=$i['tahun'];?></p>
                    <div class="bg-gray-200 px-4 p-2">
                        Menempuh pendidikan di <?=$i['nama'];?>
                    </div>
                </li>
            </ul>
        <?php endforeach;?>
    </div>
</div>
<!-- Education Ends -->



<!-- Portfolio Starts -->
<div class="mt-10 p-2 md:px-10 lg:px-60">
    <div class="m-2 w-32 border-b border-gray-400">
        <h1 class="pt-40 -mt-40 font-black text-xl" id="Portfolio">Portfolio</h1>
    </div>
    <div class="grid md:grid-cols-3">
        <?php foreach($portfolio as $id => $i):?>
            <a href="portfolio.php?id=<?=$id;?>" class="group bg-gray-200 grid grid-rows-1 rounded-xl p-3 m-2 hover:shadow-2xl transform hover:scale-110">
                <div class="bg-black w-auto overflow-hidden h-48">
                    <img class="w-full opacity-40 group-hover:opacity-100" src="assets/<?=$i['img'];?>" alt="<?=$i['img'];?>">
                </div>
                <div class="mt-2">
                    <h3 class="text-md font-bold ml-2 md:text-lg lg:text-xl"><?=$i['judul'];?></h3>
                    <p class="text-xs md:text-sm"><?=$i['ket'];?></p>
                </div>
            </a>
        <?php endforeach;?>
    </div>
</div>
<!-- Portfolio Ends -->



<!-- Contact Starts -->
<div class="p-2 mt-10 md:px-10 md:mt-36 lg:px-40">
    <?php include"components/contact.php";?>
    <?php ContactBox('gray-200','gray-700');?>
</div>
<!-- Contact Ends -->

<?php
include "components/footer.php";
?>