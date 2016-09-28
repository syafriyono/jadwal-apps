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
<div data-role="page" id="informasi">
	<div data-role="header" data-theme="b" data-position="fixed">
		<h1>Informasi Stasiun</h1>
	</div>
	<div data-role="main" class="ui-content">	
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider" data-theme="b">Bekasi <-> JakartaKota</li>
			<li><a href="#BekasiPage">Bekasi</a></li>
			<li><a href="#kranji">Kranji</a></li>
			<li><a href="#Cakung">Cakung</a></li>
			<li><a href="#klenderbaru">Klender Baru</a></li>
			<li><a href="#Buaran">Buaran</a></li>
			<li><a href="#klender">Klender</a></li>
			<li><a href="#jatinegara">Jatinegara</a></li>
			<li><a href="#manggarai">Manggarai</a></li>
			<li><a href="#Cikini">Cikini</a></li>
			<li><a href="#gondangdia">Gondangdia</a></li>
			<li><a href="#juanda">Juanda</a></li>
			<li><a href="#sawahbesar">Sawah Besar</a></li>
			<li><a href="#manggabesar">Mangga Besar</a></li>
			<li><a href="#jayakarta">Jayakarta</a></li>
			<li><a href="#kota">Jakarta Kota</a></li>
			<li data-role="list-divider" data-theme="b">Bogor <-> Jatinegara</li>
			<li><a href="#Bogor">Bogor</a></li>
			<li><a href="#Cilebut">Cilebut</a></li>
			<li><a href="#BojongGede">Bojong Gede</a></li>
			<li><a href="#Citayam">Citayam</a></li>
			<li><a href="#DepokLama">Depok</a></li>
			<li><a href="#DepokBaru">Depok Baru</a></li>
			<li><a href="#pondokcina">Pondok Cina</a></li>
			<li><a href="#u.i">Univ. Indonesia</a></li>
			<li><a href="#unpan">Univ. Pancasila</a></li>
			<li><a href="#lentengagung">Lenteng Agung</a></li>
			<li><a href="#tanjungbarat">Tanjung Barat</a></li>
			<li><a href="#pasarminggu">Pasar Minggu</a></li>
			<li><a href="#pasarminggubaru">Pasar Minggu Baru</a></li>
			<li><a href="#Kalibata">Duren Kalibata</a></li>
			<li><a href="#Caawang">Cawang</a></li>
			<li><a href="#tebet">Tebet</a></li>
			<li><a href="#manggarai">Manggarai</a></li>
			<li><a href="#sudirman">Sudirman</a></li>
			<li><a href="#karet">Karet</a></li>
			<li><a href="#tanahabang">Tanah Abang</a></li>
			<li><a href="#duri">Duri</a></li>
			<li><a href="#kampungbandan">Kampung Bandan</a></li>
			<li><a href="#rajawali">Rajawali</a></li>
			<li><a href="#kemayoran">Kemayoran</a></li>
			<li><a href="#senen">Pasar Senen</a></li>
			<li><a href="#sentiong">Gang Sentiong</a></li>
			<li><a href="#kramat">Kramat</a></li>
			<li><a href="#pondokjati">Pondok Jati</a></li>
			<li><a href="#jatinegara">Jatinegara</a></li>
			<li data-role="list-divider" data-theme="b">Duri <-> Tanggerang</li>
			<li><a href="#duri">Duri</a></li>
			<li><a href="#pesing">Pesing</a></li>
			<li><a href="#BojongIndah">Bojong Indah</a></li>
			<li><a href="#rawabuaya">Rawa Buaya</a></li>
			<li><a href="#kalideres">Kali Deres</a></li>
			<li><a href="#poris">Poris</a></li>
			<li><a href="#BatuCeper">Batu Ceper</a></li>
			<li><a href="#tangerang">Tanggerang</a></li>
			<li data-role="list-divider" data-theme="b">Tanah Abang <-> Maja</li>
			<li><a href="#tanahabang">Tanah Abang</a></li>
			<li><a href="#palmerah">Palmerah</a></li>
			<li><a href="#kebayoran">Kebayoran</a></li>
			<li><a href="#pondokranji">Pondok Ranji</a></li>
			<li><a href="#jurangmangu">Jurang mangu</a></li>
			<li><a href="#sudimara">Sudimara</a></li>
			<li><a href="#rawabuntu">Rawa Buntu</a></li>
			<li><a href="#serpong">Serpong</a></li>
			<li><a href="#cisauk">Cisauk</a></li>
			<li><a href="#cicayur">Cicayur</a></li>
			<li><a href="#parungpanjang">Parung Panjang</a></li>
			<li><a href="#">Cilejit</a></li>
			<li><a href="#">Daru</a></li>
			<li><a href="#">Tenjo</a></li>
			<li><a href="#">Tigaraksa</a></li>
			<li><a href="#">Maja</a></li>
			<li data-role="list-divider" data-theme="b">JakartaKota <-> Tanjung Priok</li>
			<li><a href="#kota">Jakarta Kota</a></li>
			<li><a href="#kampungbandan">Kampung Bandan</a></li>
			<li><a href="#priok">Tanjung Priok</a></li>
			<li data-role="list-divider" data-theme="b"><h2></h2></li>
		</ul>
		<div data-role="panel" id="BekasiPage" data-display="overlay" data-position="right">
			<h2>Stasiun Bekasi</h2>
			<p>Address : Jl. Ir. H. Juanda No.1 Bekasi</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="BojongIndah" data-display="overlay" data-position="right">
			<h2>Stasiun Bojong Indah</h2>
			<p>Address :  Jl. Bojong Indah Kel. Duri Kosambi Kec. Rawa buaya</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="BojongGede" data-display="overlay" data-position="right">
			<h2>Stasiun Bojong Gede</h2>
			<p>Address : Jl. Bojong Gede No 1 Bogor, Jawa Barat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="Bogor" data-display="overlay" data-position="right">
			<h2>Stasiun Bogor</h2>
			<p>Address : Jl. Nyi Raya Permas No 1 Bogor</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="BatuCeper" data-display="overlay" data-position="right">
			<h2>Stasiun Batu Ceper</h2>
			<p>Address : Jl. Benteng Betawi</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="Buaran" data-display="overlay" data-position="right">
			<h2>Stasiun Buaran</h2>
			<p>Address : Jl. I Gusti Ngurahrai Jakarta Timur</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="Cikini" data-display="overlay" data-position="right">
			<h2>Stasiun Cikini</h2>
			<p>Address : Jl. Pegangsaan No. 6 Jakarta Pusat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="Cilebut" data-display="overlay" data-position="right">
			<h2>Stasiun Cilebut</h2>
			<p>Address : Jl. Raya Cilebut No.1 Bogor</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="Citayam" data-display="overlay" data-position="right">
			<h2>Stasiun Citayam</h2>
			<p>Address : Jl Raya Citayam No.1 Kotamadya Depok</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="Cakung" data-display="overlay" data-position="right">
			<h2>Stasiun Cakung</h2>
			<p>Address : Jl. Bintara Raya No.1</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="Cawang" data-display="overlay" data-position="right">
			<h2>Stasiun Cawang</h2>
			<p>Address : Jl. Tebet timur Kel. Kebon baru Kec. Kebon baru</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="DepokLama" data-display="overlay" data-position="right">
			<h2>Stasiun Depok Lama</h2>
			<p>Address : Jl. Stasiun No.1 Depok Pancoranmas</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="DepokBaru" data-display="overlay" data-position="right">
			<h2>Stasiun Depok Baru</h2>
			<p>Address : Jl. Arif Rahman Hakim No.1 Depok</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="Kalibata" data-display="overlay" data-position="right">
			<h2>Stasiun Duren Kalibata</h2>
			<p>Address : Jl. Raya Rawajati No.1 Jakarta selatan</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="duri" data-display="overlay" data-position="right">
			<h2>Stasiun Duri</h2>
			<p>Address : Jl. Pos Duri No. 1 Tambora Jakarta Barat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="gondangdia" data-display="overlay" data-position="right">
			<h2>Stasiun Gondangdia</h2>
			<p>Address : Jl. Srikaya No.1 Jakarta Pusat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="sentiong" data-display="overlay" data-position="right">
			<h2>Stasiun Gang Sentiong</h2>
			<p>Address : Jl. Sentiong No.1 Jakarta Pusat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="kota" data-display="overlay" data-position="right">
			<h2>Stasiun Jakarta Kota</h2>
			<p>Address : Jl. Taman Stasiun Kota No.1 Jakarta Barat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="jatinegara" data-display="overlay" data-position="right">
			<h2>Stasiun Jatinegara</h2>
			<p>Address : Jl. Bekasi Timur No.1 Jakarta Timur</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="juanda" data-display="overlay" data-position="right">
			<h2>Stasiun Juanda</h2>
			<p>Address : Jl. Ir. H. Juanda No 1 Jakarta Pusat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="jayakarta" data-display="overlay" data-position="right">
			<h2>Stasiun Jayakarta</h2>
			<p>Address : Jl. Pangeran Jayakarta No. 1 Jakarta Barat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="kebayoran" data-display="overlay" data-position="right">
			<h2>Stasiun Kebayoran</h2>
			<p>Address : Jl. Stasiun No 1 Kebayoran lama Jakarta Selatan</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="kalideres" data-display="overlay" data-position="right">
			<h2>Stasiun kalideres</h2>
			<p>Address : Jl. Kalideres No. 1 Jakarta Barat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="klender" data-display="overlay" data-position="right">
			<h2>Stasiun Klender</h2>
			<p>Address : Jl. Bekasi Timur No. 1 Jakarta Timur</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="klenderbaru" data-display="overlay" data-position="right">
			<h2>Stasiun Klender Baru</h2>
			<p>Address : Jl. I Gusti Ngurahrai raya No 1 Penggilingan Jakarta Timur</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="kemayoran" data-display="overlay" data-position="right">
			<h2>Stasiun Kemayoran</h2>
			<p>Address : Jl. Garuda No. 23 Jakarta Pusat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="kramat" data-display="overlay" data-position="right">
			<h2>Stasiun Kramat</h2>
			<p>Address : Jl. Salemba Tengah No 78-79 Jakarta Pusat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="kampungbandan" data-display="overlay" data-position="right">
			<h2>Stasiun Kampung Bandan</h2>
			<p> Address : Jl. Mangga Dua Raya Jakarta Utara</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="kranji" data-display="overlay" data-position="right">
			<h2>Stasiun Kranji</h2>
			<p>Address : Jl Jendral Sudirman No. 1 Bekasi Barat kodya Bekasi</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="karet" data-display="overlay" data-position="right">
			<h2>Stasiun Karet</h2>
			<p>Address : Jl. KH. mas Mansyur Jakarta Pusat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="lentengagung" data-display="overlay" data-position="right">
			<h2>Stasiun Lenteng Agung</h2>
			<p>Address : Jl. Raya Lenteng Agung No 1 Jakarta Selatan</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="manggabesar" data-display="overlay" data-position="right">
			<h2>Stasiun Mangga Besar</h2>
			<p>Address : Jl. Raya Mangga Besar No 1 Jakarta Barat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="manggarai" data-display="overlay" data-position="right">
			<h2>Stasiun Manggarai</h2>
			<p>Address : Jl. Manggarai Utara No 1 Jakarta Selatan</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="poris" data-display="overlay" data-position="right">
			<h2>Stasiun Poris</h2>
			<p>Address : Jl. Maulana Hasanudin</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="pondokranji" data-display="overlay" data-position="right">
			<h2>Stasiun Pondok Ranji</h2>
			<p>Address : Jl. Pondok Ranji Gardu Kec. Ciputat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="palmerah" data-display="overlay" data-position="right">
			<h2>Stasiun Palmerah</h2>
			<p>Address : Jl. Alteri No 1 Kelurahan Gelora Jakarta Pusat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="pondokcina" data-display="overlay" data-position="right">
			<h2>Stasiun Pondok Cina</h2>
			<p>Address : Jl. Stasiun pondok cina No. 1 Margonda Depok</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="pondokjati" data-display="overlay" data-position="right">
			<h2>Stasiun Pondok Jati</h2>
			<p>Address : Jl. Gang Bunga Dalam I No. 1 Pondok Jati Jakarta Timur</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="senen" data-display="overlay" data-position="right">
			<h2>Stasiun Pasar Senen</h2>
			<p>Address : Jl. Kramat Bundar No. 1 Senen Jakarta Pusat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="pesing" data-display="overlay" data-position="right">
			<h2>Stasiun Pesing</h2>
			<p>Address : Jl. Daan Mogot KM.2 Petamburan Jakarta Barat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="pasarminggu" data-display="overlay" data-position="right">
			<h2>Stasiun Pasar Minggu</h2>
			<p>Address : Jl. Pasar Raya Minggu No.1 Jakarta Selatan</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="pasarminggubaru" data-display="overlay" data-position="right">
			<h2>Stasiun Pasar Minggu Baru</h2>
			<p>Address : Jl. Rajawali Kel. Pejaten Timur Pasar Minggu Jakarta Selatan</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="rajawali" data-display="overlay" data-position="right">
			<h2>Stasiun Rajawali</h2>
			<p>Address : Jl. Industri Kel. Pademangan Jakarta Barat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="rawabuntu" data-display="overlay" data-position="right">
			<h2>Stasiun Rawa Buntu</h2>
			<p>Address : Jl. Raya Rawabuntu Serpong</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="rawabuaya" data-display="overlay" data-position="right">
			<h2>Stasiun Rawa Buaya</h2>
			<p>Address : Jl. Duri Kosambi Tangerang</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="sudimara" data-display="overlay" data-position="right">
			<h2>Stasiun Sudimara</h2>
			<p>Address : Jl. Jombang Stasiun Ciputat Tangerang</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="serpong" data-display="overlay" data-position="right">
			<h2>Stasiun Serpong</h2>
			<p>Address : Jl. Stasiun serpong No.1 Tangerang Banten</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="sudirman" data-display="overlay" data-position="right">
			<h2>Stasiun Sudirman</h2>
			<p>Address : Jl. Blora No.1 Jakarta Pusat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="sawahbesar" data-display="overlay" data-position="right">
			<h2>Stasiun Sawah Besar</h2>
			<p>Address : Jl. Samanhudi Jakarta Pusat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="tebet" data-display="overlay" data-position="right">
			<h2>Stasiun Tebet</h2>
			<p>Address : Jl. Lapangan Ros No.1 Tebet Jakarta Selatan</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="tanahabang" data-display="overlay" data-position="right">
			<h2>Stasiun Tananh Abang</h2>
			<p>Address : Jl. Kampung Bali No.1 Tanah Abang Jakarta Pusat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="tangerang" data-display="overlay" data-position="right">
			<h2>Stasiun Tangerang</h2>
			<p>Address : Jl. KH Asnawi Tangerang Banten</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="tanjungbarat" data-display="overlay" data-position="right">
			<h2>Stasiun Tanjung Barat</h2>
			<p>Address : Jl. Raya Lenteng Agung</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="priok" data-display="overlay" data-position="right">
			<h2>Stasiun Tanjung Priok</h2>
			<p>Address : Jl. Taman Stasiun No.1 Jakarta Utara</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="u.i" data-display="overlay" data-position="right">
			<h2>Stasiun Univ. Indonesia</h2>
			<p>Address : Jl. Margonda Raya Gg. Sawo Universitas Indonesia</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="unpan" data-display="overlay" data-position="right">
			<h2>Stasiun Univ. Pancasila</h2>
			<p>Address : Jl. Srengseng Sawah No.1 Jakarta Selatan</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="jurangmangu" data-display="overlay" data-position="right">
			<h2>Stasiun Jurang Mangu</h2>
			<p>Address : Jl. Cendrawasih RT.01 RW.01 Kec Ciputat Tangerang Selatan</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="cisauk" data-display="overlay" data-position="right">
			<h2>Stasiun Cisauk</h2>
			<p>Address : Desa Tampora RT.03 RW.01 Kec. Cisauk Tangerang Banten</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="cicayur" data-display="overlay" data-position="right">
			<h2>Stasiun Cicayur</h2>
			<p>Address : Desa Cicayur Kec. Cisauk Tangerang Banten</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>
		<div data-role="panel" id="parungpanjang" data-display="overlay" data-position="right">
			<h2>Stasiun Parung Panjang</h2>
			<p>Address :  Jl. Sayuti No.02 Kec. Parung Panjang Bogor Jawa Barat</p>
			<a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-
			corner-all ui-btn-b">Close</a>
		</div>


	</div>
	<div data-role="footer" data-position="fixed" data-theme="b" >
		<div class="ui-content">
			<div class="ui-block-a">
			<a href="#" class=" ui-btn ui-btn-inline ui-corner-all ui-btn-icon-left" data-transition="slide" data-direction="reverse" data-rel="back">back</a>
			</div>
		</div>
	</div>
</div>

</body>
</html>