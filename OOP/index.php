<form action="" method="post">

    input: 
    <input type="number" name="bulan" placeholder="masukkan bulan" id="">
    input: 
    <input type="number" name="tanggal" placeholder="masukkan tanggal" id="">
    <input type="submit" value="Submit" name="submit">

</form>

<?php 
    // require_once 'rumus.php';
    require_once 'zodiac.php';

    // $rumus = new Rumus;
    // $zodiac = new Zodiac;
    // echo $rumus -> luasLingkaran(5);
    // echo "<br>";
    // echo $rumus -> kelilingLingkaran(5);
    // echo "<br>";
    // echo $rumus -> luasPersegiPanjang(5, 3);
    // echo "<br>";
    // echo $rumus -> kelilingPersegiPanjang(5, 3);
    // echo "<br>";
    // echo $rumus -> luasSegitiga(5, 3);
    // echo "<br>";
    // echo $rumus -> kelilingSegitiga(5);
    // echo $zodiac -> zodiac(1, 10);
    if (isset($_POST['submit'])) {
        $b = $_POST['bulan'];
        $t = $_POST['tanggal'];
        echo Zodiac::zodiac($b, $t);
    }
?>
