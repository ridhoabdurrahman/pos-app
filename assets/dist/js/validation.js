$(function () {
	$("#formTambahBarang").validate({
		rules: {
			kdbarang: {
				required: true,
				pattern: "[A-Za-z0-9 ]+",
			},
		},
		messages: {
			kdbarang: {
				required: "Kode Barang masih Kosong !",
				pattern: "Nama Pekerjaan hanya bisa diisi oleh Huruf !",
			},
		},
		errorElement: "span",
		errorPlacement: function (error, element) {
			error.addClass("invalid-feedback");
			element.closest(".form-group").append(error);
		},
		highlight: function (element, errorClass, validClass) {
			$(element).addClass("is-invalid");
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass("is-invalid");
		},
	});
});
