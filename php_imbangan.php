<html>
<title> PHP-Timbangan </title>

<body>
<!--Nama fail yang tidak salah-->
<form action = "PHP_timbangan.php" method = "POST">
Masukkan berat anda <input type ="TEXT" name ="nilai" value ="0" />
<input type="submit" value="Hasil"/>
<form>

<?PHP
 //Penamaan name salah
if (POST [nilaiii] >= 80)
{
$result = "Anda Berat" //Tiada penutup
}
ELSE //Penulisan sintaks yang salah
{
$result = "Berat Anda Adalah Normal";
}

> //Penutup php tidak betul
Mesej Untuk Anda :
<?PHP
ECHO "$result";
?>
</body>
</html>

