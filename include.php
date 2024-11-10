<?php

include 'koneksi.php';
$query = "SELECT * FROM users";
$query_sql = mysqli_query($koneksi,$query);
$tampil = mysqli_fetch_assoc($query_sql);

var_dump($tampil);

?>