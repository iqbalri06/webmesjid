<style>
  .animasi-teks {
    font-size: 29px;
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    -webkit-animation: typing 5s steps(70, end);
    animation: animasi-ketik 5s steps(70, end);
  }

  @keyframes animasi-ketik {
    from {
      width: 0;
    }
  }

  @-webkit-keyframes animasi-ketik {
    from {
      width: 0;
    }
  }

  .container1 {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .box {
    width: 200px;
    height: 200px;
    background-color: #f1f1f1;
  }

  .container2 {
  display: flex;
  justify-content: flex-start;
  }

  .card {
    width: 500px;
    background-color: #f2f2f2;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 70px;
    border-radius: 5px;
    margin: 20px;
    display: flex;
    align-items: flex-start;

  }

  .card-title {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    /* Ubah properti align-items: center; menjadi align-items: flex-start; */
    margin-bottom: 10px;
  }

  .card-title i {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
    background-color: #9ed3f7;
    border-radius: 50%;
    padding: 13px;
    text-align: center;

  }

  .card-paragraph {
    font-size: 14px;
    color: #666;
    line-height: 1.4;
    text-align: left;
  }
  .carousel-control-prev,
.carousel-control-next {
  background-color: blue;
}
.banner {
  display: flex; 
  justify-content: flex-end; 
  margin-top: -590px; 
  margin-right: 430px;
  position: relative;
}
.banner img {
  width: 400px; height: 580px; border-radius: 5%;
}
.container3 {
  display: flex;
  justify-content: center;
}

.card1 {
  width: 300px;
  margin: 10px;
  padding: 20px;
  background-color: #f2f2f2;
  text-align: center;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.card-title1 {
  display: flex;
  align-items: center;
  text-align: left;
}

.card-title1 h3 {
  margin-right: 10px;
  font-size: 24px;
  text-align: left;
}

.card-title1 h2 {
  font-size: 18px;
  text-align: left;
}

.card-paragraph1 {
  margin-top: 20px;
  text-align: left;
  font-size: 16px;
}
.container4 {
  display: flex;
  justify-content: center;
}

.kotak {
  width: 1000px;
  padding: 20px;
  background-color: #f2f2f2;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.kotak1 {
  width: 1000px;
  padding: 20px;
  background-color: #1F3984;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.total {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}
.total1 {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}

.total1 span {
  font-size: 12px;
  font-weight: bold;
  color: #1F3984;
}

.total1 p{
  margin: 0;
  font-size: 12px;
  font-weight: bold;
}

.total li {
  margin-bottom: 20px;
}

.total span {
  font-size: 14px;
  font-weight: bold;
  color: #1F3984;
}

.total h2 {
  margin: 0;
  font-size: 24px;
  font-weight: bold;
}

.progress {
  height: 60px;
  background-color: #ddd;
  margin-bottom: 10px;
  position: relative;
}

.progress span {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 80%;
  width: 30%;
  background-color: #1F3984;
  color: white;
  font-weight: bold;
  font-size: 18px;
}

.progress::after {
  content: attr(data-percent);
  position: absolute;
  top: -20px;
  right: 0;
  font-size: 14px;
  font-weight: bold;
  color: #1F3984;
}
.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 10px;
}

.card2 {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #f1f1f1;
  border-radius: 5px;
  overflow: hidden;
  width: 300px;
  margin: 10px;
  height: 350px;
}

.card2 img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  cursor: pointer;
}

.card2:hover {
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

/* Style untuk popup saat foto dibuka */
.popup {
  display: none;
  position: fixed;
  z-index: 9999;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
}

.popup img {
  display: block;
  margin: 50px auto;
  max-width: 90%;
  max-height: 90%;
}

.popup-close {
  position: absolute;
  top: 20px;
  right: 20px;
  color: #fff;
  font-size: 30px;
  font-weight: bold;
  cursor: pointer;
}

.table-line {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    margin-left: auto;
    margin-right: auto;
  }

  .table-line th,
  .table-line td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  .table-line th {
    background-color: #f2f2f2;
  }
  @media (max-width: 767px) {
    .table-line {
      display: block;
      overflow-x: auto;
    }

    .table-line thead,
    .table-line tbody,
    .table-line th,
    .table-line td,
    .table-line tr {
      display: block;
    }

    .table-line thead tr {
      position: absolute;
      top: -9999px;
      left: -9999px;
    }

    .table-line tr {
      border: 1px solid #ddd;
    }

    .table-line td {
      border: none;
      border-bottom: 1px solid #ddd;
      position: relative;
      padding-left: 50%;
    }

    .table-line td:before {
      position: absolute;
      top: 6px;
      left: 6px;
      width: 45%;
      padding-right: 10px;
      white-space: nowrap;
    }

    .table-line td:nth-of-type(1):before {
      content: "Nama Donatur";
    }

    .table-line td:nth-of-type(2):before {
      content: "ID Donatur";
    }

    .table-line td:nth-of-type(3):before {
      content: "Paket";
    }

    .table-line td:nth-of-type(4):before {
      content: "Kategori";
    }

    .table-line td:nth-of-type(5):before {
      content: "Nominal/Barang";
    }
  }



@media screen and (max-width: 768px) {
    /* Aturan CSS untuk perangkat dengan lebar maksimum 768px */
    .slider_text {
      text-align: center;
    }
    .dog_thumb {
      display: none;
    }
    .slider_area {
      padding: 30px 0;
    }
    .carousel-inner img {
      width: 100%;
      height: auto;
    }
    .card {
      width: 100%;
    }
    .banner {
  display: flex; 
  justify-content: flex-end; 
  margin-top: 0px; 
  margin-left: 50px;
  position: center;

}
.banner img {
  width: 600px; height: 400px; border-radius: 5%;
  }
  /* Styling umum */

/* Styling untuk layar dengan lebar 600px atau lebih kecil */
@media screen and (max-width: 600px) {
  .animasi-teks {
    font-size: 20px;
    text-align: left;
  }

  .teks-container {
    text-align: left;
  }

  .slider_text {
    text-align: center;
  }

  .slider_text h3 {
    font-size: 25px;
  }

  .dog_thumb {
    display: none;
  }

  .banner img {
    width: 250px;
    height: 550px;
  }

  .carousel-inner img {
    border-radius: 5%;
    width: 100%;
    height: auto;
  }

  .card {
    width: 100%;
    padding: 40px;
    margin: 10px;
  }

  .card-title i {
    margin-right: 15px;
  }
  .banner {
  display: flex; 
  justify-content: flex-end; 
  margin-top: 0px; 
  margin-right: 35px;
  margin-top: 30px;
  position: center;
}

.boxed-btn4 {
  text-align: left;
  margin-left: -170px;
}
.banner img {
  width: 400px; height: 500px; border-radius: 5%;
  }
}
.kotak {
  width: 400px;
  padding: 20px;
  background-color: #f2f2f2;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.kotak1 {
  width: 400px;
  padding: 20px;
  background-color: #1F3984;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.total span {
  font-size: 10px;
  font-weight: bold;
  color: #1F3984;
}

.total h2 {
  margin: 0;
  font-size: 18px;
  font-weight: bold;
}
.total1 span {
  font-size: 6px;
  font-weight: bold;
  color: #1F3984;
}

.total1 p{
  margin: 0;
  font-size: 5px;
  font-weight: bold;
}
/* Styling untuk layar dengan lebar 992px atau lebih kecil */
@media screen and (max-width: 992px) {
  .card {
    padding: 20px;
  }

  .card-title i {
    font-size: 16px;
    margin-right: 5px;
  }
  
}

/* Styling untuk layar dengan lebar 1200px atau lebih kecil */
@media screen and (max-width: 1200px) {
  .card {
    padding: 10px;
  }

  .card-title i {
    font-size: 14px;
    margin-right: 3px;
  }
}
}

</style>


<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


<!-- Slider section -->
<div class="slider_area">
  <div class="single_slider slider_bg_1 d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="slider_text">
            <p class="animasi-teks" style="margin-bottom: 30px;">Masjid Besar SMK Wikrama Bogor</p>
            <h3 class="teks-container" style="font-size: 35px; line-height: 45px;">
              <span>Mari </span><span style="color: #1F3984;">Tingkatkan Keimanan</span>
              <span> Masyarakat Warga SMK Wikrama Bogor.</span>
            </h3>
            <br>
            <a href="<?= BASEURL; ?>/Web/donasi" class="boxed-btn4">Beri Bantuan Shodaqoh</a>
          </div>
        </div>
      </div>
    </div>
    <div class="dog_thumb d-none d-lg-block">
      <div style="position: relative;">
        <img style="border-radius: 30px; margin-bottom: 200px; width: 450px;"
          src="<?= BASEURL; ?>/assets_web/img/banner/masjidd.png" alt="">
        <img
          style="position: absolute; top: -30px; right: 40px; width: 70px; border-radius: 50%; background-color: white;"
          src="<?= BASEURL; ?>/assets_web/img/wikrama.png" alt="Logo">
        <div style="position: absolute; top: 30%; left: 20px; transform: translateY(-50%);">
          <div
            style="display: flex; align-items: center; background-color: white; padding: 5px 10px; border-radius: 5px; margin-bottom: 10px;">
            <img style="width: 30px; margin-right: 10px; align-self: center;"
              src="<?= BASEURL; ?>/assets_web/img/hijau.png" alt="daun">
            <span
              style="color: black; font-size: 18px; font-family: 'Helvetica', sans-serif; text-align: left; font-weight: bold;">Lingkungan<br>Terjaga.</span>
          </div>
          <div
            style="display: flex; align-items: center; background-color: white; padding: 5px 10px; border-radius: 5px; margin-bottom: 10px;">
            <img style="width: 30px; margin-right: 10px; align-self: center;"
              src="<?= BASEURL; ?>/assets_web/img/ukuran.png" alt="">
            <span
              style="color: black; font-size: 18px; font-family: 'Helvetica', sans-serif; text-align: left; font-weight: bold;">Kapasitas<br>Besar.</span>
          </div>
          <div
            style="display: flex; align-items: center; background-color: white; padding: 5px 10px; border-radius: 5px; margin-bottom: 10px;">
            <img style="width: 30px; margin-right: 10px; align-self: center;"
              src="<?= BASEURL; ?>/assets_web/img/buku.png" alt="">
            <span
              style="color: black; font-size: 18px; font-family: 'Helvetica', sans-serif; text-align: left; font-weight: bold;">Al-Qur'an<br>Gratis.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>

<div class="container4">
  <div class="content1">
    <div class="kotak">
      <p>
        <div class="total">
          <li><span>Total Target Dana</span><br><h2>Rp.40.000.000</h2></li>
          <li><span>Total Dana Terkumpul</span><br><h2>Rp.4.000.000</h2></li> 
          <li><span>Total Donatur</span><br><h2>4 Orang</h2></li>
        </div>
      </p>
      <hr>
      <br>
      <div class="progress" data-percent="30%">
        <span style="width: 30% "></span>
      </div>
    </div>
    <div class="kotak1">
    <marquee behavior="scroll" direction="left" scrollamount="10">
    <div class="total1">
      <p style="color: white;">Elon Muks - <span style ="color : yellow;">Barang:Emas</span></p>
      <p style="color: white;">Ujang Mustopa - <span style ="color : yellow;">Uang:Rp,300.000</span></p>
      <p style="color: white;">Iqbal Roudatul - <span style ="color : yellow;">Uang:Rp,400.000</span></p>
      <p style="color: white;">Hamba Allah - <span style ="color : yellow;">Uang:Rp,1.000.000</span></p>
      </div>
      </marquee>
      </div>
  </div>
</div>

<br>
<br>
<br>

<!-- Carousel section -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="max-width: 700px; margin: 0 auto;">
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div class="carousel-inner" style = "height: 570px">
    <div class="carousel-item active">
      <img style="border-radius: 10%;" src="<?= BASEURL; ?>/assets_web/img/banner/masjid2.png" class="d-block w-100" alt="Image 1">
    </div>
    <div class="carousel-item">
      <img style="border-radius: 10%;" src="<?= BASEURL; ?>/assets_web/img/banner/masjid3.png" class="d-block w-100" alt="Image 2">
    </div>
    <div class="carousel-item">
      <img style="border-radius: 10%; height: 500px" src="<?= BASEURL; ?>/assets_web/img/banner/masjid4.png" class="d-block w-100" alt="Image 3">
    </div>
  </div>
</div>

<br>
<br>
<br>

<!-- Cards section -->
<h3 style="font-size: 40px; margin-left: 20px;">
  <span style="color: #1F3984; text-align: justify;">Manfaat</span> Waqaf, Infaq<span> Shodaqoh.</span>
</h3>
<p class="card-paragrap" style="margin-left: 20px;">
  Berikut Adalah Beberapa keutamaan waqaf, Infaq Shadaqoh Yang Akan Anda dapatkan.
</p>
<div class="container2">
  <!-- Card 1 -->
  <div class="card1">
    <div class="card-title" style="text-align: left;">
    <i class='fas fa-heart' style='font-size:24px'></i>
      <h2>Menjadikan Hati Lebih Tenang</h2>
    </div>
    <p class="card-paragraph">
      Kami Memberikan Harga Yang Terbaik dibandingkan dengan kompetitor kami.
    </p>
  </div>

  <!-- Card 2 -->
  <div class="card1">
    <div class="card-title" style="text-align: left;">
      <i class='fas fa-check-circle' style='font-size:24px'></i>
      <h2>Terbukanya Pintu Rezeki</h2>
    </div>
    <p class="card-paragraph">
      Allah SWT akan membuka pintu rezeki dari arah yang tidak di kira sebelumnya.
    </p>
  </div>
</div>

<!-- Card 3 -->
<div class="container2">
  <div class="card1">
    <div class="card-title" style="text-align: left;">
      <i class='fas fa-shield-alt' style='font-size:24px'></i>
      <h2>Menjauhkan Dari Bahaya</h2>
    </div>
    <p class="card-paragraph">
      Rasulullah SAW pernah bersabda: "Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."
    </p>
  </div>

  <!-- Card 4 -->
  <div class="card1">
    <div class="card-title" style="text-align: left;">
      <i class='fas fa-star-and-crescent' style='font-size:24px'></i>
      <h2>Pahala Yang Tak Terputus</h2>
    </div>
    <p class="card-paragraph">
      Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.
    </p>
  </div>
</div>
<!-- Banner -->
<div class="banner">
  <div>
    <img src="<?= BASEURL; ?>/assets_web/img/banner/salaman.png" alt="Foto">
    </div>
  </div>
</div>
<br>
<br>
<br>
<div>
  <h3 style="font-size: 40px; margin-left: 20px;">
    <span style="color: #1F3984; text-align: justify;" >Cara Melakukan</span> Waqaf, Infaq<span> Shodaqoh.</span>
  </h3>
  <p class="card-paragrap" style="margin-left: 20px;">
    Berikut Adalah Beberapa Cara Melakukan waqaf, Infaq Shadaqoh Untuk membantu pembangunan Masjid Besar SMK Wikrama Bogor.
  </p>
</div>
<div class="container3">
  <!-- Card 1 -->
  <div class="card1">
    <div class="card-title">
      <h3 style="color: #1F3984;">01</h3>
      <h2 style="text-align: left;">Isi Form Data Diri</h2>
    </div>
    <p class="card-paragraph1">
    Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.
    </p>
  </div>

  <!-- Card 2 -->
  <div class="card1">
    <div class="card-title">
      <h3 style="color: #1F3984;">02</h3>
      <h2 style="text-align: left;">Isikan Nominal Shadaqoh</h2>
    </div>
    <p class="card-paragraph1">
    Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.
    </p>
  </div>
  </div>

  <!-- Card 3 -->
  <div class="container3">
  <div class="card1">
    <div class="card-title">
      <h3 style="color: #1F3984;">03</h3>
      <h2 style="text-align: left;">Upload Bukti Pembayaran</h2>
    </div>
    <p class="card-paragraph1">
    Pilih motode pembayaran dan upload bukti pembayaranya.
    </p>
  </div>

  <!-- Card 4 -->
  <div class="card1">
    <div style="text-align: left;" class="card-title">
      <h3 style="color: #1F3984;">04</h3>
      <h2>Verifikasi Pembayaran</h2>
    </div>
    <p class="card-paragraph1">
    Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.
    </p>
  </div>
</div>
<br>
<br>
<h3 style="font-size: 40px; margin-left: 20px;">
  <span style="color: #1F3984; text-align: justify;">Data Donatur</span> Waqaf, Infaq<span> Shodaqoh.</span>
</h3>
<p class="card-paragrap" style="margin-left: 20px;">
Berikut adalah data donatur wakaf, infaq shodaqoh untuk masjid besar SMK Wikrama Bogor
</p>
<br>
<table class="table-line">
	<tr>
		<th>Nama Donatur</th>
		<th>ID Donatur</th>
    <th>Paket</th>
    <th>Kategori</th>
    <th>Nominal/Barang</th>
	</tr>
	<tr>
		<td>Elon Muks</td>
		<td>10091212</td>
    <td>Paket 3</td>
    <td>Emas</td>
    <td>50Kg</td>
	</tr>
	<tr>
		<td>Ujang Mustopa</td>
		<td>10095213</td>
    <td>Paket 1</td>
    <td>Uang</td>
    <td>Rp,300.000</td>
	</tr>
	<tr>
  <td>Iqbal Roudatul</td>
		<td>10085266</td>
    <td>Paket 1</td>
    <td>Uang</td>
    <td>Rp,400.000</td>
	</tr>
	<tr>
  <td>Hamba Allah</td>
		<td>10077766</td>
    <td>Paket 1</td>
    <td>Uang</td>
    <td>Rp,1.000.000</td>
	</tr>
</table>
<br>
<br>
<br>
<div>
  <h3 style="font-size: 40px; margin-left: 20px;">
    <span style="color: #1F3984; text-align: justify;" >Gallery</span> Masjid Besar <span> SMK Wikrama Bogor.</span>
  </h3>
  <p class="card-paragrap" style="margin-left: 20px;">
  Berikut adalah gallery masjid besar sMK Wikrama Bogor.
  </p>
</div>
<div class="container3">
    <div class="card2">
      <img src="<?= BASEURL; ?>/assets_web/img/banner/gallery1.png" alt="Foto 1">
    </div>
    <div class="card2">
      <img src="<?= BASEURL; ?>/assets_web/img/banner/gallery2.png" alt="Foto 2">
    </div>
    <div class="card2">
      <img src="<?= BASEURL; ?>/assets_web/img/banner/gallery3.png" alt="Foto 3">
    </div>
    </div>
    <div class="container3">
    <div class="card2">
      <img src="<?= BASEURL; ?>/assets_web/img/banner/gallery4.png" alt="Foto 4">
    </div>
    <div class="card2">
      <img src="<?= BASEURL; ?>/assets_web/img/banner/gallery5.png" alt="Foto 5">
    </div>
    <div class="card2">
      <img src="<?= BASEURL; ?>/assets_web/img/banner/gallery6.png" alt="Foto 6">
    </div>
    <!-- Tambahkan lebih banyak card sesuai kebutuhan -->
  </div>