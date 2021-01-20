<?php
include "komponen/backend.php";
include "komponen/header.php";


if(isset($_POST["reset"])){
    header("location: array-request-3.php");
}

?>

<form method="post" class="cari">
    <input type="text" name="cari" placeholder="Masukkan ID">
    <button type="submit" name="go" class="cari-Btn">Cari</button>
    <button type="submit" name="reset" class="reset-Btn">Reset</button>
</form>

<?php if(isset($_GET["id"])):?>
    
    <?php $i = TampilkanBio($input, $_GET['id']); ?>
    <?php include "komponen/bio.php"; ?>

<?php else:?>

    <div class="search-Bar">
        <p>
            <?php if( isset($_POST['cari']) ){
                echo "Mencari siswa dengan ID:\"" .$_POST['cari']. "\"";
            }?>
        </p>
    </div>

    <?php
        $cari = isset($_POST['cari']) ? $_POST['cari'] : "";
        $array = PencarianParsial($cari, $input);
        include "komponen/tabel.php";
    ?>

<?php endif;?>

<?php
include "komponen/footer.php";
?>