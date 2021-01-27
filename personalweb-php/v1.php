<?php
session_start();
include "components/data.php";
include "components/backend.php";
include "components/header.php";
?>


<?php
// <---------Extra-------->
if(isset($_POST['welcome'])){
    $_SESSION['nama'] = $_POST['welcome'];
}

$time = GetTime();
if(!isset($_SESSION['nama'])){
    $welcome1 = $time.'!';
    $welcome2 = "Greetings, How do you want us to refer you?";
}
else{
    $welcome1 = $time.' '.$_SESSION['nama'].'!';
    $welcome2 = "Hope you had a good day!";
}
?>

<!-- Pop-Up Galeri Starts -->
<div>
    <?php
        $len = count($portfolio);
        
        include_once "components/galeri.php";

        for($x=0; $x<$len; $x++){
            $image = GetGaleriContent($portfolio[$x]['img'], $portfolio[$x]['imgx']);
            $capt = GetGaleriContent($portfolio[$x]['capt'], $portfolio[$x]['captx']);

            ModalGaleri($x, $capt, $image);
        }
    ?>
</div>
<!-- Pop-Up Galeri Ends -->


<!-- Navigation Bar Starts -->
<?php include "components/navbar.php";?>
<!-- Navigation Bar Ends -->



<!-- Main Banner Starts -->
<div class="w-auto">
    <div class="float-center relative bg-black">
        <img class="opacity-60" src="assets/refuge.png" alt="Banner">

        <!-- Fitur extra untuk layar md+ -->
        <div class="hidden opacity-80 font-mono absolute transform text-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/4 md:block">
            <p id="welcome1" class="text-xl whitespace-nowrap text-white md:text-4xl lg:text-6xl"></p>
            <p id="welcome2" class="text-sm whitespace-nowrap my-2 text-white md:text-md lg:text-xl"></p>
            <?php if(!isset($_SESSION['nama'])):?>
                <form method="post">
                    <input class="text-center text-white bg-transparent border rounded-md py-1 w-full" name="welcome" type="text" placeholder="Your Name">
                </form>
            <?php endif;?>
        </div>
        <!-- Extra End -->

    </div>
    <div class="text-white relative bg-gray-900 h-50 w-full p-4 border-t border-b border-solid border-indigo-900 md:flex md:flex-row">
        <div class="inline-block absolute -top-20 float-center p-2 sm:-top-40 md:ml-2 lg:ml-24 md:float-left md:-top-44 lg:-top-52">
            <img class="w-28 border-2 rounded-full border-solid sm:w-40 md:w-52 lg:w-60" src="assets/<?=$profil['foto'];?>" alt="Profil-Img" id="Profil">
        </div>
        <div class="inline-block float-center p-2 md:float-left md:inline">
            <h1 class="font-bold text-xl mt-5 mb-1 md:text-2xl md:px-10 lg:px-36">
                <?=$profil['nama'];?>
            </h1>
            <p class="text-md md:text-lg md:px-10 lg:px-36">
                <?=$profil['deskripsi'];?>
            </p>
        </div>
    </div>
</div>
<!-- Main Banner Ends -->



<!-- Skills x Education Starts -->
<div class="bg-gray-800 px-2 grid md:px-10 lg:px-36 md:grid-cols-2">
    <!-- Skills Starts -->
    <div class="container py-6 md:py-12">
        <div class="ml-2 mt-2 text-white text-lg md:text-xl md:ml-16">
            <h6 class="font-bold"><?=$sekte[0];?>:</h6>
        </div>
        <?php foreach($skills as $i):?>
        <div class="w-full text-white rounded-xl mt-4 p-2">
            <h7 class="ml-6">
                <?=$i['bahasa'];?>
            </h7>
            <div class="bg-white cursor-default text-center border rounded-lg">
                <div style="width: <?=$i['xp']+5;?>%; background-color: <?=$i['color'];?>;" class="rounded-lg py-0.5">
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
            <h6 class="font-bold"><?=$sekte[1];?>:</h6>
        </div>
        <div class="mt-1 text-white">
            <?php foreach($education as $i):?>
                <div class="mt-4 p-2 rounded-xl md:ml-2">
                    <h7 class="ml-4"> 
                        Pada tahun: <?=$i['tahun'];?>
                    </h7>
                    <div class="bg-gray-700 p-0.5 px-4 border border-gray-600 py-1 text-sm">
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
<div class="bg-gray-800 py-10 px-2 md:px-10 lg:px-36 border-t border-gray-700">
    <div class="text-center text-white text-lg">
        <h6 class="pt-40 -mt-40 font-bold text-2xl" id="Portfolio">--<?=$sekte[2];?>--</h6>
    </div>
    <div class="mt-3 text-white">
        <?php foreach($portfolio as $k => $i):?>
            <div class="p-4 rounded-md mt-4 bg-gray-700 lg:px-16 lg:py-4 md:ml-2">
                <h7 class="ml-4 px-4 border-t border-r border-l text-xl font-bold md:text-2xl">
                    <span>
                        <?=$i['judul'];?>
                    </span>
                    <span class="border-l pl-4">
                        <?=$i['tahun'];?>
                    </span>
                </h7>
                <div onclick="ShowModal(<?=$k;?>, 'galeri-<?=$k;?>')" class="group border bg-black relative text-center lg:w-5/6">
                    <img class="w-full transition duration-300 cursor-pointer md:h-96 object-left-top object-cover group-hover:opacity-30" 
                            src="assets/<?=$i['img'];?>" alt="<?=$i['img'];?>">
                    <div class="absolute transition duration-300 transform opacity-0 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/4 group-hover:opacity-100">
                        <p class="text-xl px-6 border border-white cursor-pointer rounded-md md:text-2xl md:px-10">Lihat</p>
                    </div>
                </div>
                <div class="my-3 space-x-4 bg-gray-700">
                    <p class="text-lg pb-5">
                        <?=$i['ket'];?>
                    </p>
                    <a class="bg-green-700 py-1 px-8 rounded-md border border-solid hover:bg-green-500"
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
<div class="bg-gray-800 p-2 md:px-10 lg:px-22">
    <?php include "components/contact.php";?>
    <?php ContactBox('gray-800','white');?>
</div>
<!-- Contact Ends -->


<!-- Extra Script -->
<script>
    var text1 = '<?=$welcome1;?>';
    var text2 = '<?=$welcome2;?>';
</script>
<script src="components/extra.js"></script>
<!-- Extra Ends -->

<?php
include "components/footer.php";
?>