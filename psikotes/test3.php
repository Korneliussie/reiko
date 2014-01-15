<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Test Psikotest | Hubungan Kata</title>
<link href="../logo.png" rel='SHORTCUT ICON'/>
<style type="text/css">
.style6 {
font-size:44px;
color:#000000;
text-shadow:1PX 1PX #FF0000; 1PX;
font-weight: bold;
font-style:oblique;	
}
</style>
<script type="text/javascript">
	var detik="130"
	if (document.images)
	{
		parselimit=detik
	}
	function begintimer()
	{
		if (!document.images)
			return
		if (parselimit==1)
		{
			alert("Waktu telah habis")
			window.location="insert.php?act=cek3"
		}
		else
		{
			parselimit-=1
			curmin=Math.floor(parselimit/60)
			cursec=parselimit%60
			if (curmin!=0)
				curtime=curmin+":"+cursec+""
			else
				curtime=cursec+" detik"
				document.getElementById("servertime").innerHTML=curtime
				setTimeout("begintimer()",1000)
		}
	}
</script>
</head>

<body onLoad="begintimer()">
Pada tes ini diminta kemampuan mengerti akan arti kata, fungsi kata, dan pemakaian serta padanan fungsi dengan kata lain. Tugas anda adalah mencari kata dengan huruf kapital, padanannya dengan 5 kata-kata di bawahnya 
<?php
session_start();
$nama=$_SESSION['username'];
echo "$nama";
?>
 waktu anda adalah : <b><div class="style6" id="servertime"></div></b>
<br />
<form id="form3" action="insert.php?act=cek3" method="post">
1. SEMINAR : SARJANA = <br />
<input type="radio" name="1" value="0">a. Akademi : taruna<br />
<input type="radio" name="1" value="0">b. Rumah sakit : pasien<br />
<input type="radio" name="1" value="0">c. Ruang pengadilan : saksi<br />
<input type="radio" name="1" value="0">d. Kenservator : seniman<br />
<input type="radio" name="1" value="1">e. Perpustakaan : peneliti<br />
<br />
2. FIKTIF : FAKTA = <br />
<input type="radio" name="2" value="0">a. Dagelan : sandiwara<br />
<input type="radio" name="2" value="1">b. Dongeng : peristiwa<br />
<input type="radio" name="2" value="0">c. Dugaan : rekaan<br />
<input type="radio" name="2" value="0">d. Data : estimasi<br />
<input type="radio" name="2" value="0">e. Rencana : projeksi<br />
<br />
3. MATA : TELINGA = <br />
<input type="radio" name="3" value="0">a. Jari : tangan<br />
<input type="radio" name="3" value="1">b. Lidah : hidung<br />
<input type="radio" name="3" value="0">c. Kaki : paha<br />
<input type="radio" name="3" value="0">d. Lutut : siku<br />
<input type="radio" name="3" value="0">e. Perut : dada<br />
<br />
4. UANG : PUNDI-PUNDI = <br />
<input type="radio" name="4" value="0">a. Hubungan : jambangan<br />
<input type="radio" name="4" value="0">b. Gelas : nampan<br />
<input type="radio" name="4" value="1">c. Air : tempayan<br />
<input type="radio" name="4" value="0">d. Buku : percetakan<br />
<input type="radio" name="4" value="0">e. Rokok : asbak<br />
<br />
5. POHON : BUAH = <br />
<input type="radio" name="5" value="0">a. Domba : daging<br />
<input type="radio" name="5" value="1">b. Sapi : susu<br />
<input type="radio" name="5" value="0">c. Telur : ayam<br />
<input type="radio" name="5" value="0">d. Jentik : nyamuk<br />
<input type="radio" name="5" value="0">e. Setam : sapit<br />
<br />
<input type="submit" value="Next &raquo;" />
</form>
</body>
</html>
