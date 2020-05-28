<?php
    session_start();
    if(empty($_SESSION['id'])){
        header('location:index.php');
    }elseif($_SESSION['role']==1){
        header('location:home-m.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan UNUD | Home (Admin)</title>

    <link rel="stylesheet" type="text/css" href="css/perpus.css">
</head>
<body class="nomargin bg-lred">
    <table class="alg-center width-100 bg-white nomargin minh-400" cellpadding="8">
        <tr>
            <td class="width-20 bg-lred">
                <!-- foto -->
                <table class="width-100" cellpadding="8">
                    <tr>
                        <td>
                            <img src="img/logo.png" alt="Ini Foto Profil" width="160" 
                            class="alg-block-center">
                        </td>
                    </tr>
                </table>
                <!-- jarak -->
                <p><hr class="w-hr-3"></p> 

                <!-- Links -->
                <table class="bor-collapse width-100" cellpadding="8">
                    <tr>
                        <td class="fs-20">
                            <ul>
                                <li><a href="home-a.php" class="c-white">Home</a><hr></li>
                                <li><a href="#" class="c-white">Profil</a><hr></li>
                                <li><a href="#" class="c-white">Galeri Buku</a><hr></li>
                                <li><a href="logout.php" class="c-white">Logout</a><hr></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </td>

            <td class="pl-30p va-top bg-white">
                <p class="fs-40 t-bold alg-t-center">
                    SELAMAT DATANG ADMIN
                </p>
                <p class="fs-20">
                    Saya ucapkan terima kasih atas kunjungan anda ke website profil dari perpustakaan pada Universitas
                    Udayana. Silahkan kunjungi bagian masing - masing untuk mengetahui informasi lebih lanjut. 
                    Anda dapat mengunjungi bagian profil perpustakaan pada Tentang Kami, informasi buku pada Galeri 
                    Buku, dan informasi kontak pada bagian Kontak Kami
                </p>
                <p><hr></p><br><br>
                <h2 class="pl-30p t-bold bg-blue c-white">Tentang Kami</h2>
                <p>Informasi profil dari perpustakaan Universitas Udayana</p>
                <hr>
                <h2 class="pl-30p t-bold bg-blue c-white">Galeri Buku</h2>
                <p>Informasi buku yang terdapat pada perpustkaan</p>
                <hr>
                <h2 class="pl-30p t-bold bg-blue c-white">Kontak Kami</h2>
                <p>Informasi kontak pengurus perpustkaan dan pembuat wesite</p>
                <hr>
            </td>
        </tr>
    </table>
</body>
</html>