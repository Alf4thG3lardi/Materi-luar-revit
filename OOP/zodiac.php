<?php 
    class Zodiac{
        public static function zodiac($b, $t){
            if ($b < 1 || $b > 12 || $t < 1 || $t > 31) {
                $hasil = "tanggal/bulan salah";
            }
            else {
                if ($b == 1) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "Aquarius";
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = "Taurus";
                    }
                }
                elseif ($b == 2) {
                    if ($t > 19 && $t < 29) {
                        $hasil = "Libra";
                    }
                    if ($t > 0 && $t < 19) {
                        $hasil = "Aquarius";
                    }
                }
                elseif ($b == 3) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "Pisces";
                    }
                    if ($t > 19 && $t < 19) {
                        $hasil = "Libra";
                    }
                }
                elseif ($b == 4) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "Aries";
                    }
                    if ($t > 19 && $t < 19) {
                        $hasil = "Pisces";
                    }
                }
                else {
                    $hasil = "bulan ga ada";
                }
            }
            return $hasil;
        }
    }
?>