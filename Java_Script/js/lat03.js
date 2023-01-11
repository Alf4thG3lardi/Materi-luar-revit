let isi = document.querySelector('#isi');
isi.innerHTML = "<h1> Soto </h1>" + "<p> Deskripsi Soto </p>" + "<img src='/20221128_050633.jpg' width='300px'>";

isi.innerHTML = "<h1> Rawon </h1>";
isi.innerHTML += "<p> Deskripsi Rawon </p>";
isi.innerHTML += "<img src='/20221128_050633.jpg' width='300px'>";

// let table = document.querySelector('table');
// table.innerHTML = "<table>"
//                 +"<thead><tr><th>Nomer</th></tr></thead>"
//                 +"<tbody>"
//                 +"<tr><td>1</td></tr>"
//                 +"<tr><td>2</td></tr>"
//                 +"<tr><td>3</td></tr>"
//                 +"<tr><td>4</td></tr>"
//                 +"</tbody>"
//                 +"</table>";

// let table = document.querySelector('tbody');
// table.innerHTML="<tr><td>1</td></tr>"
// table.innerHTML+="<tr><td>2</td></tr>"
// table.innerHTML+="<tr><td>3</td></tr>"
// table.innerHTML+="<tr><td>4</td></tr>"


// let table = document.querySelector('table');
// table.innerHTML = "<table><thead><tr><th>Nomer</th></tr></thead><tbody>";
// table.innerHTML +="<tr><td>1</td></tr>";
// table.innerHTML +="<tr><td>2</td></tr>";
// table.innerHTML +="<tr><td>3</td></tr>";
// table.innerHTML +="<tr><td>4</td></tr>";
// table.innerHTML +="<tr><td>5</td></tr>";
// table.innerHTML +="</tbody></table>";

for (let i = 0;i < 10;i++) {
    document.querySelector("#paragraf").innerHTML += "<h1>" + i + "</h1><br>";
}


let table = document.querySelector('table');
table.innerHTML = "<table><thead><tr><th>Nomer</th></tr></thead><tbody>";
for (let i = 1;i <= 100;i++) {
    table.innerHTML += "<tr><td>" + i + "</td></tr>";
}
table.innerHTML +="</tbody></table>";