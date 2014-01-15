<?php
include('config.php');
session_start();
	if($_GET['act']=='cek1')
	{
$name = $_SESSION['username'];
		$soal1 = $_POST['1'];
		$soal2 = $_POST['2'];
		$soal3 = $_POST['3'];
		$soal4 = $_POST['4'];
		$soal5 = $_POST['5'];
		$total = $soal1 + $soal2 + $soal3 + $soal4 + $soal5;
		//$qu=mysql_query("SELECT nilai from r_log WHERE pelamar='$name'");
		@mysql_query("UPDATE r_log SET nilai='10' WHERE pelamar='$name'");
		header('location:test2.php');
	}
	if($_GET['act']=='cek2')
	{
$name = $_SESSION['username'];
		$soal1 = $_POST['1'];
		$soal2 = $_POST['2'];
		$soal3 = $_POST['3'];
		$soal4 = $_POST['4'];
		$soal5 = $_POST['5'];
		$total = $soal1 + $soal2 + $soal3 + $soal4 + $soal5;
		//$qu=mysql_query("SELECT nilai from r_log WHERE pelamar='$name'");
		@mysql_query("UPDATE r_log SET nilai='5' WHERE pelamar='$name'");
		header('location:test3.php');
	}
	if($_GET['act']=='cek3')
	{
		$name = $_SESSION['username'];
		$soal1 = $_POST['1'];
		$soal2 = $_POST['2'];
		$soal3 = $_POST['3'];
		$soal4 = $_POST['4'];
		$soal5 = $_POST['5'];
		$total = (5 * 10)/15;
		//$qu=mysql_query("SELECT nilai from r_log WHERE pelamar='$name'");
		@mysql_query("UPDATE r_log SET nilai='3' WHERE pelamar='$name'");
		session_destroy();
		header('location:../register.php?message=finish');
	}
?>