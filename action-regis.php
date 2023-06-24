<?php 
include 'library/config.php';

$nisn  = $_POST['nisn'];
$nama  = $_POST['nama'];
$email = $_POST['email'];
$pass  = password_hash($_POST['pass'], PASSWORD_DEFAULT);

//foto
$extension = array('png', 'jpg', 'jpeg');
$filename  = $_FILES['foto']['name'];
$tmp_name  = $_FILES['foto']['tmp_name'];
$ext       = pathinfo($filename, PATHINFO_EXTENSION);

//TEMPAT PENYIMPANAN
$folder = "gambar/$filename";

//cek ada data yang sama ga
$cek = mysqli_query($conn, "SELECT nisn FROM users WHERE nisn='$nisn'");

//form tidak boleh kosong
if($nisn == "" || $nama == "" || $email == "" || $pass == ""){
    echo "<script>
    alert('isi dulu')
    location.replace('registrasi.php')
    </script>";
}
// elseif(mysqli_num_rows($cek) > 0){
//     echo "<script>
//     alert('nisn sudah ter daftar')
//     location.replace('registrasi.php')
//     </script>";
// }
else{

    if($filename == ""){
        $hasil = mysqli_query($conn, "INSERT INTO users (nisn, nama, email, pass) VALUES('$nisn', '$nama', '$email', '$pass')"); 

        echo "<script>
        alert('data berhasil masuk')
        location.replace('home.php')
        </script>";

    }
    elseif(! in_array($ext, $extension)){
        echo "<script>
        alert('extensi tidak ada')
        location.replace('registrasi.php')
        </script>";
    }
    else{
        move_uploaded_file($tmp_name, $folder);
        $hasil2 = mysqli_query($conn, "INSERT INTO users(nisn, nama, email, pass, foto) VALUES('$nisn', '$nama', '$email', '$pass', '$filename')");


        echo "<script>
        alert('data berhasil masuk')
        location.replace('home.php')
        </script>";
    }
}

