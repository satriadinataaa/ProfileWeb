<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
#kiri
{
width:50%;

float:left;
padding: 3px;
}
#kanan
{
width:30%;

float:right;
padding: 3px;
}
#tengah
{
width:100%;
float:center;
padding: 3px;
}
div {
	width:100%;
	height: 50px;
}
.garis_tepi1 {
	border: 1px solid black;
}

		* {
		    box-sizing: border-box;
		}


		/* Create three equal columns that floats next to each other */
		.column {
		    float: left;
		    width: 33.33%;
		    padding: 13px;
		    height: 300px; /* Should be removed. Only for demonstration */
		}

		/* Clear floats after the columns */
		.row:after {
		    content: "";
		    display: table;
		    clear: both;
		}

hr.style{
	border-top: 1px solid #000;
}
</style>
</head>
<body>
	<table>
	<tr>

	</tr>
	</table>
	<center style="margin-bottom:10px"><h3><b>Pendaftaran Siswa Baru</b></h3></center>
  <table class="" border="1px" width="100%">
			<thead>
				<tr >
						<td width="30%">Nama Siswa</td>
						<td >&nbsp; <?= $dataku['nama_siswa']?></td>
				</tr>
        <tr>
						<td width="30%">Jenis Kelamin</td>
						<td >&nbsp; <?= $dataku['jenis_kelamin']?></td>
				</tr>
        <tr>
						<td width="30%">Tempat Tanggal Lahir</td>
						<td >&nbsp; <?= $dataku['tempat_lahir']?> , <?= $dataku['tanggal_lahir']?></td>
				</tr>
        <tr>
						<td width="30%">Cabang Auladi</td>
						<td >&nbsp; <?= $dataku['cabang']?></td>
				</tr>
        <tr>
						<td width="30%">Jenjang</td>
						<td >&nbsp; <?= $dataku['jenjang']?></td>
				</tr>
        <tr>
						<td width="30%">Nama Ayah</td>
						<td >&nbsp; <?= $dataku['nama_ayah']?></td>
				</tr>
        <tr>
						<td width="30%">Telepon Ayah</td>
						<td >&nbsp; <?= $dataku['telepon_ayah']?></td>
				</tr>
        <tr>
						<td width="30%">Email Ayah</td>
						<td >&nbsp; <?= $dataku['email_ayah']?></td>
				</tr>
        <tr>
						<td width="30%">Pekerjaan Ayah</td>
						<td >&nbsp; <?= $dataku['pekerjaan_ayah']?></td>
				</tr>
        <tr>
						<td width="30%">Pendidikan Ayah</td>
						<td >&nbsp; <?= $dataku['pendidikan_ayah']?></td>
				</tr>
        <tr>
						<td width="30%">Nama Ibu</td>
						<td >&nbsp; <?= $dataku['nama_ibu']?></td>
				</tr>
        <tr>
						<td width="30%">Telepon Ibu</td>
						<td >&nbsp; <?= $dataku['telepon_ibu']?></td>
				</tr>
        <tr>
						<td width="30%">Email Ibu</td>
						<td >&nbsp; <?= $dataku['email_ibu']?></td>
				</tr>
        <tr>
						<td width="30%">Pekerjaan Ibu</td>
						<td >&nbsp; <?= $dataku['pekerjaan_ibu']?></td>
				</tr>
        <tr>
						<td width="30%">Alamat</td>
						<td >&nbsp; <?= $dataku['alamat']?></td>
				</tr>

			</thead>

</body>
</html>
		