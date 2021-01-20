<?php
include "components/data.php";
include "components/backend.php";
include "components/header.php";

$id = @$_GET['id'];
$result = GetPortfolio($portfolio, $id);
?>

<?php if(!empty($result) && isset($id) && $id != null):?>

    <?php
    $len = count($result[0]['imgx']);
    $x = 0;


    
    $image = GetGaleriContent($portfolio[$id]['img'], $portfolio[$id]['imgx']);
    $capt = GetGaleriContent($portfolio[$id]['capt'], $portfolio[$id]['captx']);

    include "components/galeri.php";
    ModalGaleri(-1, $capt, $image);
    ?>


    <div class="grid w-full pb-40 p-2 md:grid-cols-2 md:p-10 lg:p-20">

        <div class="mt-2 bg-gray-300 w-full rounded-md px-6 py-4">
            <!-- Main Picture Starts -->
            <div>
                <img class="bg-black lg:w-full" src="assets/<?=$result[0]['img'];?>" alt="<?=$result[0]['img'];?>">
                <small><?=$result[0]['capt'];?></small>
            </div>
            <!-- Main Picture Ends -->


            <!-- Extra Picture Starts -->
            <div class="space-x-2 grid grid-cols-<?=$len;?>">
                <?php while($x !== $len):?>
                    <div class="mt-8">
                        <img class="bg-black lg:w-full" src="assets/<?=$result[0]['imgx'][$x];?>" alt="<?=$result[0]['imgx'][$x];?>">
                        <small><?=$result[0]['captx'][$x];?></small>
                    </div>
                    
                    <?php $x++;?>
                <?php endwhile;?>
            </div>
            <!-- Extra Picture Ends -->
        </div>


        <!-- Deskripsi and Button Starts -->
        <div class="mt-2 px-4 md:ml-10">
            <div class="float-right">
                <a class="bg-gray-300 py-1 px-8 rounded-md hover:bg-gray-400" 
                        href="v2.php#portfolio">
                    Kembali
                </a>
            </div>
            <div class="mt-8 border-b-2 border-gray-400 ml-4 w-1/4">
                <h1 class="text-3xl"> <?=$result[0]['judul'];?> </h1>
            </div>
            <p class="mb-4 text-lg"> Dibuat pada tahun: <?=$result[0]['tahun'];?> </p>
            <p class="text-md md:text-lg lg:text-xl"> <?=$result[0]['ket'];?> </p>
            <div class="mt-12 text-white space-x-8">
                <a onclick="ShowModal(-1, 'galeri')"
                        class="cursor-pointer bg-blue-500 py-1 px-6 rounded-md hover:bg-blue-400">
                    Galeri
                </a>
                <a class="bg-green-500 py-1 px-4 rounded-md hover:bg-green-400"
                        href="<?=$result[0]['link'];?>">
                    Kunjungi
                </a>
            </div>
        </div>
        <!-- Deskripsi and Button Ends -->


    </div>

<?php else:?>
    <?php
    header("refresh:2;url=v2.php");
    ?>
    <div class="p-2 pt-40 pb-96 w-full text-center">
        <div class="md:w-1/2 mx-auto md:px-2 py-12 bg-gray-200 rounded-lg ">
            <h1 class="text-lg md:text-xl lg:text-2xl font-bold mb-2">
                <span class="px-2 border-2 rounded-full border-red-500">&#10069;</span>
                    Portfolio tidak ditemukan
                <span class="px-2 border-2 rounded-full border-red-500">&#10069;</span>
            </h1>
            <p class="text-md md:text-lg">anda akan segera diarahkan ke halaman utama</p>
        </div>
    </div>
<?php endif?>

<?php
include "components/footer.php";
?>