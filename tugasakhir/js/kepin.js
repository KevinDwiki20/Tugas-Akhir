function submit(){
	var jaja = document.kepin.cari.value;
	var kaka = "https://www.google.com/search?q=" + jaja;
	window.open(kaka, "google", config="height=500 width=700 scrollbars=yes location=yes");
} 