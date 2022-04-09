<!DOCTYPE HTML>
<html>
    <body>
<?php 

echo "<b>Mengunakan Fungsi str_replace dan menampilkan isi array menggunakan foreach :</b><br><br>";
$strings = array(
    'Saya adalah Abdullah',
    'Saya punya seekor kucing yang sangat lucu',
    'Setiap hari ku ajak dia bermain');
$search = array(
    'Abdullah',
    'kucing',
    'lucu',
    'bermain'
);
$replace = array(
    'Abdurrahman',
    'bebek',
    'gemuk',
    'berenang'
);
$replace = str_replace($search, $replace, $strings);
foreach ($replace as $key => $value){
    echo $value."<br>";
}


?>
</body>
</html>