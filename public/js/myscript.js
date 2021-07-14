const flashdata = $('.flash-data').data('flashdata');
console.log('flashdata');
if (flashdata) {
    Swal({
        title: 'Berhasil',
        text: 'Data barang berhasil dimasukan!!',
        type: 'success'
    });
}