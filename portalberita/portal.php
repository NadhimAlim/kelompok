<?php 
    include '../namadatabase.php';

    if (!isset($_SESSION['username'])) {
        header("Location: ../index.php");
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../img/logodestinasi.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NRA NEWS</title>
    <link rel="stylesheet" href="berita.css">
</head>
<body>
    <div class="newsflash">
        <p>DAPATKAN DISKON TIKET TRAVEL <a href="#">SEBESAR 50%</a></p>
    </div>
    <header>
        <div class="container">
            <div class="logo">
                <h1>NRA NEWS</h1>
                <a href="logout.php">Logout</a>
                <div class="hamburger" id="hamburger">
                    &#9776;
                </div>
            </div>
            
            <nav id="nav-menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Tech</a></li>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">World</a></li>
                    <li><a href="#">Opinion</a></li>
                    <li><a href="#">Science</a></li>
                    <li><a href="#">Health</a></li>
                    <li><a href="#">Weather</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="main-content">
            <div class="article">
                <h2>Selamat Datang Kak ..<?php echo $_SESSION['username']; ?>....</h2>
                <!-- Image placeholder -->
                <div class="image-placeholder"></div>
                <div class="image-placeholder"></div>
            </div>
            <aside class="sidebar">
                <div class="widget">
                    <h3>Trending</h3>
                    <ul>
                        <li><a href="#">The Legend of Zelda: Breath of the Wild gameplay on the Nintendo Switch <span>July 10, 2023</span></a></li>
                        <li><a href="#">These Are the 5 Big Tech Stories to Watch in 2017 <span>July 10, 2023</span></a></li>
                        <li><a href="#">macOS Sierra review: Mac <span>July 10, 2023</span></a></li>
                    </ul>
                </div>
            </aside>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>About | Advertise | Privacy & Policy | Contact</p>
        </div>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
