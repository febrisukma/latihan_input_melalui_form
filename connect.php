<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati||Koneksi:.</title>
</head>

<body>
<b>
<?php
$host='localhost';
$username='root';
$password='';
$koneksi=mysql_connect($host,$username,$password);
if($koneksi)
	{ echo"Koneksi server berhasil <br><br>";}
else
	{ echo"Gagal koneksi ke server<br><br>";}

$database='db-online';
$mydb=mysql_select_db($database,$koneksi);
if($mydb)
	{echo"Berhasil memilih database<br><br>";}
else
	{echo"Tidak dapat memilih database<br><br>";}
?>
</b>
</body>
</html>
