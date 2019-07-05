function cari() {
	var kata = document.formcari.keyword.value;
	var hasil = "http://www.google.com/search?q=" + kata ;
	window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')
}

function tampilTanggal(){
	document.getElementById('demo').innerHTML=Date()

}


myImage.onclick = function() {
    var mySrc = myImage.getAttribute('src');
    if(mySrc === 'images/header1fix.png') {
      myImage.setAttribute ('src','images/header1fix.jpg');
    } else {
      myImage.setAttribute ('src','images/header1fix.jpg');
    }
}