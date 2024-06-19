<?php
include "./namadatabase.php";
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="shortcut icon" type="x-icon" href="./img/logodestinasi.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NRA - Destinasi Wisata</title>
  <link rel="stylesheet" href="./style.css" />
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./login.css">
  <link rel="stylesheet" href="./portalberita/login.css">
</head>

<body>
  <?php include './menu/navbar.php'; ?>

  <?php include './menu/hero.php'; ?>

  <!-- bagian login dan register -->
  <?php include './portalberita/login.php' ?>

  <?php include './portalberita/register.php' ?>
  <!-- bagian login dan register -->

  <?php include './menu/team.php'; ?>

  <?php include './menu/sponsor.php'; ?>

  <?php include './menu/footer.php'; ?>

  <script src="script.js"></script>

  <script>
    feather.replace();
  </script>


</body>

</html>