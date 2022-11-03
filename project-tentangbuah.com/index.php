<form action=""method="post">
    Buah:
    <input type="text" name="buah" id="">
    Deskripsi:
    <input type="text" name="deskripsi" id="">
    Harga:
    <input type="text" name="harga" id="">
    <input type="submit" name="submit" value="submit">
</form>
<?php 
    require_once "db.php";
    if (isset($_POST['submit'])) {
        $buah = $_POST['buah'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $sql = "INSERT INTO tblbuah (buah, deskripsi, harga) VALUES ('$buah', '$deskripsi', $harga)";
        $koneksi -> query($sql);
        header("location:./index.php");
    }

    $sql = "SELECT * FROM tblbuah";
    $hasil = $koneksi -> query($sql);

    echo "<table border>";
    echo "<tr>
            <th>idbuah</th>
            <th>buah</th>
            <th>deskripsi</th>
            <th>harga</th>
            <th>gambar</th>

            
            <th>Hapus</th>
            <th>Update</th>
        </tr>";
    if ($hasil -> num_rows > 0) {
        while ($row = $hasil-> fetch_array()) {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td><a href='?id=$row[0]&menu=hapus'>Hapus</a></td>";
            echo "<td><a href='?id=$row[0]&menu=edit'>Edit</a></td>";
            echo "</tr>";
        }
    }
    echo "</table>";

?>