<?php
    require_once "content.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan-2</title>
</head>
<body>
    <div>
        <div>
            <ul>
                <?php
                    for ($i = 0; $i < 4; $i++) {
                        echo "<li><a href='#'>$menu[$i]</a></li>";
                    }
                ?>
            </ul>
        </div>
        <div>
            <ol>
                <?php
                    for ($i = 0; $i < 4; $i++) {
                        echo "<li><a href='?isi=$i'> $judul[$i]</a></li>";
                    }
                ?>
            </ol>
        </div>
        <div>
            <?php
                if(isset($_GET["isi"])){
                    echo $deskripsi[$_GET["isi"]];
                }
                else {
                    echo "silahkan pilih...buah";
                }
            ?>
        </div>
    </div>
</body>
</html>