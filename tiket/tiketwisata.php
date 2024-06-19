<?php
include "../namadatabase.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="shortcut icon" type="x-icon" href="../img/logodestinasi.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tiket Wisata</title>
  <link rel="stylesheet" href="./sttle.css" />
  <link rel="stylesheet" href="../style.css" />
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../login.css" />
  <link rel="stylesheet" href="../modal.css">
  <link rel="stylesheet" href="./traveltiket.css">
</head>

<body>
  <?php include '../menu/navbar.php'; ?>

  <section id="hero" class="relative flex items-center justify-center min-h-screen text-center bg-black bg-opacity-50">
    <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover z-0">
      <source src="../img/videobg.mp4" type="video/mp4" />
    </video>
    <main class="relative z-10 text-white p-4">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di Destinasi Wisata</h1>
      <p class="text-lg md:text-xl mb-6">Temukan Petualangan Tak Terlupakan di Setiap Sudut Kota Jogja</p>
      <a href="#" class="inline-block bg-teal-600 hover:bg-teal-700 text-white font-semibold py-2 px-4 rounded transition duration-300">Get Started</a>
    </main>
  </section>

  <?php include './traveltiket.php'; ?>

  <!-- fasilitas tiket travel -->
  <div id="travelModal" class="modal">
    <div class="modal-content">
      <h1 id="modalTitle">Travel A</h1>
      <div class="deskripsimodaltravel">
        <p>
          Travel A menawarkan beragam fasilitas yang akan membuat perjalanan Anda lebih nyaman dan menyenangkan. Nikmati kenyamanan fasilitas yang diberikan dari Travel A Sebagai Berikut
        </p>
      </div>
      <div class="modalFacilities">
        <li><a>Fasilitas Pertama</a></li>
        <li><a>Fasilitas Pertama</a></li>
        <li><a>Fasilitas Pertama</a></li>
        <li><a>Fasilitas Pertama</a></li>
        <li><a>Fasilitas Pertama</a></li>
      </div>


    </div>
    <button id="closeModal" class="modal-close">Tutup</button>
  </div>

  <!-- ffasilitas tiket travel-->

  <?php include '../menu/footer.php'; ?>

  <!-- bagian login dan register -->
  <div id="loginModal" class="modal">
    <div class="modal-content">
      <h2>Login</h2>
      <form id="loginForm" method="post" action="">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
      </form>
      <a href="#" class="register-link" id="showRegister">Don't have an account? Register</a>
    </div>
  </div>
  <div id="registerModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Register</h2>
      <form id="registerForm">
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Register</button>
      </form>
      <a href="#" class="login-link" id="showLogin">Already have an account? Login</a>
    </div>
  </div>
  <!-- bagian login dan register -->

  <iframe src="./modal.html" style="display: none"></iframe>
  <script src="../script.js"></script>
  <script src="./tiket.js"></script>
  <script src="./modal.js"></script>

  <script src="../script.js"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>