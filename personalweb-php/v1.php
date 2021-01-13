<?php
include "components/data.php";
include "components/header.php";
?>

<body class="m-0 p-0">
    <!-- Navigation Bar Starts -->
    <?php include "components/navbar.php";?>
    <!-- Navigation Bar Ends -->

    <!-- Main Banner Starts -->
    <div class="w-auto" id="main">
        <div class="float-center bg-black md:float-left">
            <img class="opacity-60" src="assets/refuge.png" alt="Banner">
        </div>
        <div class="text-white relative bg-gray-900 h-50 w-full p-4 border-t-2 border-b-2 border-solid border-indigo-700 md:flex md:flex-row">
            <div class="inline-block absolute -top-12 float-center p-2 sm:-top-40 md:float-left md:-top-52">
                <img class="w-20 border rounded-full border-solid sm:w-40 md:w-60" src="assets/redacted.jpg" alt="Profil-Img">
            </div>
            <div class="inline-block float-center p-2 md:float-left md:inline">
                <h1 class="text-md mt-5 mb-1 md:text-xl md:px-20">Ivan Nircahya</h1>
                <p class="text-xs md:text-lg md:px-20">
                    <?=$deskripsi;?>
                </p>
            </div>
        </div>
    </div>
    <!-- Main Banner Ends -->
    
    <!-- Skills Starts -->
    <div class="text-black bg-gray-800 p-4">
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

    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
</body>

<?php
include "components/footer.php";
?>