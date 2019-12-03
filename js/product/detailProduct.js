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

// ngambil semua size
const ukuranProduk = document.getElementsByClassName('ukuranProduk');

// ngambil masing-masing size
const size38 = document.getElementById('size38');
const size39 = document.getElementById('size39');
const size40 = document.getElementById('size40');
const size41 = document.getElementById('size41');
const size42 = document.getElementById('size42');
const size43 = document.getElementById('size43');

// ketika size38 di klik
size38.addEventListener('click', function(){
  // maka div size38 background dan color nya dirubah
  size38.style.backgroundColor = '#18ab27';
  size38.style.color = 'white';

  // dan div semua size selain size38 akan dikembalikan seperti semula
  for (let i =  0; i < ukuranProduk.length; i++) {
    if (i != 0) {
      ukuranProduk[i].style.backgroundColor = 'white';
      ukuranProduk[i].style.color = 'black';
    }
  }

});

// sama seperti komenan size38
size39.addEventListener('click', function(){
  size39.style.backgroundColor = '#18ab27';
  size39.style.color = 'white';

  for (let i =  0; i < ukuranProduk.length; i++) {
    if (i != 1) {
      ukuranProduk[i].style.backgroundColor = 'white';
      ukuranProduk[i].style.color = 'black';
    }
  }

});

size40.addEventListener('click', function(){
  size40.style.backgroundColor = '#18ab27';
  size40.style.color = 'white';

  for (let i =  0; i < ukuranProduk.length; i++) {
    if (i != 2) {
      ukuranProduk[i].style.backgroundColor = 'white';
      ukuranProduk[i].style.color = 'black';
    }
  }

});

size41.addEventListener('click', function(){
  size41.style.backgroundColor = '#18ab27';
  size41.style.color = 'white';

  for (let i =  0; i < ukuranProduk.length; i++) {
    if (i != 3) {
      ukuranProduk[i].style.backgroundColor = 'white';
      ukuranProduk[i].style.color = 'black';
    }
  }

});

size42.addEventListener('click', function(){
  size42.style.backgroundColor = '#18ab27';
  size42.style.color = 'white';

  for (let i =  0; i < ukuranProduk.length; i++) {
    if (i != 4) {
      ukuranProduk[i].style.backgroundColor = 'white';
      ukuranProduk[i].style.color = 'black';
    }
  }

});

size43.addEventListener('click', function(){
  size43.style.backgroundColor = '#18ab27';
  size43.style.color = 'white';

  for (let i =  0; i < ukuranProduk.length; i++) {
    if (i != 5) {
      ukuranProduk[i].style.backgroundColor = 'white';
      ukuranProduk[i].style.color = 'black';
    }
  }

});


