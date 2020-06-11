const
	flashData = $('.flash-data').data('flashdata');
if (flashData) {
	Swal.fire({
		title: 'Data Berhasil ' + flashData,
		text: '',
		icon: 'success',
	});
}
$('.tombol-hapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah Yakin Dihapus?',

		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
