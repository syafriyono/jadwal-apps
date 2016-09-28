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
<div data-role="page" id="commuter">
	<div data-role="header" data-theme="b">
		<h1>Commuter Line</h1>
	</div>
	<div data-role="content" class="ui-content">	
		<form method="POST" action="proses.php">
        	<fieldset class="ui-field-contain">
        		<label for="relasi">Relasi : </label>
            	<select name="nama_relasi" >
            		<option value="">--Pilih salah satu--</option>
            		<?php
            		include 'koneksi.php';
            		$query = mysql_query("SELECT * FROM relasi");
            		while ($hasil = mysql_fetch_assoc($query)){
            			echo "<option value=$hasil[kd_relasi]>$hasil[nama_relasi]</option>";
            		}
            		?>
            	</select>
             <!--</fieldset>
             <fieldset class="ui-field-contain"> -->        
                 <label for="no_ka">Nomer KA : </label>
                 <select name="no_ka">
                 	<option value="">--Pilih salah satu--</option>
                 	<?php
                 	include 'koneksi.php';
                 	$query2 = mysql_query("SELECT * FROM ka");
                 	while($k = mysql_fetch_assoc($query2)){
                 		echo "<option value=$k[kd_ka]>$k[no_ka]</option>";
                 	}
                 	?>
                 </select>
            <!-- </fieldset>
             <fieldset class="ui-field-contain">-->
             	<label for="stasiun">Stasiun Singgah :</label>
                <select name="nama_stasiun">
                	<option value="">--Pilih salah satu--</option>
                	<?php
                	include 'koneksi.php';
                	$query3 = mysql_query("SELECT * FROM stasiun");
                	while($s = mysql_fetch_assoc($query3)){
                		echo "<option value=$s[nama_stasiun]>$s[nama_stasiun]</option>";
                	}
                	?>
                 </select>
              </fieldset>
              <input type="submit" name="proses" value="Proses">     
        </form>
	</div>
	<div data-role="footer" data-position="fixed" data-theme="b">
		<div class="ui-content">
			<div class="ui-block-a">
				<a href="#" class="ui-btn ui-corner-all ui-btn-icon-left" data-transition="slide" data-direction="reverse" data-rel="back">Back</a>
			</div>
		</div>
</div>
</body>
</html>