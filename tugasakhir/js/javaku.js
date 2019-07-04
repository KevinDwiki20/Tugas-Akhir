function search(){
	var jaja = document.kepin.cari.value; //menampung data isi inputan dalam form sebelumnya kedalam variabel jaja
	var kaka = "http://www.google.com/search?q=" + jaja; //membuat variabel kaka dimana isinya yaitu link menuju ke google dengan kata kunci yang sesuai dengan varibel jaja sebelumnya
	window.open(kaka, 'google', config="height=500 width=700 scrollbars=yes location=yes"); //membuat jendela baru yang nantinya akan langsung terhubung ke google
} 

function lok1(){
	document.getElementById("tem1").setAttribute("href", "https://www.plaza-ambarrukmo.co.id/"); //mengeset hyperlink untuk menuju kehalaman https://www.plaza-ambarrukmo.co.id
	} 

function lok2(){
	document.getElementById("tem2").setAttribute("href", "https://www.21cineplex.com/theater/bioskop-empire-xxi,283,YGYEMPR.htm"); //mengeset hyperlink untuk menuju kehalaman www.21cineplex.com/theater/bioskop-empire-xxi,283,YGYEMPR.htm
	}

function lok3(){
	document.getElementById("tem3").setAttribute("href", "https://www.jogjacitymall.com/"); //mengeset hyperlink untuk menuju kehalaman https://www.jogjacitymall.com
	}
