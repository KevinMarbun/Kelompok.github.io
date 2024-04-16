<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normalisasi Website</title>
    <!-- Custom css -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <!-- Header Section -->
    <div class="header" id="home">
        <nav id="navbar">
            <a href="#home" class="logo">Normalisasi<span>.</span></a>
            <div class="links" id="nav">
                <a href="#home">Home</a>
                <a href="#about">Pengertian</a>
                <a href="#berita">Tujuan Normalisasi</a>
                <a href="#pengumuman">Bentuk Normalisasi</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="fas fa-bars" id="menu-btn" onclick="openmenu()"></div>
            <div class="fa-solid fa-xmark" id="close" onclick="closemenu()"></div>
        </nav>
        <div class="content">
            <h3>Tugas Presentasi Teknik Komputer TK 23 A<br>SBD (Sistem Basis Data)</h3><br>
            <h1>Normalisasi Basis Data</h1>
            
        </div>
    </div>
    <!-- Header Section End -->

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="image">

            </div>
            <div class="about-content">
                <h1>Apasi itu Normalisasi?</h1>
                <h2>Pengertian Normalisasi</h2>
                <p>Normalisasi (normalize) merupakan salah satu cara pendekatan atau teknik yang digunakan dalam membangun desain logic database relation dengan menerapkan sejumlah aturan dan kriteria standard.</p>
               

            </div>
        </div>
    </section>
    <!-- About Section End-->

    <!-- Blog Section -->
    <section class="blog" id="berita">
        <h1 class="heading">Tujuan <span>Normalisasi</span></h1>
        <p class="heading-description">Tujuan & Tahapan Normalisasi</p>
        <div class="container">
        <div class="post">
                <div class="blog-img">
                    <img src="img/tujuan.png" alt="">
                    <span>16<br> april </span>
                </div>
                <div class="blog-content">
                    <h3>By admin |<span> Kelompok 3.</span></h3>
                    <h1>Tujuan Normalisasi...</h1>
                    <p><i class="fas fa-walking"></i>. Mengurangi Redundansi<br><i class="fas fa-walking"></i>. Mengurangi Ketergantungan Data <br><i class="fas fa-walking"></i>. Meningkatkan Konsistensi dan Integritas Data <br><i class="fas fa-walking"></i>. Memudahkan Perubahan Struktur
                    <br>
                    <p style="font-size:1.6em"><a href="berita/berita1.php">Selengkapnya</a> <i class="fa fa-right-long"></p></i>
                    </p> 
                </div>
            </div>
            <div class="post">
                <div class="blog-img">
                <img src="img/Tahapan.png" alt="">
                    <span>16<br> april </span>
                </div>
                <div class="blog-content">
                    <h3>By admin |<span> Kelompok 3.</span></h3>
                    <h1>Tahapan Normalisasi...</h1>
                    <p><i class="fas fa-walking"></i>. Tahap Normalisasi dimulai dari tahap paling ringan (1NF) hingga paling ketat (5NF). <br>
                    <i class="fas fa-walking"></i>. Biasanya hanya sampai pada tingkat 3NF atau 4NF, karena sudah cukup memadai untuk menghasilkan tabel-tabel yang berkualitas baik. <br>
                    <i class="fas fa-walking"></i>. Urutan: 1NF, 2NF, 3NF, 4NF. <br>
<br>
                    <br>
                    <p style="font-size:1.6em"><a href="berita/berita2.php">Selengkapnya</a> <i class="fa fa-right-long"></i></p>
                    </p> 
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End-->
    <!-- Service Section -->
    <section class="service" id="pengumuman">
        <h1 class="heading">Bentuk-bentuk <span>Normalisasi</span></h1>
        <p class="heading-description"></p>
        <div class="container">
            <div class="service-box">
                <div class="service-img">
                    <img src="img/unf.png" alt="">
                </div>
                <div class="service-content">
                    <h3>Bentuk Tidak Normal</h3>
                    <p>Bentuk tidak normal (unnormalized) merupakan kumpulan data yang direkam tidak ada keharusan dengan mengikuti suatu format tertentu atau sering di sebut ada beberapa kolom yang kosong di dalam tabel bentuk tidak normal. 
                
                    <p style="font-size:1.6em"><a href="pengumuman/p1.php">Selengkapnya</a> <i class="fa fa-right-long"></i></p>
                    </p>
                </div>
            </div>
            <div class="service-box">
                <div class="service-img">
                    <img src="img/1nf.png" alt="">
                </div>
                <div class="service-content">
                    <h3>Bentuk Normal Pertama 1NF</h3>
                    <p>Normal pertama (1NF) adalah suatu relasi atau tabel memenuhi normal pertama jika setiap atribut dari relasi tersebut hanya memiliki nilai tunggal dalam satu baris (record) dan  semua kolom yang di dalam tabel harus berisi tunggal atau tidak ada yang  duplikat.
                    
                    <p style="font-size:1.6em"><a href="pengumuman/p2.php">Selengkapnya</a> <i class="fa fa-right-long"></i></p>
                    </p>
                </div>
            </div>
            <div class="service-box">
                <div class="service-img">
                    <img src="img/2nf.png" alt="">
                </div>
                <div class="service-content">
                    <h3>Bentuk Normal Kedua 2NF</h3>
                    <p>Normalisasi kedua (2NF) , suatu relasi memenuhi relasi kedua jika relasi tersebut memenuhi normal pertama dan setiap atribut yang bukan kunci (non key) bergantung secara fungsional terhadap kunci utama (Primary key) atau jika ada 4 bagian tabel maka hanya di gunakan/dipakai 3 tabel saja. 
                 
                    <p style="font-size:1.6em"><a href="pengumuman/p3.php">Selengkapnya</a> <i class="fa fa-right-long"></i></p>
                    </p>
                </div>
            </div>
            <div class="service-box">
                <div class="service-img">
                    <img src="img/3nf.png" alt="">
                </div>
                <div class="service-content">
                    <h3>Bentuk Normal Ketiga 3NF</h3>
                    <p>Normalisasi ketiga (3 NF), suatu relasi memenuhi normal ketiga jika dan hanya jika relasi tersebut memenuhi normal kedua dan setiap atribut bukan kunci, tidak mempunyai transitive functional dependency kepada kunci utama. 
                    <p style="font-size:1.6em"><a href="pengumuman/p4.php">Selengkapnya</a> <i class="fa fa-right-long"></i></p>
                    </p>
                </div>
            </div>
            <div class="service-box">
                <div class="service-img">
                    <img src="img/4nf.png" alt="">
                </div>
                <div class="service-content">
                    <h3>Bentuk Normal Keempat 4NF</h3>
                    <p>Normalisasi Tingkat Keempat (4NF) bertujuan untuk mengatasi masalah ketergantungan multivariabel yang tidak relevan dalam tabel. Ini mengharuskan untuk memisahkan atribut yang berkaitan dengan ketergantungan multivariabel ke dalam tabel yang terpisah.
                    <p style="font-size:1.6em"><a href="pengumuman/p5.php">Selengkapnya</a> <i class="fa fa-right-long"></i></p>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->

    
    <!-- Footer Section -->
    <section class="footer">


        <div class="container">
            <div class="footer-box">
                <h3>about us </h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non laborum nisi id amet sit? Cum, rem?
                    Nam, in at. Officiis?</p>
                <p>Copyrights &copy; Kevin Juniardy Marbun <a href="https://instagram.com/xc.pxly_?igshid=ZDdkNTZiNTM="><i class="fa-brands fa-instagram"></i></a></p>

            </div>
            <div class="footer-box">
                <h3>Newsletter</h3>
                <p>Stay updaet with our latests</p>
                <form>
                    <input type="email" name="email" placeholder="admin@gmail.com">
                    <button type="submit"><i class="fa-solid fa-right-long"></i></button>
                </form>
            </div>
            <div class="footer-box">
                <h3> Contact</h3>
                <p>Connect With Us On:</p>
                <div id="contact">
                    <a href="#"><i class="fa fa-phone"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <script src="script.js"></script>
</body>

</html>