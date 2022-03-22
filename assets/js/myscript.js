const flashData = $(".flash-data").data("flashdata");

if (flashData) {
	swal.fire({
		title: "Data Siswa",
		text: "Berhasil" + flashData,
		type: "success",
	});
}

// Tombol-Hapus
$(".tombol-hapus").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Apakah anda yakin?",
		text: "Data Siswa akan dihapus",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus Data!",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
