<?php
include('config.php');
session_start();

if($_GET['act']=='admin'):
$username = $_POST['username'];
$password = $_POST['password'];
$en_pass = md5($password);
$query = mysql_query("insert into admin values('$username', '$en_pass')") or die(mysql_error());
 
if ($query) {
    header('location:login.php');
}
endif;

if($_GET['act']=='confirm'):
	$t_nama = $_GET['nama'];
	$input=$_GET['input'];
	if ($input=='terima'){
		mysql_query("UPDATE r_log SET tampil='1' WHERE pelamar='$t_nama'");
		header('location:pelamar.php');
	}
	if ($input=='tolak'){
		mysql_query("UPDATE r_log SET tampil='2' WHERE pelamar='$t_nama'");
		header('location:pelamar.php');
	}
endif;

if($_GET['act']=='register'):
	$tipe =$_FILES['f3']['type'];
	if(	$tipe != "image/jpg" AND
		$tipe != "image/jpeg" AND
		$tipe != "image/pjpeg" AND
		$tipe != "image/png" AND
		$tipe != "image/gif"
		)
	$tipe1 =$_FILES['ktp']['type'];
	if(	$tipe != "image/jpg" AND
		$tipe != "image/jpeg" AND
		$tipe != "image/pjpeg" AND
		$tipe != "image/png" AND
		$tipe != "image/gif"
		)
	$tipe2 =$_FILES['ijazah']['type'];
	if(	$tipe != "image/jpg" AND
		$tipe != "image/jpeg" AND
		$tipe != "image/pjpeg" AND
		$tipe != "image/png" AND
		$tipe != "image/gif"
		)
	$tipe3 =$_FILES['riwayat']['type'];
	if(	$tipe != "image/jpg" AND
		$tipe != "image/jpeg" AND
		$tipe != "image/pjpeg" AND
		$tipe != "image/png" AND
		$tipe != "image/gif"
		)
	echo '<p><b>Upload file gagal</b></p>
		<p>Tipe file yang diperbolehkan jpg, jpeg, pjpeg, png atau gif.</p>
		<p><a href="register.php">ULANGI</p></p>';
	else{	
		$f3	=$_FILES['f3']['name'];
		$ktp = $_FILES['ktp']['name'];
		$ijazah = $_FILES['ijazah']['name'];
		$riwayat = $_FILES['riwayat']['name'];
		$direktori	=$_POST['direktori'];
		$name = $_POST['nama'];
		$tgl = $_POST['lahir'];
		$email = $_POST['email'];
		$agama = $_POST['agama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		$kelamin = $_POST['var3'];
		$jabatan = $_POST['jabatan'];
		$folder = "pelamar/".$name;
		//$query = mysql_query("insert into r_pelamar values('', '$name', '$tgl', '$kelamin', '$agama', '$alamat', '$no_hp', '$email')") or die(mysql_error());
		//Cek pelamar
		$SQL ="SELECT nama FROM r_pelamar WHERE nama='$name'";
		$qGambar =@mysql_query($SQL);
		if(count(@mysql_fetch_array($qGambar)) > 1){
			echo '<p><b>Registrasi Gagal</b></p>
			<p>Kamu Sudah Pernah Mendaftar</p>
			<p><a href="register.php">KEMBALI</p></p>';	
		}
		else{
			//upload gambar
			$dir=mkdir($folder);
			move_uploaded_file($_FILES['f3']['tmp_name'],$folder.'/'.$f3);
			move_uploaded_file($_FILES['ktp']['tmp_name'],$folder.'/'.$ktp);
			move_uploaded_file($_FILES['ijazah']['tmp_name'],$folder.'/'.$ijazah);
			move_uploaded_file($_FILES['riwayat']['tmp_name'],$folder.'/'.$riwayat);
			//simpan data gambar
			@mysql_query("INSERT INTO r_log 
				SET pelamar		='$name',
					tampil		='0'") or die(mysql_error());
			$qu1=mysql_query("INSERT INTO r_pelamar
				SET nama 		='$name',
					tgl 		='$tgl',
					kelamin 	='$kelamin',
					agama 		='$agama',
					alamat 		='$alamat',
					hp 			='$no_hp',
					email 		='$email',
					f3			='$f3',
					ktp 		='$ktp',
					ijazah 		='$ijazah',
					riwayat 	='$riwayat',
					jabatan 	='$jabatan',
					direktori	='$folder'") or die(mysql_error());
			if($qu1){
			$_SESSION['username'] = $name;
			header("location:psikotes/test1.php");
			}
		}
	}
endif;
?>