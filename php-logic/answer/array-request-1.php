<?php
include "komponen/backend.php";
include "komponen/header.php";

?>
    <?php if( isset($_GET["id"]) ):?>

        <?php $i = TampilkanBio($input, $_GET['id']);?>
        <?php include 'komponen/bio.php';?>

    <?php else:?>

        <?php
            $array = $input;
            include "komponen/tabel.php";
        ?>

    <?php endif;?>
<?php
include "komponen/footer.php";
?>