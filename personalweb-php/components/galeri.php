<?php function ModalGaleri($isMulty, $i, $len, $caption, $image) { ?>

<div id="galeri<?php if($isMulty==true){echo '-'.$i;}?>" style="display: none;" 
        class="fixed z-50 p-2 md:p-4 w-full h-full top-0 left-0 text-center bg-black bg-opacity-60 transition-all ease-in-out duration-500">
    <button style="outline:none;" class="text-white border-2 border-white rounded-full px-2 text-lg float-right transition hover:text-red-500 hover:border-red-500"
            onclick="document.getElementById('galeri<?php if($isMulty==true){echo '-'.$i;}?>').style.display='none';

                <?php for($x=0;$x!==$len;$x++):?>
                        document.getElementById('slide-<?=$x;?>').style.display='none';
                <?php endfor;?>

            ">
        &#10005;
    </button>
    <div class="mt-8 bg-gray-200 text-extrabold p-2 mx-2 md:w-5/6 md:h-5/6 md:mx-auto">
        <div class="w-full h-full overflow-hidden whitespace-nowrap">

            <?php while($i !== $len):?>

                <div style="display: none;" id="slide-<?=$i;?>">
                    <div class="grid grid-cols-13">
                        <button onclick="prev(<?=$i;?>, <?=$len;?>)" class="col-start-1 col-end-1 text-xl md:text-3xl"><</button>
                        <h5 class="col-start-2 col-end-12 text-center mx-auto pt-1 text-sm md:text-lg"><?=$caption[$i];?></h5>
                        <button onclick="next(<?=$i;?>, <?=$len;?>)" class="col-start-13 col-end-13 text-xl md:text-3xl">></button>
                    </div>
                    

                    <div id="img-<?=$i;?>" class="block">     
                        <img class="mx-auto object-scale-down" src="assets/<?=$image[$i];?>" alt="<?=$image[$i];?>">
                    </div>
                </div>

                <?php $i++;?>
            <?php endwhile;?>

        </div>
    </div>
</div>

<?php } ?>
