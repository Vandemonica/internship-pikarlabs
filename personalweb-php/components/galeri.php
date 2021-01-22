<?php function ModalGaleri($index, $caption, $image) { ?>

    <?php
        $i = 0;
        $len = count($image);

        // index selain -1 digunakan jika perlu lebih dari satu pop-up galeri(contoh implementasi di v1)

        if($index == -1){
            $galeriId = 'galeri';
            $slideId = 'slide-';
        }
        else{
            $galeriId = 'galeri-'.$index;
            $slideId = $index.'-slide-';
        }
    ?>

    <div id="<?=$galeriId;?>" style="display: none;" 
            class="fixed z-50 w-full h-full top-0 left-0 text-center bg-black bg-opacity-60 transition-all ease-in-out duration-500">

        <div class="bg-gray-200 text-extrabold md:p-2 md:mx-2 md:w-5/6 md:h-5/6 md:mx-auto md:mt-10">
            <div class="w-full h-full overflow-hidden whitespace-nowrap">

                <?php while($i !== $len):?>

                    <div style="display: none;" id="<?=$slideId.$i;?>">
                        <div class="border-b border-black mb-2">
                            <h5 class="text-center mx-auto pt-1 text-sm md:text-lg">
                                <?=$caption[$i];?>
                            </h5>
                        </div>

                        <div class="relative text-white text-2xl md:text-3xl lg:text-4xl">
                            <img class="mx-auto" src="assets/<?=$image[$i];?>" alt="<?=$image[$i];?>">
                            <button onclick="prev(<?=$index;?>, <?=$i;?>, <?=$len;?>)" 
                                class="absolute p-2 bg-black bg-opacity-40 top-0 left-0 h-full hover:bg-blue-400 hover:bg-opacity-50"><</button>
                            <button onclick="next(<?=$index;?>, <?=$i;?>, <?=$len;?>)" 
                                class="absolute p-2 bg-black bg-opacity-40 top-0 right-0 h-full hover:bg-blue-400 hover:bg-opacity-50">></button>
                        </div>
                    </div>

                    <?php $i++;?>
                <?php endwhile;?>

            </div>
        </div>

        <button style="outline:none;" class="bg-gray-300 mx-auto text-red-800 underline w-full md:w-5/6 hover:bg-red-500 hover:text-white"
                onclick="HideModal('<?=$galeriId;?>');

                    // diloop untuk memastikan semua gambar terhide(display: none)
                    <?php for($x=0;$x!==$len;$x++):?>
                        HideModal('<?=$slideId.$x;?>');
                    <?php endfor;?>

                ">
            Close
        </button>

    </div>

<?php } ?>