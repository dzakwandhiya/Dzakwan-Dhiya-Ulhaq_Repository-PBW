<!DOCTYPE html>
<html>
    <head>
        <title>Tugas-5_6706210092_Dzakwan-Dhiya-Ulhaq</title>
        <link rel="stylesheet" href="css/style.css">
        <style>
            body{
                <?php 
                    $url = 'img/background.jpg';
                ?>
                padding-top: 5mm;
                background-image: url('<?php echo $url ?>');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            
        </style>      
    </head>

    <body>
    <?php echo '<img src="img/profil.png" width="200px" height="200px" class="center" />' ?>   
    <h1><?php echo "DZAKWAN DHIYA ULHAQ" ?></h1>    
        <b>
            <p><?php echo "Halo Semua! Saya Dzakwan Dhiya Ulhaq, Saya Tertarik tentang Komputer<br> dan perangkat lunak" ?></p>
        </b>
        
        
        <div class="nav">
            <strong>
                <p>
                    <a href="https://www.instagram.com/dzakwandhiya_/"><?php echo "INSTAGRAM" ?></a>&ensp;
                    <a href="https://www.facebook.com/dzakwandhiya7g"><?php echo "FACEBOOK" ?></a>&ensp;
                    <a href="mailto:dzakwandhiya7g@gmail.com"><?php echo "E-MAIL" ?></a>&ensp;
                    <a href="https://youtu.be/8EkY6UPH9i4"><?php echo "YOUTUBE" ?></a>&ensp;
                    <a href="https://dzakwannn.blogspot.com/"><?php echo "BLOGSPOT" ?></a>
                </p>
            </strong>
        </div>
        <hr>
        <h1><?php echo "BIODATA" ?></h1>
        <div class="biodata">
            <table>
                <tr>
                    <th><?php echo "Nama Lengkap" ?></th>
                    <th><?php echo "Dzakwan Dhiya Ulhaq" ?></th>
                </tr>
                <tr>
                    <th><?php echo "Tempat, Tanggal Lahir" ?></th>
                    <th><?php echo "Bandung, 06 Mei 2002" ?></th>
                <tr>
                    <th><?php echo "Agama" ?></th>
                    <th><?php echo "Islam" ?></th>
                </tr>
                <tr>
                    <th><?php echo "Jenis Kelamin" ?></th>
                    <th><?php echo "Laki-laki" ?></th>
                </tr>
                <tr>
                    <th><?php echo "Alamat" ?></th>
                    <th><?php echo "Komp. Griya Bandung indah Blok I 12 No. 06
                        Bandung, Jawa Barat" ?></th>
                </tr>
            </table>
            <p>&nbsp;</p>
        </div>
        <hr>
        <h1><?php echo "RIWAYAT SEKOLAH" ?></h1>
        <div class="riwayat-sekolah">
            <table>
                <tr>
                    <th><?php echo "2009-2015" ?></th>
                    <th><?php echo "SD Negeri Griya Bandung Indah" ?></th>
                </tr>
                <tr>
                    <th><?php echo "2015-2018" ?></th>
                    <th><?php echo "SMP Negeri 2 Bojongsoang" ?></th>
                <tr>
                    <th><?php echo "2018-2021" ?></th>
                    <th><?php echo "SMK Negeri 13 Bandung Jurusan:<br>Teknik Komputer dan Jaringan" ?></th>
                </tr>
            </table>
        </div>
        <p>&nbsp;</p>
        <hr>
        <h1><?php echo "KEAHLIAN" ?></h1>
        <div class="keahlian">
            <table>
                <tr>
                    <th><h2><?php echo "SOFTWARE" ?></h2></th>
                    <th>
                        <ul>
                            <b>
                            <li>&ensp;<?php echo "Illustrator" ?></li>
                            <li>&ensp;<?php echo "After Effect" ?></li>
                            <li>&ensp;<?php echo "Premiere Pro" ?></li>
                            <li>&ensp;<?php echo "Microsoft Office" ?></li>
                            </b>
                        </ul>
                    </th>
                </tr>
                <tr>
                    <th><h2><?php echo "HARDWARE" ?></h2></th>
                    <th>
                        <ul>
                            <b>
                            <li>&ensp;<?php echo "Computer Troubleshooting" ?></li>
                            <li>&ensp;<?php echo "OS Installation" ?></li>
                            <li>&ensp;<?php echo "Network Installation" ?></li>
                            <li>&ensp;<?php echo "Network Troubleshooting" ?></li>
                            </b>
                        </ul>
                    </th>
                </tr>
                
            </table>
        </div>
        <p>&nbsp;</p>
        <hr>
        <h1><?php echo "BLOGSPOT" ?></h1>
        <div class="Ifr">
            <strong><p><a href="https://dzakwannn.blogspot.com/" target="iframe_a"><?php echo "KLIK DI SINI</a> dan Lihat di bawah !" ?></p></strong>
            <?php echo '<iframe src="" name="iframe_a" height="400px" width="100%" title="Iframe Example"></iframe>' ?>
        </div>
        
    </body>
    
</html>