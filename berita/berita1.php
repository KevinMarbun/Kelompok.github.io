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
    <h1 align="center" style="margin-top:40px;font-size:5em">Tujuan Normalisasi. </h1>
    <section class="about" id="about">
        <div class="container">

            </div>
            <div class="about-content">
                <p style="margin-top:10px;font-size:1.6em"><i class="fas fa-walking"></i>. Mengurangi Redundansi: Normalisasi menghindari duplikasi data, sehingga setiap informasi disimpan hanya sekali dalam database. Ini membantu menghemat ruang penyimpanan dan mengurangi risiko inkonsistensi data. <br><br><br>

                <i class="fas fa-walking"></i>.  Mengurangi Ketergantungan Data: Normalisasi memecah tabel besar menjadi beberapa tabel yang lebih kecil, yang berarti informasi disimpan secara terdistribusi. Hal ini membantu mengurangi ketergantungan antara data, sehingga perubahan pada satu tempat tidak memengaruhi data di tempat lain.
                <br><br><br>
                <i class="fas fa-walking"></i>.  Meningkatkan Konsistensi dan Integritas Data: Dengan mengorganisasi data ke dalam struktur yang lebih terstandar, normalisasi membantu memastikan bahwa data tetap konsisten dan integritasnya terjaga. Ini membuat proses pengelolaan data lebih mudah dan efisien.
                <br><br><br>
                <i class="fas fa-walking"></i>.  Memudahkan Perubahan Struktur: Normalisasi membuat database lebih fleksibel dan mudah disesuaikan dengan perubahan kebutuhan bisnis atau aplikasi. Ketika struktur database diubah, dampaknya dapat dikelola dengan lebih baik karena normalisasi mengurangi ketergantungan dan redundansi.</p>
                   
        </div>
    </section>
       