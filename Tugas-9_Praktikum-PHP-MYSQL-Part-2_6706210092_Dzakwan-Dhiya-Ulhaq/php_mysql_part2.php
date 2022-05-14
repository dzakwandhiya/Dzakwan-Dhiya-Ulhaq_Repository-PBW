<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "praktikum_9";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak bisa  terkoneksi ke database ");
} /*else {
    echo "Koneksi berhasil";
}*/
$select = "";
$delete = "";
$firstname = "";
$lastname = "";
$email = "";
$success = "";
$update = "";
$Newfirstname ="";
$Newlastname = "";
$Newemail ="";
$disabled = "disabled";
//--------input-query-------------
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    //echo $firstname." ".$lastname." ".$email;
    $input = "INSERT INTO mahasiswa (id,firstname, lastname, email) VALUES('','$firstname', '$lastname', '$email')";
    if ($koneksi->query($input) === TRUE) {
        echo "<script>alert('BERHASIL MENYIMPAN DATA')</script>";
        //header("Refresh: 0; url = php_mysql_part2.php");
        $success = "Data berhasil Disimpan";
    } else {
        $success = "Gagal menyimpan data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL PART 2</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .submit {
            padding: 5px;
            width: 15%;
            color: aliceblue;
            font-weight: 100;
            background-color: seagreen;
            border: 1px solid seagreen;
        }

        .submit:hover {
            background-color: #01fe87;
            color: black;
        }
    </style>
</head>

<body>
    <div style="padding-left: 20px; padding-top:10px;">
        <h1>INPUT DATA</h1>
        <form action="" method="post">
            <input type="text" placeholder="firstname" required name="firstname" style="padding:5px;" <?php echo $firstname ?>>
            <input type="text" placeholder="lastname" required name="lastname" style="padding:5px;" <?php echo $lastname ?>>
            <input type="text" placeholder="email" required name="email" style="padding:5px;" <?php echo $email ?>>
            <input class="submit" type="submit" name="submit" value="Save Data"><br>
            <?php echo $success . "<br>" ?>
            <br>
            <hr>
            <br>
        </form>
        <h1>UPDATE DATA</h1>
        <!--<form action="" method="post">
            <input type="text" placeholder="Masukkan Id Mahasiswa" style="padding:5px;" name="id_update">
            <input class="submit" type="submit" name="update" value="Cari ID Mahasiswa"><br><br>
            </form>-->
            
            <form action="" method="post">
                    <input type="text" placeholder="Masukkan ID" name="id_update" style="padding:5px;" <?php echo $update ?>> Update Data : 
                    <input type="text" placeholder="New firstname" name="new_firstname" style="padding:5px;" <?php echo $Newfirstname ?>>
                    <input type="text" placeholder="New lastname" name="new_lastname" style="padding:5px;" <?php echo $Newlastname ?>>
                    <input type="text" placeholder="New email" name="new_email" style="padding:5px;" <?php echo $Newemail ?>>
                    <input class="submit" type="submit" name="update_data" value="Update Data"><br>
            </form>
            <?php 
                
                //echo $getId;
                 if (isset($_POST['update_data'])) {
                     $update = $_POST['id_update'];
                    $Newfirstname = $_POST['new_firstname'];
                    $Newlastname = $_POST['new_lastname'];
                    $Newemail = $_POST['new_email'];
                    //echo $Newlastname;
                    //echo $update;
                    $sql = "UPDATE mahasiswa SET firstname='$Newfirstname', lastname='$Newlastname', email='$Newemail'  WHERE id='$update'";
                    if ($koneksi->query($sql) === TRUE) {
                        echo "<script>alert('BERHASIL MENUPDATE DATA')</script>";
                        //header("Refresh: 0; url = php_mysql_part2.php");
                        //$success = "Data berhasil Disimpan";
                    } else {
                        //$success = "Gagal menyimpan data";
                        echo "<script>alert('GAGAL')</script>";

                    }
                }
            ?>
            
             
            
            <br>
            <hr>
            <br>
       
        <h1>SELECT DATA DAN WHERE SELECT DATA</h1>
        <form action="" method="post">
            <input class="submit" type="submit" name="all" value="Lihat Semua data"> atau 
            <input class="submit" type="submit" name="limit" value="Lihat data 5 - 10"> atau
            <input type="text" placeholder="Masukkan Id Mahasiswa" style="padding:5px;" name="id" <?php echo $select ?>>
            <input class="submit" type="submit" name="where" value="Cari ID Mahasiswa"><br><br>
            <p><b>HASIL DATA :</b></p>
        </form>
        <?php

        if (isset($_POST['all'])) {
            $sql = "SELECT id, firstname, lastname FROM mahasiswa";
            $result = $koneksi->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<hr>ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
                }
            } else {
                echo "0 data";
            }
        } else if (isset($_POST['where'])) {
            $select = $_POST['id'];
            $sql = "SELECT id, firstname, lastname FROM mahasiswa WHERE id = '$select'";
            //echo $select;
            $result = $koneksi->query($sql);
            $row = $result->fetch_assoc();
            if (is_null($row)) {
                echo "Anda belum memasukkan data atau data tidak ditemukan";
            } else {
                echo "<hr>ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
            }
        }
        else if(isset($_POST['limit'])){
            $sql = "SELECT id, firstname, lastname FROM mahasiswa LIMIT 0, 10";
            $result = $koneksi->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<hr>ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
                }
            } else {
                echo "0 data";
            }
        }
        ?>
        <hr>
        <h1>DELETE DATA</h1>
        <form action="" method="post">
            <input type="text" placeholder="Masukkan Id Mahasiswa" style="padding:5px;" name="id_delete" <?php echo $delete ?>>
            <input class="submit" type="submit" name="delete" value="Hapus Data Mahasiswa"><br><br>
        </form>
        <?php
        if (isset($_POST['delete'])) {
            $delete = $_POST['id_delete'];
            $sql = "DELETE FROM mahasiswa WHERE id = '$delete'";
            $result = $koneksi->query($sql);
            if ($result === true) {
                echo "Data Berhasil Dihapus";
            }
        }

        ?>
        <div>
</body>

</html>