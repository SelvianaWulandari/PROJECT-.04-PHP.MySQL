<?php
$db = mysqli_connect("localhost: 3307", "root", "admin", "portfolio");
$data = mysqli_query($db, "SELECT * FROM ayat_alkitab_favorite");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BERANDA SELVI</title>
  <link rel="stylesheet" href="style.css"> <!-- Memanggil file CSS -->
</head>
<body>
  <header>
    <h1>BERANDA SELVI</h1>
    <nav>
      <ul>
        <li><a href="#Home">Home</a></li>
        <li><a href="#Gallery">Gallery</a></li>
        <li><a href="#Blog">Blog</a></li>
        <li><a href="#Contact">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section id="Home" class="active" style="line-height: 1.5;">
      <img src="images/selvi.png" alt="Foto Selvi Wulandari" style="width: 500px; height: auto; border-radius: 50%; float: left; margin-right: 20px;">
      <h2>Home Page</h2>
      <p>Menapaki setiap petualangan kecil dan menemukan keindahan dalam setiap momen, Selamat datang di dunia kecil saya yang penuh refleksi💐. Halo Semuanya Perkenalkan nama saya Selviana Wulandari!👋Saya seorang mahasiswi di Jurusan Elektro dengan Program Studi Informatika⚡ Universitas Sam Ratulangi.</p>
      <p>Perkembangan teknologi masa kini mengalami kemajuan pesat dan memberikan banyak manfaat bagi manusia. Teknologi telah mengubah cara hidup manusia dalam berbagai aspek.</p>
    </section>
    <table id="ayat_favorite">
    <tr>
        <th>Kitab</th>
        <th>Pasal</th>
        <th>Ayat</th>
    </tr>

<?php while ($row = mysqli_fetch_array($data)) : ?>

    <tr>
        <td><?= $row["Kitab"]; ?></td>
        <td><?= $row["Pasal"]; ?></td>
        <td><?= $row["Ayat"]; ?></td>
    </tr>

    <?php endwhile;; ?>
</table>
    <section id="Gallery">
      <h2>Gallery Selvi 🌻</h2>
      <p>Berikut adalah beberapa foto-foto saya dalam organisasi dan juga kegiatan.</p>
      <div class="image-row">
        <img src="images/LIDM.png" alt="LIDM" id="LIDM" style="width: 20%; height: auto;">
        <img src="images/image1.jpg" alt="Himpunan Mahasiswa Elektro" id="image1" style="width: 20%; height: auto;">
        <img src="images/workshop.jpg" alt="workshop lidm" id="image2" style="width: 20%; height: auto;">
        <img src="images/image2.jpg" alt="Ikatan Alumni Jurusan Elektro" id="image2" style="width: 20%; height: auto;">
        <img src="images/techofest.jpeg" alt="TechFest" id="image2" style="width: 20%; height: auto;">
        <img src="images/moobiledev.jpeg" alt="MobileDev UNITY" id="image2" style="width: 20%; height: auto;">
        <img src="images/image3.jpg" alt="Vena Energy Likupang" id="image3" style="width: 20%; height: auto;">
        <img src="images/image4.jpg" alt="Suro Cup 2023" id="image4" style="width: 20%; height: auto;">
      </div>
    
      <div id="lightbox" class="hidden">
        <img src="" alt="" id="lightbox-image">
        <span class="close">&times;</span>
      </div>
    </section>
    
    <section id="Blog">
      <h2>Blog</h2>
      <p>Berikut ada beberapa artikel yang dapat menambah wawasan kalian. Selamat Membaca!!!</p>
    
      <article>
        <h3>Informatika dan Perkembangan Teknologi Masa Kini</h3>
        <a href="https://binus.ac.id/bandung/2023/11/pemanfaatan-perkembangan-teknologi-masa-kini/"><img src="images/image6.jpg" alt="Informatika dan Teknologi Masa Kini" style="width: 40%; height: auto;"></a>
        <p>Teknologi masa kini telah berkembang pesat dan memberikan banyak manfaat bagi manusia. Teknologi telah mengubah cara hidup manusia dalam berbagai aspek, seperti pendidikan, komunikasi, berbelanja, bisnis, medis, pertanian, transportasi, entertainment, dan layanan umum.
          Penggunaan teknologi masa kini meningkatkan efisiensi, efektivitas, dan kualitas hidup manusia. Teknologi akan terus berkembang dan memberikan manfaat yang lebih besar bagi manusia di masa depan.</p>
        <p>Sumber: <a href="https://binus.ac.id/bandung/2023/11/pemanfaatan-perkembangan-teknologi-masa-kini/">https://binus.ac.id/bandung/2023/11/pemanfaatan-perkembangan-teknologi-masa-kini/</a></p>
      </article>
    
      <article>
        <h3>Dampak Positif dan Negatif AI dalam Masa Depan Pendidikan</h3>
        <a href="https://undiknas.ac.id/2023/05/dampak-positif-dan-negatif-ai-dalam-masa-depan-pendidikan/"><img src="images/image8.png" alt="Dampak AI dalam Pendidikan" style="width: 40%; height: auto;"></a>
        <p>Laporan Google: Future of Education menunjukkan bahwa AI akan membawa perubahan besar dalam dunia pendidikan, termasuk di Indonesia. AI memiliki potensi untuk meningkatkan kualitas pendidikan dengan mempersonalisasi proses belajar, meningkatkan kualitas pengajar, dan menerapkan pembelajaran seumur hidup.
          Namun, AI juga memiliki dampak negatif seperti ketergantungan terhadap AI dan hilangnya kemampuan belajar. Untuk itu, diperlukan protokol dan aturan yang jelas untuk memastikan penggunaan AI secara bertanggung jawab.
          Pemerintah perlu berinvestasi dalam infrastruktur, peralatan, dan pelatihan guru untuk mendukung penggunaan teknologi di sekolah. Tantangan konektivitas di daerah 3T juga perlu diatasi.
          Secara keseluruhan, AI dapat menjadi alat yang bermanfaat untuk meningkatkan kualitas pendidikan di Indonesia, asalkan digunakan dengan bijak dan bertanggung jawab.</p>
        <p>Sumber: <a href="https://undiknas.ac.id/2023/05/dampak-positif-and-negatif-ai-dalam-masa-depan-pendidikan/">https://undiknas.ac.id/2023/05/dampak-positif-and-negatif-ai-dalam-masa-depan-pendidikan/</a></p>
      </article>
    
      <article>
        <h3>Wajib Tahu Bahaya AI (Artificial Intelligence)</h3>
        <a href="https://stekom.ac.id/artikel/wajib-tahu-bahaya-ai-artificial-intelligence"><img src="images/image9.jpg" alt="Bahaya AI" style="width: 40%; height: auto;"></a>
        <p>Kecerdasan buatan (Artificial Intelligence/AI) telah mengubah wajah teknologi dan membawa dampak besar pada kehidupan kita. AI telah memberikan solusi yang luar biasa dalam berbagai sektor, dari kesehatan dan transportasi hingga keuangan dan industri. Namun, di balik semua keuntungan ini, terdapat potensi bahaya yang tidak boleh diabaikan. Penting bagi masyarakat dan pembuat kebijakan untuk memahami dan menghadapi bahaya AI dengan bijaksana untuk menciptakan dunia yang aman dan berkelanjutan.</p>
        <p>Sumber: <a href="https://stekom.ac.id/artikel/wajib-tahu-bahaya-ai-artificial-intelligence">https://stekom.ac.id/artikel/wajib-tahu-bahaya-ai-artificial-intelligence</a></p>
      </article>
    </section>    
    <section id="Contact">
      <h2>Contact Person & Social Media</h2>
      <p>Berikut adalah informasi kontak dan media sosial saya yang dapat anda klik untuk hubungi atau lihat.</p>
    
      <div class="contact-info">
        <ul>
          <li>
            <a href="mailto:selviwulandariana@gmail.com" target="_blank">
              <img src="images/email_logo.png" alt="Email" class="contact-logo">
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/selviana-wulandari/" target="_blank">
              <img src="images/linkedin_logo.png" alt="linkedin" class="contact-logo">
            </a>
          </li>
          <li>
            <a href="https://github.com/SelvianaWulandari" target="_blank">
              <img src="images/git_logo.webp" alt="github" class="contact-logo">
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/selviiiiiiiiiiii_" target="_blank">
              <img src="images/ig_logo.jpeg" alt="Instagram" class="contact-logo">
            </a>
          </li>
          <li>
            <a href="https://www.youtube.com/channel/UC5pBU9KT1OhyRZodynTvsEw" target="_blank">
              <img src="images/Youtube_logo.png" alt="youtubr" class="contact-logo">
            </a>
          </li>
        </ul>
      </div>
    </section>    
    
  </main>
  <footer style="clear: both;">
      <p>&copy; 2024 SelvianaWulandari</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
