<html>
<title> PHP-Timbangan </title>

<body>
<form action = "php_timbangan.php" method = "post">
Masukkan berat anda <input type ="text" name ="nilai" value ="0" />
<input type="submit" value="Hasil"/>
<form>

<?php
    $_POST["nilai"] = 0;
    if ($_POST["nilai"] >= 80) {
        $result = "Anda Berat";
    }
    else {
        $result = "Berat Anda Adalah Normal";
    }
?> 

Mesej Untuk Anda :
<?php
    ECHO "$result";
?>
</body>
</html>

