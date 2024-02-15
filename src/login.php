<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login-daftar.css">

  <!-- Logo Tab -->
  <link rel="icon" type="image/jpg" href="https://img.freepik.com/free-vector/slr-camera-grunge-tshirt-design-hand-drawn-sketch-vector-illustration_460848-14467.jpg">
  
</head>
<body>
    <div class="wrapper">
            <!-- Logo -->
            <div class="logo">
                <img src="https://img.freepik.com/free-vector/slr-camera-grunge-tshirt-design-hand-drawn-sketch-vector-illustration_460848-14467.jpg" alt="Logo Pixel Lens">
            </div>
            <div class="text-center mt-4 name">
                Pixel Lens
            </div>

            <?php
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan']=="sukses"){?>
                            <div class="alert alert-success" role="alert">
                                <svg class="centang" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M12 21a9 9 0 0 0 7.51-13.961l-7.155 7.95a2 2 0 0 1-2.687.262L6.4 12.8a1 1 0 0 1 1.2-1.6l3.268 2.451l7.346-8.161A9 9 0 1 0 12 21" clip-rule="evenodd"/></svg><p style="display:inline; position:absolute; top:15rem;">Regristrasi Berhasil<p>
                            </div>
            <?php
                        }elseif ($_GET['pesan']=="gagal") {?>
                            <div class="alert alert-danger" role="alert">
                                <svg class="gagal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2m4.207 12.793l-1.414 1.414L12 13.414l-2.793 2.793l-1.414-1.414L10.586 12L7.793 9.207l1.414-1.414L12 10.586l2.793-2.793l1.414 1.414L13.414 12z"/></svg>Email / Password Tidak Valid
                            </div>
            <?php
                        }
                    }
            ?>

            <form class="p-3 mt-3" action="proseslogin.php" method="POST">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="username" id="userName" placeholder="Username" required>
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" id="pwd" placeholder="Password" required>
                </div>
                <button type="submit" class="btn mt-3">Login</button>
            </form>
            <div class="text-center fs-6">
                <a href="#">Forget password?</a> or <a href="daftar.php">Daftar</a>
            </div>
      </div>
</body>
</html>