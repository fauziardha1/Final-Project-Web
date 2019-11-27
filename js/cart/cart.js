$(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});


const hargaBarang = document.getElementsByClassName('hargaBarang');
const banyakBarang = document.getElementsByClassName('banyakBarang');
const subTotal = document.getElementsByClassName('subTotal');
const totalBayar = document.getElementsByClassName('totalBayar');

for ( let i = 0; i < banyakBarang.length; i++) {
	subTotal[i].innerText = hargaBarang[i].innerText*banyakBarang[i].innerText;
	console.log(subTotal[i].innerText);
}

