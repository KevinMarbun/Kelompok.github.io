<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normalisasi Website</title>
    <!-- Custom css -->
    <link rel="stylesheet" href="../style.css">
    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <!-- Header Section -->
    <div class="header" id="home">
        <nav id="navbar">
            <a href="#home" class="logo">Normalisasi<span>.</span></a>
            <div class="links" id="nav">
                <a href="../index.php">Home</a>
                <a href="../index.php #about">Pengertian Normalisasi</a>
                <a href="../index.php #berita">Tujuan Normalisasi</a>
                <a href="../index.php #pengumuman">Bentuk Normalisasi</a>
                <a href=" ../index.php #contact"><i class="fa fa-phone">contact</i></a>
            </div>
            <div class="fas fa-bars" id="menu-btn" onclick="openmenu()"></div>
            <div class="fa-solid fa-xmark" id="close" onclick="closemenu()"></div>
        </nav>
    </div>
    <!-- Header Section End -->

    <!-- About Section -->
    <h1 align="center" style="margin-top:40px;font-size:4em">Bentuk Normal Ketiga (3NF)</h1>
    <section class="about" id="about">
        <div class="container">

            </div>
            <div class="about-content">
                <img src="../img/3nf.png" alt="" width="560"><br><br><br>
                <p style="margin-top:10px;font-size:1.6em">Normalisasi ketiga (3 NF), suatu relasi memenuhi normal ketiga jika dan hanya jika relasi tersebut memenuhi normal kedua dan setiap atribut bukan kunci, tidak mempunyai transitive functional dependency kepada kunci utama. Atau bisa di bilang Bentuk Normal Ketiga ini seluruh tabelnya di pakai atau di masukan ke bentuk normal ketiga. <br> <br> Artinya setiap atribut bukan kunci harus bergantung hanya pada primary key secara keseluruhan, dan bentuk normalisasi ketiga sudah didapat tabel yang optimal.</p>
                   
        </div>
    </section>
       