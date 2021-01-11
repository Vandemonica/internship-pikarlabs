<?php
include "komponen/backend.php";
include "komponen/header.php";
?>

<?php if( isset($_GET["id"]) ):?>

    <?php $i = TampilkanBio($input, $_GET['id']);?>
    <?php include 'komponen/bio.php';?>

<?php else:?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Link</th>
        </tr>

        <?php TampilkanTabel($input)?>

    </table>
<?php endif;?>

<?php
include "komponen/footer.php";
?>