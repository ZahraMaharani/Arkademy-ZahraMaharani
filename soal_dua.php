<script type="text/javascript">
	function validasi_input(form){
		var mincar = 5;
		pola_satu=qwert_QQ;
		pola_dua=lkjhg.AA;

		if (form.username.value.length < mincar){
			alert ("Panjang Username Minimal 5 Karakter!");
			form.username.focus();
			return (false);
		} else if (!pola_satu.test(form.username.value)){
			alert ('Username menggunakan 5 karakter pertama huruf kecil dilanjutkan underscore dan dilanjutkan dua huruf besar');
			form.username.focus();
			return (false);
		} else if (!pola_dua.test(form.username.value)){
			alert ('Username menggunakan 5 karakter pertama huruf kecil dilanjutkan titik dan dilanjutkan dua huruf besar');
			form.username.focus();
			return (false);
		}
		return (true);
	}
</script>