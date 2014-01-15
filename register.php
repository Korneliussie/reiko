<?php
session_start();
include('config.php') ;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link href="logo.png" rel='SHORTCUT ICON'/>
<title>CV. Yaki Utama - Lowongan Pekerjaan</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_300.font.js" type="text/javascript"></script>
<script language="JavaScript" type="text/JavaScript">
function ubah()
{
    <?php
    $sql1="SELECT * FROM jabatan ORDER BY nama ASC";  
    $qu1 =mysql_query($sql1);
    while($ru=mysql_fetch_array($qu1)){
    $idp = $ru['jid'];
    echo "if(document.ContactForm.jabatan.value == \"". $idp ."\" )";
    echo "{";
    $sql2 = "SELECT * FROM jabatan WHERE jid = '".$idp."'";
    $qu2 = mysql_query($sql2);
    //$content = "document.getElementById('ket').innerHTML = \"";
    while($ru1=mysql_fetch_array($qu2)){
       //$content .= "<input type='text' maxlength='255' value='".$ru1['keterangan']."'>";
        echo "document.getElementById('n_kerusakan').innerHTML = '".$ru1['nama'] ."';";
    //echo "document.getElementById('nilai_cf').innerHTML = '".$ru1['nilai_cf'] ."';";
    //echo "}";
    }
    //$content .= "\"";
    //echo $content;
    echo "}\n";
  }
    ?>
}
</script>
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/ie_png.js"></script>
	<script type="text/javascript">
		 ie_png.fix('.png, #header .row-2 ul li a, #content, .list li');
	</script>
<![endif]-->
</head>
<?php
    if (!empty($_GET['message']) && $_GET['message'] == 'finish') {
		session_destroy();
    	echo "<script type='text/javascript'>alert('Jika anda diterima kami akan menghubungi anda via telepon')</script>";
  	}
?>
<body id="page5">
<div class="tail-top">
	<div class="tail-bottom">
		<div class="body-bg">
			<!-- HEADER -->
			<div id="header">
				<div class="extra"><img src="images/header-img.jpg" alt="" /></div>
				<div class="row-1">
					<div class="fleft"><a href="home.php"><img src="images/logo.gif" alt="" /></a></div>
					<div class="fright"><img src="images/phone.gif" alt="" /></div>
				</div>
				<div class="row-2">
					<ul>
						<li class="m1"><a href="home.php">Home</a></li>
						<li class="m2"><a href="about-us.php">About</a></li>
						<li class="m3"><a href="services.php">Services</a></li>
						<li class="m4"><a href="support.php">Support</a></li>
						<li class="m5"><a href="register.php" class="active">Register</a></li>
						<li class="m6">
						<?php
						if (!empty($_SESSION['username'])) {
    					echo "<a href='logout.php' style='text-decoration:none'>Logout</a>";
						}
						elseif (empty($_SESSION['username'])) {
    					echo "<a href='login.php' style='text-decoration:none'>Login</a>";
						}
						?>
						</li>
					</ul>
				</div>
				<div class="row-3"><img src="images/slogan.gif" alt="" />
					
				</div>
			</div>
			<!-- CONTENT -->
			<div id="content"><div class="inner_copy">More <a href="http://www.templates.com/">Website Templates</a> @ Templates.com!</div>
				<div class="tail-right">
					<div class="wrapper">
						<div class="col-1">
							<div class="indent">
								<h3>Registrasi Lowongan Pekerjaan</h3>
								<form id="contacts-form" action="insert.php?act=register" method="post" enctype="multipart/form-data">
									<font color="red">*</font><b>Harus Di isi</b>
									<div id="form"><label>Foto 3x4<font color="red">*</font></label><input name="f3" type="file" id="f3" accept="image/*"/><input type="hidden" name="direktori" id="direktori" value="pelamar" /></div>
									<fieldset>
									<div class="field"><label>Nama Lengkap<font color="red">*</font></label><input type="text" name="nama" class="input" value="" required="required"/></div>
									<div class="field"><label>Tgl Lahir<font color="red">*</font></label><input type="text" name="lahir" placeholder="format ex:(yyyy-mm-dd)" class="input" value="" required="required"/></div>
									<div class="field"><label>Jenis Kelamin<font color="red">*</font></label>
									<input type="radio" name="var3" value="laki-laki">Laki-Laki
									<input type="radio" name="var3" value="perempuan">Perempuan
									</div>
									<div class="field"><label>Agama<font color="red">*</font></label><input type="text" name="agama" class="input" value="" required="required"/></div>
									<div class="field"><label>Alamat<font color="red">*</font></label><textarea cols="1" rows="1" name="alamat" required="required"></textarea></div>
									<div class="field"><label>No. Handphone<font color="red">*</font></label><input type="text" name="no_hp" class="input" value="" required="required"/></div>
									<div class="field"><label>E-mail<font color="red">*</font></label><input type="text" name="email" class="input" value="" required="required"/></div>
									</fieldset>
									<div id="form"><label>KTP<font color="red">*</font></label><input name="ktp" type="file" id="ktp" accept="image/*"/></div>
									<div id="form"><label>Ijazah<font color="red">*</font></label><input name="ijazah" type="file" id="ijazah" accept="image/*"/></div>
									<div id="form"><label>Riwayat Hidup<font color="red">*</font></label><input name="riwayat" type="file" id="riwayat" accept="image/*"/></div>
									<div id="form"><label>Melamat Sebagai</label>
									<select name="jabatan">
									  <option value="None" selected>- Select -</option>
									  <?php
									  include('config.php');
										  $sql="SELECT * FROM jabatan ORDER BY jid ASC";
										  $qu =mysql_query($sql);
										  while ($r=mysql_fetch_array($qu)){
										  echo "<option value='".$r['nama']."'>".$r['nama']."</option>";
										}
									  ?>
									</select></div>
									<div class="alignright"><input type="submit" id="submit" value="Register" /></div>
								</form>
							</div>
						</div>
						<div class="col-2">
							<ul>
								<li><strong><a href="#">September 15, 2013</a></strong>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</li>
								<li><strong><a href="#">November 31, 2013</a></strong>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</li>
								<li><strong><a href="#">Desember 22, 2013</a></strong>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugitd quia.</li>
								<li><strong><a href="#">January 1, 2014</a></strong>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- FOOTER -->
			<div id="footer">
				<div class="indent">
					<div class="fleft">Designed by: <a href="#">Reiko Pekanseon</a></div>
					<div class="fright">Copyright &copy; 2014 - Reiko Pekanseon</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>