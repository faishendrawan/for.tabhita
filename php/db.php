<?php 
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'hbd';

  $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung!');
?>