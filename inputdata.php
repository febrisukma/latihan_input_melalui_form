<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati||Input Data Melalui Form:.</title>
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 24px;
}
body {
	background-color: #000000;
}
.style4 {color: #0000FF}
-->
</style>
</head>

<body>
<p><br>
  <?php
error_reporting(E_ALL ^(E_NOTICE|E_WARNING));
echo"<form action=\"$php_self\" method=\"post\"  enctype=\"multipart/form-data\">";		
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$provinsi=$_POST['provinsi'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
$img_name=$_FILES['img']['name'];
$img=$_FILES['img']['tmp_name'] ;

if($aktiv=="")
        {$aktiv=0;}

if($_POST['cancel'])
{$aktiv=0;}

include_once("connect.php"); //panggil koneksi database

if($_POST['baru'])
	{  $aktiv=1; $id="";$nama="";$alamat="";$kota="";$provinsi="";$email="";$komentar="";$img=""; }

if($_POST['update'])
	{ 
		$pattern = "/^[\w-]+(\.[\w-]+)*@";
		$pattern .= "([0-9a-z][0-9a-z-]*[0-9a-z]\.)+([a-z]{2,4})$/i";
		if($id=="" or $nama=="" or $alamat=="" or $kota=="" or $provinsi=="" or $email=="" or $komentar=="")
		       {   
			$kosong=1; 
			$aktiv=1;
		       }
		elseif(!preg_match($pattern,$email))		
		        { 		
			$aktiv=1;
			$noemail=1;		
		        } 
		else
		       {
			   $query= "insert into tamu (id,nama,alamat,kota,provinsi,email,komentar) 
				    values ('$id','$nama','$alamat','$kota','$provinsi','$email', '$komentar')";
				     mysql_query($query) or die (mysql_error() );
			   if($img_name<>"")
				{ 
				     copy ("$img","images/$img_name");
				     $query= "update tamu set img='$img_name' where email='$email'";
				      mysql_query($query) or die (mysql_error() );
				}			
			    $aktiv=0; // rubah posisi  jadi posisi tampildata
			}
}
if($aktiv==1)
{ $disabled="";} else {$disabled="disabled";}
?>
</p>
<table width="42%" border="1" align="center" bordercolor="#0000FF" bgcolor="#00FFFF">
<tr><td>
<center>
  <span class="style1">Formulir Registrasi</span>
</center><br>
<table width="93%" border="0" align="center">
	<tr><td width="10%"><span class="style4">Id</span></td>
		<td width="2%">:</td>
		<td width="88%">
<?php echo"<input name=\"id\" $disabled type=\"text\" style=\"width: 100%\" value=\"$id\">"; ?>
		</td>
	</tr>
	<tr><td><span class="style4">Nama</span></td>
		<td>:</td>
		<td>
<?php echo"<input name=\"nama\" $disabled type=\"text\" style=\"width: 100%\" value=\"$nama\">"; ?>
		</td>
	</tr>
  	<tr><td><span class="style4">Alamat</span></td>
      		 <td>:</td>
      		 <td> <?php echo"<input name=\"alamat\" $disabled  type=\"text\"
			 style=\"width: 100%\" value=\"$alamat\">"; ?>
		 </td>
  	</tr>
	<tr><td><span class="style4">Kota</span></td>
      		 <td>:</td>
      		 <td> <?php echo"<input name=\"kota\" $disabled  type=\"text\"
			 style=\"width: 100%\" value=\"$kota\">"; ?>
		 </td>
  	</tr>
	<tr><td><span class="style4">Provinsi</span></td>
      		 <td>:</td>
      		 <td> <?php echo"<input name=\"provinsi\" $disabled  type=\"text\"
			 style=\"width: 100%\" value=\"$provinsi\">"; ?>
		 </td>
  	</tr>
	<tr><td><span class="style4">Email</span></td>
		<td>:</td>
		<td><?php echo"<input name=\"email\" $disabled  type=\"text\" style=\"width: 
			100%\"  value=\"$email\">"; ?>
		</td>
   	    </tr>
	<tr><td valign="top"><span class="style4">Komentar</span></td>
	      <td valign="top">:</td>
	      <td><textarea name="komentar" <?php echo"$disabled" ?> cols="45" rows="2" 
		        align="left" style="width: 100%"><?php echo"$komentar" ?> </textarea>
		</td>
  	</tr>
  	<tr>
     		<td valign="top"><span class="style4">Foto</span></td>
      		<td valign="top">:</td>
            		<td><img src="images/<?php echo"$img_name"; ?>" alt="" border="0"><br>
		<input type="file" name="img" style=" width: 306px">
		</td>
  	</tr>  
  	<tr><td>&nbsp;</td><td>&nbsp;</td>
      		<td valign="bottom" height="50">
	 	 <?php if($aktiv==1)
	  		{echo" <input name=\"update\" type=\"submit\" value=\"Update\">
 <input name=\"cancel\" type=\"submit\" value=\"Cancel\" class=\"bottom\"> ";}
	 	 else
	  		{echo" <input name=\"baru\" type=\"submit\" value=\"Record Baru\">";} ?>
      		</td>
 	</tr>
</table>
</td></tr>
</table>
</form>
</body>
</html>

<?php
if($kosong==1)
	{echo" <script>alert('Ingat: Data Harus Lengkap Diisi, silahkan diperhatikan...!!!'); </script>";}
if($noemail==1)
	{echo" <script>alert('Format Email Anda salah !!!'); </script>";}		
?>

</body>
</html>
