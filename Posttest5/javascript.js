console.log("berhasil");
//penggunaan Pop Up Box
alert("Selamat Datang di Website YourCoffe");

//Penggunaan DOM
var keterangan = document.getElementById('keterangan');
keterangan.style.color = 'orange';
keterangan.style.textAlign = 'center';
keterangan.style.fontFamily = 'Nunito';

judul.addEventListener("mouseenter", function(){
    judul.style.backgroundColor = "white";
    judul.style.alignItems = 'center';
})

judul.addEventListener("mouseleave", function(){
    judul.style.backgroundColor = "#DEA057";
    judul.style.alignItems = 'center';
})
