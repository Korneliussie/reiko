<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="js/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.0"></script>
<script type="text/javascript">$(document).ready(function() {
		$('.fancybox').fancybox();
		});
</script>
</head>

<body>
<!--<form id="contacts-form" action="" method="post">-->
	<table border="1" width="100%">
		<tr>
			<th width="150px">Nama</th>
			<th width="200px">Alamat</th>
			<th width="70px">No. Hp</th>
			<th width="70px">Foto 3x4</th>
			<th width="70px">KTP</th>
			<th width="70px">Ijazah</th>
			<th width="70px">Riwayat Hidup</th>
			<th width="90px">Melamat Sebagai</th>
			<th width="55px">Score</th>
			<th width="60px">Terima</th>
		</tr>
		<?php
		$get = mysql_query("SELECT * FROM r_pelamar INNER JOIN r_log ON r_pelamar.nama=r_log.pelamar;");
		while($get_row = mysql_fetch_array($get)){
			echo "<tr>";
			echo "<td>".$get_row['nama']."</td>";
			echo "<td>".$get_row['alamat']."</td>";
			echo "<td>".$get_row['hp']."</td>";
			?>
			<td>
			<a class="fancybox" href='pelamar/<?=$get_row['nama'];?>/<?=$get_row['f3'];?>' data-fancybox-group="gallery" style="text-decoration:none"> <input type="button" value="Preview" /> </a>
			</td>
			<td>
			<a class="fancybox" href='pelamar/<?=$get_row['nama'];?>/<?=$get_row['ktp'];?>' data-fancybox-group="gallery" style="text-decoration:none"> <input type="button" value="Preview" /> </a>
			</td>
			<td>
			<a class="fancybox" href='pelamar/<?=$get_row['nama'];?>/<?=$get_row['ijazah'];?>' data-fancybox-group="gallery" style="text-decoration:none"> <input type="button" value="Preview" /> </a>
			</td>
			<td>
			<a class="fancybox" href='pelamar/<?=$get_row['nama'];?>/<?=$get_row['riwayat'];?>' data-fancybox-group="gallery" style="text-decoration:none"> <input type="button" value="Preview" /> </a>
			</td>
			<?php
			echo "<td>".$get_row['jabatan']."</td>";
			echo "<td>".$get_row['nilai']."</td>";
			echo "<td align='center'>
			<script type=\"text/javascript\">
			function terima() {
			var answer = confirm('Anda yakin ?')
			if (answer){
				window.location = 'insert.php?act=confirm&input=terima&nama=$get_row[nama]';
			}
			else{
				window.location = 'pelamar.php?input=cancel';
			}
			}
			function tolak() {
			var answer = confirm('Anda yakin ?')
			if (answer){
				window.location = 'insert.php?act=confirm&input=tolak&nama=$get_row[nama]';
			}
			else{
				window.location = 'pelamar.php?input=cancel';
			}
			}
			</script>
			";
			if ($get_row['tampil'] == 0) {
			echo "<a href=# onClick=terima()>Y</a> / <a href=# onClick=tolak()>T</a>";
			}
			elseif ($get_row['tampil'] == 1) {
			echo "Diterima";
			}
			elseif ($get_row['tampil'] == 2) {
			echo "Ditolak";
			}
			echo"
			</td>
			</tr>";
		}
			?>
	</table>

</body>
</html>
