const subTitle = document.getElementsByClassName('detailProduct');

const generalProduct = document.getElementById('generalProduct');
const deskripsiProduct = document.getElementById('deskripsiProduct');
const spesifikasiProduct = document.getElementById('spesifikasiProduct');

const generalContent = document.getElementById('generalContent');
const deskripsiContent = document.getElementById('deskripsiContent');
const spesifikasiContent = document.getElementById('spesifikasiContent');


generalProduct.addEventListener('click', function(){

  	deskripsiContent.style.display = "none";
  	spesifikasiContent.style.display = "none";
  	generalContent.style.display = "block";
  	
  	generalProduct.classList.add("active");
  	deskripsiProduct.className = deskripsiProduct.className.replace("active", "");
  	spesifikasiProduct.className = spesifikasiProduct.className.replace("active", "");

	});

deskripsiProduct.addEventListener('click', function(){
	
	deskripsiContent.style.display = "block";
  	spesifikasiContent.style.display = "none";
  	generalContent.style.display = "none";

  	deskripsiProduct.classList.add("active");
  	generalProduct.className = generalProduct.className.replace("active", "");
  	spesifikasiProduct.className = spesifikasiProduct.className.replace("active", "");

	});

spesifikasiProduct.addEventListener('click', function(){
	deskripsiContent.style.display = "none";
  	spesifikasiContent.style.display = "block";
  	generalContent.style.display = "none";
  	
  	spesifikasiProduct.classList.add("active");
  	deskripsiProduct.className = deskripsiProduct.className.replace("active", "");
  	generalProduct.className = generalProduct.className.replace("active", "");

	});

const ukuranProduk = document.querySelectorAll(".ukuranProduk div");
for (var i = ukuranProduk.length - 1; i >= 0; i--) {
  ukuranProduk[i].addEventListener('click', function() {
    ukuranProduk[i].style.backgroundColor = '#18ab27';
    ukuranProduk[i].style.color = 'white';
  });
}