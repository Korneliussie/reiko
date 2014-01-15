<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Test Psikotest | Logika Aritmatika</title>
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
	var detik="80"
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
			window.location="insert.php?act=cek1"
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
Logika Number
<?php
session_start();
$nama=$_SESSION['username'];
echo "$nama";
?>
 waktu anda adalah : <b><div class="style6" id="servertime"></div></b>
<br />
<form id="form1" action="insert.php?act=cek1" method="post">
1. jika x=1/16 dan y=16 % maka :<br />
<input type="radio" name="1" value="0">a. x&gt;y<br />
<input type="radio" name="1" value="1">b. x&lt;y<br />
<input type="radio" name="1" value="0">c. x=y<br />
<input type="radio" name="1" value="0">d. x dan y tak dapat ditentukan<br />
<input type="radio" name="1" value="0">e. x&sup2;&gt;y<br />
<br />
2. &frac14; berbanding &frac35; adalah<br />
<input type="radio" name="2" value="0">a. 1 berbanding 3<br />
<input type="radio" name="2" value="0">b. 3 berbanding 20<br />
<input type="radio" name="2" value="1">c. 5 berbanding 12<br />
<input type="radio" name="2" value="0">d. 3 berbanding 4<br />
<input type="radio" name="2" value="0">e. 5 berbanding 4<br />
<br />
3. 2&supx;=64 &nbsp; &nbsp; &nbsp; 3&supy;=81 maka<br />
<input type="radio" name="3" value="1">a. x&gt;y<br />
<input type="radio" name="3" value="0">b. x&lt;y<br />
<input type="radio" name="3" value="0">c. x=y<br />
<input type="radio" name="3" value="0">d. x dan y tak bisa ditentukan<br />
<input type="radio" name="3" value="0">e. x<sub>y</sub>&lt;y<br />
<br />
4. jika x = -(3)<sup>6</sup> maka :<br />
<input type="radio" name="4" value="0">a. x&gt;y<br />
<input type="radio" name="4" value="1">b. x&lt;y<br />
<input type="radio" name="4" value="0">c. x=y<br />
<input type="radio" name="4" value="0">d. x dan y tak bisa ditentukan<br />
<input type="radio" name="4" value="0">e. x<sub>y</sub>&gt;y<br />
<br />
5. jika a = 2 b = -2 &nbsp; x=(a-b)&sup2;<br />
<input type="radio" name="5" value="0">a. x&gt;y<br />
<input type="radio" name="5" value="0">b. x&lt;y<br />
<input type="radio" name="5" value="1">c. x=y<br />
<input type="radio" name="5" value="0">d. x dan y tak bisa ditentukan<br />
<input type="radio" name="5" value="0">e. x<sub>y</sub>&gt;y<br />
<br />
<input type="submit" value="Next &raquo;" />
</form>
</body>
</html>
