<<!DOCTYPE html>
<html>
<head>
	<title>Schedule App</title>
	<link href="jquery.mobile.theme-1.4.5.css" rel="stylesheet" type="text/css"/>
	<link href="jquery.mobile.structure-1.4.5.min.css" rel="stylesheet" type="text/css"/>
	<script src="jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
</head>
<body>
<div data-role="page" id="proses">
	<div data-role="header" data-theme="b">
		<h1>Informasi Jadwal</h1>
	</div>
	<div data-role="content">
			<table data-role="table" class="ui-responsive">
				<thead>
					<tr>
						<th>NO. KA</th>
						<th>Relasi</th>
						<th>Trayek</th>
						<th>Waktu Tiba</th>
					</tr>
						<?php
						if(isset($_POST['proses'])){
							include 'koneksi.php';

							$relasi 	= $_POST['nama_relasi'];
							$noka		= $_POST['no_ka'];
							$Singgah	= $_POST['nama_stasiun'];

							$show = mysql_query("SELECT * FROM trayek , ka, relasi, stasiun WHERE relasi.kd_relasi=trayek.kd_relasi AND ka.kd_ka=trayek.kd_ka AND stasiun.nama_stasiun=trayek.nama_stasiun AND trayek.nama_stasiun='$Singgah' AND trayek.kd_ka='$noka' AND trayek.kd_relasi='$relasi' ") or die(mysql_error());
							while ($data = mysql_fetch_assoc($show)) {
								echo '<tr>';
								echo '<td>'.$data['no_ka'].'</td>';
								echo '<td>'.$data['nama_relasi'].'</td>';
								echo '<td>'.$data['nama_stasiun'].'</td>';
								echo '<td>'.$data['waktu_tiba'].'</td>';
								echo '</tr>'; }
							}else{
								echo '<tr><td colspan="4">Tidak ada data!</td></tr>';
							}
						?>
				</thead>
			</table>
	</div>
	<div data-role="footer" data-position="fixed" data-theme="b">
		<div class="ui-content">
			<div class="ui-block-a">
				<a href="#" class=" ui-btn ui-btn-inline ui-corner-all ui-btn-icon-left" data-transition="slide" data-direction="reverse" data-rel="back">back</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>