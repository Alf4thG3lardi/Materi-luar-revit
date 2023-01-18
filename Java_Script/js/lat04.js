let tampil = document.querySelector("#belajar");

function zodiac() {
    let bln = document.getElementsByName("bln")[0].value;
    let tgl = document.getElementsByName("tgl")[0].value;

    let hasil = "invalid input";
    if (bln > 0 && bln < 13 && tgl > 0 && tgl < 32) {
        hasil = "zodiac  null";
        if (bln == 1 && tgl < 32) {
            hasil = "capricorn";
            if (tgl > 21) {
                hasil = "aquarius";
            }Java_Script
        }
        if (bln == 2 && tgl < 30) {
            hasil = "aquarius";
            if (tgl > 18) {
                hasil = "pisces";
            }
            
        }
        if (bln == 3 && tgl < 32) {
            hasil = "pisces";
            if (tgl > 21) {
                hasil = "aries";
            }
        }
        if (bln == 4 && tgl < 31) {
            hasil = "aries";
            if (tgl > 21 ) {
                hasil = "taurus";
            }
        }
        if (bln == 5 && tgl < 32) {
            hasil = "taurus";
            if (tgl > 20) {
                hasil = 'gemmini';
            }
        }
        if (bln == 6 && tgl < 31) {
            hasil = "gemini";
            if (tgl > 20) {
                hasil = 'cancer';
            }
        }
        if (bln == 7 && tgl < 32) {
            hasil = "cancer";
            if (tgl > 20) {
                hasil = 'leo';
            }
        }
        if (bln == 8 && tgl < 32) {
            hasil = "leo";
            if (tgl > 20) {
                hasil = 'virgo';
            }
        }
        if (bln == 9 && tgl < 31) {
            hasil = "virgo";
            if (tgl > 20) {
                hasil = 'libra';
            } 
        }
        if (bln == 10&& tgl < 32) {
            hasil = "libra";
            if (tgl > 20) {
                hasil = 'scorpio';
            }
        }
        if (bln == 11 && tgl < 31) {
            hasil = "scorpio";
            if (tgl > 20) {
                hasil = 'sagitarius';
            }
        }
        if (bln == 12 && tgl < 32) {
            hasil = "sagitarius";
            if (tgl > 20) {
                hasil = 'capricorn'
            } 
        }
    }
    // console.log(hasil);

    tampil.innerHTML=hasil;
}

//TUGAS

function lulus() {
    let nilai = document.getElementById("nilai").value;
    if (nilai >= 0 && nilai <= 100) {
        if (nilai >= 80) {
            tampil.innerHTML = "LULUS";
        } else {
            tampil.innerHTML = "GK LULUS";
        }
    } 
}

function convert() {
    let angka = document.getElementById("num").value;
    function terbilang(angka) {
    
        var bilne=["","satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan","sepuluh","sebelas"];
        if(angka < 12){
            return bilne[angka];
        }else if(angka < 20){
            return terbilang(angka-10)+" belas";
        }else if(angka < 100){
            return terbilang(Math.floor(angka/10))+" puluh "+terbilang(angka%10);
        }else if(angka < 200){
            return "seratus "+terbilang(angka-100);
        }else if(angka < 1000){
            return terbilang(Math.floor(angka/100))+" ratus "+terbilang(angka%100);
        }else if(angka < 2000){
            return "seribu "+terbilang(angka-1000);
        }else if(angka < 1000000){
            return terbilang(Math.floor(angka/1000))+" ribu "+terbilang(angka%1000);
        }else if(angka < 1000000000){
            return terbilang(Math.floor(angka/1000000))+" juta "+terbilang(angka%1000000);
        }else if(angka < 1000000000000){
            return terbilang(Math.floor(angka/1000000000))+" milyar "+terbilang(angka%1000000000);
        }else if(angka < 1000000000000000){
            return terbilang(Math.floor(angka/1000000000000))+" trilyun "+terbilang(angka%1000000000000);
        }    
    }
    tampil.innerHTML = terbilang(angka);
}

function prima() {
    let num = document.getElementById("number").value;
    let pembagi = 0;
    for (let i = 0; i <= num; i++) {
        if (num % i == 0) {
            pembagi++;
        }
    }
    if (pembagi == 2) {
        tampil.innerHTML = "Prima";
    } else {
        tampil.innerHTML = "Bukan Prima";
    }
}

klik.onclick = function () {
    hasil(69);
}

function hasil(a) {
    tampil.innerHTML = a;
}


//Panggil function
// tampil.innerHTML=terbilang(Angk



// tampil.innerHTML= terbilang(678);
// lulus(80);
// zodiac(12, 29);
// console.log(prima(3));