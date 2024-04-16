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
    <h1 align="center" style="margin-top:40px;font-size:5em">Tahapan Normalisasi. </h1>
    <section class="about" id="about">
        <div class="container">

            </div>
            <div class="about-content">
                <p style="margin-top:10px;font-size:1.6em"> <i class="fas fa-walking"></i>. Normalisasi Tingkat Pertama (1NF): <br>
- Memastikan setiap sel dalam tabel hanya berisi nilai atomik (tidak dapat dibagi lagi). <br>
- Menghilangkan kelompok nilai berulang dan membuat setiap baris unik dengan menambahkan kunci utama. <br><br>
<i class="fas fa-walking"></i>. Normalisasi Tingkat Kedua (2NF): <br>
- Mencapai 1NF. <br>
- Memastikan bahwa setiap kolom non-kunci tergantung sepenuhnya pada kunci utama secara keseluruhan, bukan pada sebagian dari kunci. <br>
- Memisahkan data ke dalam tabel tambahan jika diperlukan untuk memenuhi syarat ini.
<br><br>
<i class="fas fa-walking"></i>. Normalisasi Tingkat Ketiga (3NF): <br>
- Mencapai 2NF. <br>
- Memastikan bahwa setiap kolom non-kunci tidak bergantung pada kolom non-kunci lainnya (tidak ada ketergantungan transitif). <br>
- Memisahkan data ke dalam tabel tambahan jika diperlukan untuk memenuhi syarat ini.
<br><br>
<i class="fas fa-walking"></i>. Normalisasi Tingkat Keempat (4NF): <br>
- Mencapai 3NF. <br>
- Memastikan bahwa tidak ada ketergantungan multivariabel yang tidak relevan. <br>
- Mengisolasi data yang berkaitan dengan ketergantungan multivariabel dalam tabel yang terpisah.
<br><br>
<i class="fas fa-walking"></i>. Normalisasi Tingkat Kelima (5NF): <br>
- Mencapai 4NF. <br>
- Menghilangkan ketergantungan gabungan. <br>
- Menguraikan data ke dalam tabel yang lebih kecil untuk menghindari ketergantungan gabungan.</p>
                    
        </div>
    </section>
       