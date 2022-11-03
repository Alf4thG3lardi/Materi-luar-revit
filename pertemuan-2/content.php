<?php
    $menu= ["home", "kontak", "sejarah", "jurusan"];
    $judul= ["Apel", "Jeruk", "Mangga", "Duren"];
    $deskripsi= [
        "apel adalah yang menyebabkan kita belajar gravitasi",
        "jeruk adalah.......",
        "mangga adalah......",
        "Duren itu.........."
    ];
    for ($i = 0; $i < 4; $i++) {
        echo "<li> $menu[$i] </li>";
    };
    $link= [
        "Home" => "<a href= '#' >Home</a>",
        "Kontak" => "<a href= '#' >Kontak</a>",
        "Sejarah" => "<a href= '#' >Sejarah</a>",
        "Jurusan" => "<a href= '#' >Jurusan</a>"
    ];
    echo $link["Home"];
    echo '<br>';
    foreach($link as $key => $value) {
        echo '<li>'.$value.'</li>';
    }
    $tanggal= 31;
    if ($tanggal >= 1 and $tanggal <= 31) {
        echo 'true';
    }
    else {
        echo 'false';
    }
    echo '<br>';
    $nilai= 100;
    echo 'point = '.$nilai.'<br>';
    if ($nilai <= 100 and $nilai >= 0) {
        if ($nilai > 70) {
            echo 'nilai = ';
            if ($nilai == 71) {
                echo 'kkm';
            }
            elseif ($nilai > 71 and $nilai < 80){
                echo 'C';
            }
            elseif ($nilai >= 80 and $nilai < 90) {
                echo 'B';
            }
            elseif ($nilai >= 90 and $nilai <=100) {
                echo 'A';
            }
        }
        else {
            echo 'tdk lulus';
        }
    }
    else {
        echo 'nilai tdk benar';
    }
    echo '<br>';
    function zodiak($t, $b)
    {
    $tanggal = $t;
    $bulan = $b;
    if ($tanggal > 0 and $tanggal < 32 and $bulan > 0 and $bulan < 13) {
        if ($bulan == 1) {
            if ($tanggal >= 1 and $tanggal < 20) {
                echo 'zodiac anda capricon';
            }
            else {
                echo 'zodiac anda aquarius';
            }
        }
        if ($bulan == 2) {
            if ($tanggal >= 1 and $tanggal < 19) {
                echo 'zodiac anda aquarius';
            }       
            else {
                echo 'zodiac anda pisces';
            }
        }
        if ($bulan == 3) {
            if ($tanggal >= 1 and $tanggal <= 20) {
                echo 'zodiac anda pisces';
            }       
            else {
                echo 'zodiac anda aries';
            }
        }
        if ($bulan == 4) {
            if ($tanggal >= 1 and $tanggal <= 19) {
                echo 'zodiac anda aries';
            }       
            else {
                echo 'zodiac anda taurus';
            }
        }
        if ($bulan == 5) {
            if ($tanggal >= 1 and $tanggal <= 20) {
                echo 'zodiac anda taurus';
            }       
            else {
                echo 'zodiac anda gemini';
            }
        }
        if ($bulan == 6) {
            if ($tanggal >= 1 and $tanggal <= 21) {
                echo 'zodiac anda gemini';
            }       
            else {
                echo 'zodiac anda cancer';
            }
        }
        if ($bulan == 7) {
            if ($tanggal >= 1 and $tanggal <= 22) {
                echo 'zodiac anda cancer';
            }       
            else {
                echo 'zodiac anda leo';
            }
        }
        if ($bulan == 8) {
            if ($tanggal >= 1 and $tanggal <= 22) {
                echo 'zodiac anda leo';
            }       
            else {
                echo 'zodiac anda virgo';
            }
        }
        if ($bulan == 9) {
            if ($tanggal >= 1 and $tanggal <= 22) {
                echo 'zodiac anda virgo';
            }       
            else {
                echo 'zodiac anda libra';
            }
        }
        if ($bulan == 10) {
            if ($tanggal >= 1 and $tanggal <= 22) {
                echo 'zodiac anda libra';
            }       
            else {
                echo 'zodiac anda scorpio';
            }
        }
        if ($bulan == 11) {
            if ($tanggal >= 1 and $tanggal <= 22) {
                echo 'zodiac anda scorpio';
            }       
            else {
                echo 'zodiac anda sagitarius';
            }
        }
        if ($bulan == 12) {
            if ($tanggal >= 1 and $tanggal <= 23) {
                echo 'zodiac anda sagitarius';
            }       
            else {
                echo 'zodiac anda capricon';
            }
        }
    }    
    else {
        echo 'tanggal/bulan salah';
    }
    }
    for ($i=1; $i < 13; $i++) { 
        zodiak(25, $i);
        echo '<br>';
    }
?>