<div class="z-30 fixed w-full">
    <div class="bg-gray-700 text-white border-b-2 border-solid border-indigo-900">
        <div class="p-2 text-xl italic md:text-3xl md:p-4">
            <h1><?=$navbar['judul'];?></h1>
        </div>
    </div>
    <div class="bg-gray-900 text-white text-center">
        <div class="text-md flex-row flex-nowrap p-0.5 space-x-10 sm:space-x-20 md:space-x-40 md:text-xl lg:space-x-50">
            <?php foreach($navbar['sekte'] as $i):?>
                <a class="hover:text-blue-500" href="#<?=$i;?>"> <?=$i;?> </a>
            <?php endforeach;?>
        </div>
    </div>
</div>