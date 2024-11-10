<?php
include 'koneksi.php';
if (isset($_POST['submit'])) { //mengecek apakah form sudah di submit
    // mengambil data yang di lempar dari method POST
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $message = mysqli_real_escape_string($koneksi, $_POST['message']);

    // Membuat query SQL untuk proses input, pastikan formatnya sesuai
    $query = "INSERT INTO contact_me (name, email, massage, created_at)
              VALUES ('$name', '$email', '$message', CURRENT_TIMESTAMP)";
    if (mysqli_query($koneksi, $query)) {
        header('Location: index.php?status=success');
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
?>