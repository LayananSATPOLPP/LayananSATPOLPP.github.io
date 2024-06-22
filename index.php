<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI PENGADUAN MASYARAKAT</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #1c1c1e;
            color: white;
            padding: 20px;
            box-sizing: border-box;
            position: fixed;
            height: 100%;
        }
        .sidebar img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        .sidebar h1 {
            margin: 10px 0;
            font-size: 24px;
        }
        .sidebar p {
            margin: 5px 0 20px;
            font-size: 16px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 10px 0;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <img src="pp1.png" alt="Foto Profil">
        <h1>Layana Pengaduan <br> Satpol PP <br> Prov Sulbar</h1>
        
        <ul>
            <li><a class="navbar-brand fw-bold text-success" href="index.php">HOME</a></li>
            <li><a class="nav-link fw-bold text-warning" href="index.php?page=login ">Login</a></li>
            <li><a class="nav-link fw-bold text-warning" href="index.php?page=registrasi ">Daftar Akun</a></li>
            <li><a class="text-primary" href="https://satpolpp.sulbarprov.go.id/">kunjungi kami</a></li>
            <a href="https://www.facebook.com/satpolpp.sulbar "><img src="fb.png" style="width: 30px; height: auto;"></a>
            <a href="https://www.instagram.com/satpolpp.sulbar/"><img src="ig.png" style="width: 30px; height: auto;"></a>
            <a href="mailto:satpolpp@sulbarprov.go.id"><img src="gmail.png" style="width: 30px; height: auto;"></a>
            <a href="https://wa.me/628114285599"><img src="wa.png" style="width: 30px; height: auto;"></a> 
            
        </ul>
    </div>
    <div class="main-content">
        

        <div class="content">
            <?php 
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'login':
                        include 'login.php';
                        break;
                    case 'registrasi':
                        include 'registrasi.php';
                        break;
                    default:
                        echo "halaman tidak tersedia";
                        break;
                }
            } else {
                include 'home.php';
            }
            ?>
        </div>
    </div>

   

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
