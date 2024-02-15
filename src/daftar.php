<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar</title>
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

            
            <form class="p-3 mt-3" action="prosesdaftar.php" method="POST">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="username" id="userName" placeholder="Username" required>
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" id="pwd" placeholder="Password" required>
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="email" name="email" id="userName" placeholder="Email" required>
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="namalengkap" id="namaLengkap" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat" required>
                </div>
                <button type="submit" class="btn mt-3">Daftar</button>
            </form>
            <div class="text-center fs-6">
                <a href="#">Forget password?</a> or <a href="login.php">Login</a>
            </div>
      </div>
</body>
</html>