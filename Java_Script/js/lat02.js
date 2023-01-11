// document.querySelector('#paragraf').innerHTML="Saya Belajar JS";

// document.querySelector("#content").innerHTML="<h1>Ganti isi </h1>";

let tgl = 23, bulan = 12;
let hasil = 'salah';
if (tgl > 0 && tgl < 32 && bulan > 0 && bulan < 13) {
    hasil = 'zodiak blm dibuat';
    if (bulan == 1) {
        hasil = 'cappricorn';
        if (tgl > 20) {
            hasil = 'aquarius';
        }
    }
    if (bulan == 2) {
        hasil = "capricon";
        if (tgl > 20) {
            hasil = 'pisces';
        } 
        
    }
    if (bulan == 3) {
        hasil = "pisces";
        if (tgl > 20) {
            hasil = 'aries';
        }
    }
    if (bulan == 4) {
        hasil = "aries";
        if (tgl > 20) {
            hasil = 'taurus';
        }
    }
    if (bulan == 5) {
        hasil = "taurus";
        if (tgl > 20) {
            hasil = 'gemmini';
        }
    }
    if (bulan == 6) {
        hasil = "gemini";
        if (tgl > 20) {
            hasil = 'cancer';
        }
    }
    if (bulan == 7) {
        hasil = "cancer";
        if (tgl > 20) {
            hasil = 'leo';
        }
    }
    if (bulan == 8) {
        hasil = "leo";
        if (tgl > 20) {
            hasil = 'virgo';
        }
    }
    if (bulan == 9) {
        hasil = "virgo";
        if (tgl > 20) {
            hasil = 'libra';
        } 
    }
    if (bulan == 10) {
        hasil = "libra";
        if (tgl > 20) {
            hasil = 'scorpio';
        }
    }
    if (bulan == 11) {
        hasil = "scorpio";
        if (tgl > 20) {
            hasil = 'sagitarius';
        }
    }
    if (bulan == 12) {
        hasil = "sagitarius";
        if (tgl > 20) {
            hasil = 'capricorn'
        } 
    }
}
// console.log(hasil);
document.querySelector('#content').innerHTML="<h1>" + hasil + "</h1>";