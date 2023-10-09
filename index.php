<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Akses</title>
  <link rel="icon" href="img/coba.png">
</head>
<body>
  <div class="box">
    <h2>Login</h2>
    <form action="" method="post">
      <input type="text" name="user">
      <input type="password" name="pass">
      <input type="submit" name="submit" value="Login">
    </form>
  </div>

  <?php 
  if(isset($_POST['submit'])) {
    include 'db.php';
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $cek = mysqli_query($conn, "SELECT * FROM akses WHERE username = '".$user."' AND password = '".$pass."' ");

    if(mysqli_num_rows($cek) > 0 ) {
      echo '<script>alert("Login Berhasil")</script>';
      echo '<script>window.location="hero.php"</script>';
    } else {
      echo '<script>alert("Login Gagal!")</script>';
    }
  }
  ?>

</body>
</html>