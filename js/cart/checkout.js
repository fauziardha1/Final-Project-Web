const tombol =document.querySelector('#tombol');
tombol.addEventListener('click', function(){
 const href =$(this).attr('href');

let timerInterval
Swal.fire({
  title: 'Tunggu Sebentar',
  html: 'Pesanan Anda Sedang di Proses',
  timer: 2000,
  timerProgressBar: true,
  onBeforeOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      Swal.getContent().querySelector('b')
        .textContent = Swal.getTimerLeft()
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.timer
  ) {
    
      Swal.fire({
     
      icon: 'success',
       title: 'Pesanan Anda Berhasil',
      showConfirmButton: false,
      timer: 1500
     
        }).then((result) => {
          if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.timer
          ) {


            document.location.href = href;



          }
          else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Silahkan Masukkan Data',
              
              })
          }
})
  }
});
});