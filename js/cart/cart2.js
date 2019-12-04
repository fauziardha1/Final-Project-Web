const domHargaBarang = document.getElementsByClassName('hargaBarang');
const domBanyakBarang = document.getElementsByClassName('banyakBarang');
const domSubTotal = document.getElementsByClassName('subTotal');
const domMinus = document.getElementsByClassName('kurang');
const domPlus = document.getElementsByClassName('tambah');

const domTotalBayar = document.getElementById('totalBayar');
var temp = 0;

for (let i = 0; i < domPlus.length; i++) {

	domPlus[i].addEventListener('click', function(){

		var hargaBarang = parseInt(domHargaBarang[i].innerHTML);
		var banyakBarang = parseInt(domBanyakBarang[i].value)+1;
		var calSubTotal = hargaBarang * banyakBarang;
		var totalBayar = parseInt(domTotalBayar.innerHTML);

		domSubTotal[i].innerHTML = calSubTotal;	
		temp = 1;
		domTotalBayar.innerHTML = totalBayar + hargaBarang;
	});


	domMinus[i].addEventListener('click', function(){

		var hargaBarang = parseInt(domHargaBarang[i].innerHTML);
		if (domBanyakBarang[i].value == 1) {
			var banyakBarang = parseInt(domBanyakBarang[i].value);	
		} else {
			var banyakBarang = parseInt(domBanyakBarang[i].value-1);
		}

		var calSubTotal = hargaBarang * banyakBarang;
		var totalBayar = parseInt(domTotalBayar.innerHTML);

		domSubTotal[i].innerHTML = calSubTotal;
		if (temp < 1) {
			
		} else if (banyakBarang == 1) {
			temp = temp-1
			domTotalBayar.innerHTML = totalBayar - hargaBarang;
			
			
		}else {
			domTotalBayar.innerHTML = totalBayar - hargaBarang;
		}

		// console.log(temp);	
	});
}
