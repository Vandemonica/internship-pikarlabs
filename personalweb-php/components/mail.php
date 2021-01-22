<?php
if( $_SESSION['mail'] == true ){
    $pesan1 = 'Email anda terkirim &#10003;';
    $pesan2 = 'Terima kasih atas tanggapan anda';
}
else{
    $pesan1 = 'Email anda tidak terkirim';
    $pesan2 = 'Pastikan semua formulir email terisi dan jika tetap tidak bisa coba beberapa saat lagi';
}

?>

<div id="modal" style="display:none" 
        class="fixed z-50 w-full h-full top-0 left-0 text-center bg-black bg-opacity-60 transition-all ease-in-out duration-500">
    <div class="bg-gray-500 text-gray-200 text-extrabold rounded-xl mt-40 mx-2 md:mx-40 lg:mx-80">
        <button style="outline:none;" onclick="HideModal('modal');" 
                class="text-lg text-gray-200 float-right p-2 mr-2 transition hover:text-red-500">
            &#10005;
        </button>
        <div class="m-2 p-2">
            <h4 class="text-lg md:text-xl text-bold border-b-2 border-gray-200 transition duration-500">
                <?=$pesan1;?>
            </h4>
            <p class="text-md mt-4 md:text-lg md:px-10 transition duration-500">
                <?=$pesan2;?>
            </p>
        </div>
        <div class="p-2">
            <button style="outline:none;" onclick="HideModal('modal');" 
                    class="bg-transparent rounded-md text-gray-200 border-2 border-gray-200 px-6 transition hover:bg-red-600 hover:border-red-600">
                Close
            </button>
        </div>
    </div>
</div>

<script>
    addEventListener('load', ()=>{
        document.getElementById('modal').style.display = 'block';
    });
</script>