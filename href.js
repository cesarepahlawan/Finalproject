var slideIndex = 0; //deklarasi variabel
carousel(); //deklrasi fungsi

function carousel() { //deklrasi fungsi
  var i;//deklarasi variabel
  var x = document.getElementsByClassName("mySlides"); //variabel x di isi oleh objek yang menggunakan class mySlides
  for (i = 0; i < x.length; i++) { //perulangan i sampai -1 lebar x dengan increment
    x[i].style.display = "none"; 
  }
  slideIndex++; //increment
  if (slideIndex > x.length) {slideIndex = 1} //jika slideindex sudah lebih dari lebar x
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 5000); // waktu transisi
}
function openNav() {
  document.getElementById("list").style.width = "25%";//mengambil elemen dari id list
}
function closeNav() {
  document.getElementById("list").style.width = "0%";//mengambil elemen dari id list
}
