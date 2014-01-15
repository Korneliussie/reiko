<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Test Psikotest | Ketelitian</title>
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
	var detik="50"
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
			window.location="insert.php?act=cek2"
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
Test Ketelitian 
<?php
session_start();
$nama=$_SESSION['username'];
echo "$nama";
?>
 waktu anda adalah : <b><div class="style6" id="servertime"></div></b>
<br />
<form id="form2" action="insert.php?act=cek2" method="post">
1. 7353774 --- 7383774<br />
<input type="radio" name="1" value="0">a. Sama<br />
<input type="radio" name="1" value="1">b. Tidak Sama<br />
<br />
2. 4295454 --- 4295454<br />
<input type="radio" name="2" value="1">a. Sama<br />
<input type="radio" name="2" value="0">b. Tidak Sama<br />
<br />
3. 421001099178338 --- 421001099718338<br />
<input type="radio" name="3" value="0">a. Sama<br />
<input type="radio" name="3" value="1">b. Tidak Sama<br />
<br />
4. C77DB6FGH58KL --- C77DB6FGH58KL<br />
<input type="radio" name="4" value="1">a. Sama<br />
<input type="radio" name="4" value="0">b. Tidak Sama<br />
<br />
5. 421.+-,744.*-071. --- 421.+-,744*-071.<br />
<input type="radio" name="5" value="0">a. Sama<br />
<input type="radio" name="5" value="1">b. Tidak Sama<br />
<br />
<input type="submit" value="Next &raquo;" />
</form>
</body>
</html>
