<!DOCTYPE html>
<html lang="en">

<head>
  <title>Latihan Responsive WEB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet">
  <style>
    .open-sans-judul {
      font-family: "Open Sans", sans-serif;
      font-optical-sizing: auto;
      font-weight: 300;
      font-style: normal;
      font-variation-settings:
        "wdth" 100;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="jumbotron text-center">
      <h1 class="display-3">Selamat Datang</h1>
      <p class="lead">Pemrograman WEB</p>
      <hr class="my-2">
      <p>Click Disini</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Klik Disini</a>
      </p>
    </div>
    <!--latihan grid 1-->
    <div class="row">
      <div class="col bg-success">
        <p>col 1 row 1</p>
      </div>
      <div class="col bg-primary">
        <p>col 1 row 2</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p>col 2 row 1</p>
      </div>
      <div class="col">
        <p>col 2 row 2</p>
      </div>
    </div>
    <!--latihan grid 2-->
    <div class="row">
      <div class="col-3 border">
        <p>col 1 row 1</p>
      </div>
      <div class="col-9 border">
        <p>col 1 row 2</p>
      </div>
    </div>
    <div class="row">
      <div class="col-7 border">
        <p>col 2 row 1</p>
      </div>
      <div class="col-5 border">
        <p>col 2 row 2</p>
      </div>
      <div class="row">
        <div class="col">
          <p>col 2 row 1</p>
        </div>
        <div class="col">
          <p>col 2 row 2</p>
        </div>
      </div>
      <!--Danantara-->
      <div class="row">
        <div class="col-8">
          <p>Tentang Kami</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="open-sans-judul">Danantara Indonesia,<br>
            dikenal sebagai Badan Pengelola Investasi Daya Anagata Nusantara (BPI Danantara), adalah badan pengelola
            investasi strategis yang dibentuk melalui Undang-Undang Nomor 1 Tahun 2025. Sebagai lembaga independen di
            bawah Presiden, Danantara Indonesia memiliki mandat untuk mengelola dan mengoptimalkan investasi pemerintah
            serta aset BUMN guna mendukung pencapaian misi Asta Cita, rencana strategis nasional, serta program
            pemerintah dalam mempercepat industrialisasi dan pertumbuhan ekonomi. Dengan pendekatan yang profesional,
            transparan, dan akuntabel, Danantara Indonesia bertujuan untuk memperkuat tata kelola aset negara,
            menciptakan nilai tambah bagi perekonomian, serta meningkatkan daya saing Indonesia di pasar global.</p>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col">
              <img src="https://tse1.mm.bing.net/th/id/OIP.g_E5mSst64ukflYIf0gqxQHaEJ?pid=Api&h=220&P=0"
                class="img-fluid" alt="Responsive image">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p class="open-sans-judul">Danantara Indonesia menjalankan mandat strategis negara dalam mengelola Badan
                Usaha Milik Negara
                (BUMN), dan mengoordinasikan antara Holding Operasional dan Holding Investasi guna memastikan kegiatan
                operasional dan investasi selaras serta terlaksana secara efektif.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
</body>

</html>
