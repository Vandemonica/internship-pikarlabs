<?php
include "komponen/backend.php";
include "komponen/header.php";


//jika $_GET['reset'] isset(ada nilainya)
if(isset($_GET["reset"])){
    //redirect ke file ini tanpa query $_GET
    header("location: array-request-2.php");
}

?>

<form method="get" class="cari">
    <input type="text" name="cari" placeholder="Masukkan ID">
    <button type="submit" name="go" class="cari-Btn">Cari</button>
    <button type="submit" name="reset" class="reset-Btn">Reset</button>
</form>
<!-- jika $_GET['id'] isset(ada nilainya) -->
<?php if(isset($_GET["id"])):?>
    
    <?php $i = TampilkanBio($input, $_GET['id']); ?>
    <?php include "komponen/bio.php"; ?>

<!-- Selain dari itu(id tidak isset) -->
<?php else:?>
<!-- untuk label history pencarian -->
    <?php
        if(isset($_GET["cari"])){
            HistoriSearch($_GET["cari"]);
        }
        else{
            echo "<div class='search-Bar'>";
            echo "</div>";
        }
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Profil</th>
        </tr>

        <!-- tabel yg ditampilkan -->
        <?php
            if(isset($_GET["cari"]) || isset($_GET["go"])){
                PencarianParsial($_GET["cari"], $input);
            }
            else{
                TampilkanTabel($input);
            }
        ?>
    </table>
<?php endif;?>

<?php
include "komponen/footer.php";
?>