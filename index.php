<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Schedule App</title>
<link href="jquery.mobile.theme-1.4.5.css" rel="stylesheet" type="text/css"/>
<link href="jquery.mobile.structure-1.4.5.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header" data-theme="b">
		<h1>Home</h1>
	</div>
	<div data-role="content" class="ui-content">
		<ul data-role="controlgroup" data-type="vertical" data-theme="b"><br>
			<li><a href="commuter.php" class="ui-btn ui-btn-icon-right" data-transition="slide">Commuter Line</a></li><br>
            <li><a href="informasi.php" class="ui-btn ui-btn-icon-right" data-transition="slide">Informasi Stasiun</a></li><br>
			<li><a href="about.php" class="ui-btn ui-btn-icon-right" data-transition="slide">About</a></li><br>
		</ul>		
	</div>
	<div data-role="footer" data-theme="b" data-position="fixed">
		<h4></h4>
	</div>
</div>
</body>
</html>