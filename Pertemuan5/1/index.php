<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencoba PHP</title>
</head>
<body>

<?php
$txt = "PHP";
$lokasi = array("Surakarta", "UNS", "Fakultas Teknik");
echo "Teks ini hanya bisa dibaca oleh file $txt <br>";
echo "Saat ini saya menggunakan $txt dengan versi " . phpversion();
echo "<br>";

echo "$lokasi[2] $lokasi[1] berada di kota $lokasi[0]"
?>

</body>
</html>