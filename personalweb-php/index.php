<?php
include "components/data.php";
include "components/header.php";
?>

<div class="grid md:grid-cols-2 mt-4 mb-12 md:my-16">
    <?php foreach($vindex as $v):?>
        <a href="<?=$v['link'];?>" class="group transform duration-300 transition my-4 mx-2 bg-gray-300 rounded-md md:my-10 md:mx-12 hover:shadow-2xl hover:-translate-y-4">
            <div class="w-5/6 bg-black mt-6 mx-auto">
                <img class="w-full opacity-30 transition duration-300 group-hover:opacity-100" src="assets/<?=$v['img'];?>" alt="<?=$v['img'];?>">
            </div>
            <div>
                <h1 class="py-2 px-3 ml-1 text-md font-bold md:px-6 lg:px-12 md:ml-3 md:text-lg lg:text-xl"><?=$v['ver'];?></h1>
                <p class="py-2 px-3 pb-6 text-sm md:px-8 lg:px-12 md:text-md lg:text-lg"><?=$v['ket'];?></p>
            </div>
        </a>
    <?php endforeach;?>
</div>

<?php
include "components/footer.php";
?>