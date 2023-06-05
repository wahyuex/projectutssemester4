<!DOCTYPE html>
<html>
<head>
  <title>Preloader dengan Animasi dan Output</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>
   .home{
            background-color: #1D1D1D;
            color: #FFFFFF;
            font-family: 'Crimson Pro';
        }
</style>
<body>
  <div class="home">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand ml-auto" style="color: #FFD700;" href="{{ route('project.index') }}">Go To Project</a>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <img src="{{ Vite::asset('resources/images/PP.jpg') }}" alt="Gambar Acak" style="border-radius: 30%; max-width: 90%; height: 300px;">
          </div>
        </div>
        <div class="col-md-6 text-center my-5">
          <h2>Hello I Am</h2>
          <h1 style="color: #FFD700;font-family: 'Lato';">Rochmat Wahyu Prayogi</h1>
          <h3>Iam A Student Of University Institut Telkom Surabaya</h3>
        </div>
      </div>
      <div class="row py-5">
        <div class="col-md-4">
          <h2 class="text-center"style="color: #FFD700;" >-</h2><br><br>
          <p>Tanggal Lahir : 22 Januari 2003</p>
          <p>Alamat : Menganti Gresik</p>
          <p>Kontak : 087853172660</p>
        </div>
        <div class="col-md-4">
          <h2 class="text-center">ABOUT ME</h2>
          <p class="py-5">Pendidikan : <br> SDN 1 Menganti | 2009-2015 | <br>SMP AL AZHAR | 2015-2018 | <br>SMAN 1 MENGANTI | 2018-2021 | <br>IT TEKNOLOGI TELKOM SURABAYA | ONGOING | <br> Minat Dan Hobi : <br>Badminton <br>Sepak Bola <br> Ngoding</p>
        </div>
        <div class="col-md-4">
          <h2 class="text-center" style="color: #FFD700;">-</h2><br><br>
          <p>Pengalaman Kerja : <br>Admin Rekber Game Crisis Action |2015-2017| <br>Ikut Dagang Jualan Ikan Dipasar</p>
          <p>Keterampilan : <br> Junior Front End <br>Junior Back End <br> KANG AIRDROP</p>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    // Menunggu seluruh konten halaman web selesai dimuat
    $(window).on('load', function() {
      // Menghilangkan preloader setelah konten halaman selesai dimuat
      $('.preloader').fadeOut('slow');
    });
  </script>
</body>
</html>
