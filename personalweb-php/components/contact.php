<?php function ContactBox($bg, $color) { ?>
<form method="post">
    <div class="my-10 bg-<?=$bg;?> border border-<?=$color;?> border-solid py-4 px-2 md:px-6 md:mx-20">
        <h6 class="pt-40 -mt-40 text-<?=$color;?> text-2xl underline ml-4" id="Contact">
            Contact Me!
        </h6>
        <input class="block p-1 my-2 w-full md:w-3/4 outline-none" type="text" name="dari" placeholder="Dari">
        <input class="block p-1 my-2 w-full md:w-3/4 outline-none" type="text" name="subjek" placeholder="Subjek Email">
        <textarea class="block p-1 my-2 w-full text-black h-60 outline-none" name="pesan" placeholder="Isi Email"></textarea>

        <button style="outline:none;" 
                class="bg-blue-700 text-white border border-<?=$color;?> border-solid rounded-xl py-1 px-6 outline-none hover:bg-blue-500" 
                type="submit" name="email">
            Kirim Email
        </button>
    </div>
</form>
<?php } ?>
