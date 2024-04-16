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
                <a href="../index.php #about">Pengertian</a>
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
    <h1 align="center" style="margin-top:40px;font-size:4em">Bentuk Normal Pertama (1NF)</h1>
    <section class="about" id="about">
        <div class="container">

            </div>
            <div class="about-content">
                <img src="../img/1nf.png" alt="" width="800">
                <p style="margin-top:10px;font-size:1.6em">Normal pertama (1NF) adalah suatu relasi atau tabel memenuhi normal pertama jika setiap atribut dari relasi tersebut hanya memiliki nilai tunggal dalam satu baris (record) dan  semua kolom yang di dalam tabel harus berisi tunggal atau tidak ada yang  duplikat. <br><br>Bentuk normalisasi pertama (1 NF) ini mempunyai ciri yaitu setiap data dibentuk file datar atau rata (flat file), data dibentuk dalam satu record demi satu record dan nilai-nilai dari field-field berupa nilai yang tidak dapat dibagi-bagi lagi. <br><br><br><b>1NF</b> adalah bentuk normalisasi untuk mengelompokkan beberapa data sejenis untuk mengatasi masalah anomali. Sebuah model data dikatakan memenuhi bentuk normal pertama apabila setiap atribut yang dimilikinya memiliki satu nilai.
</p>
                   
        </div>
    </section>
       