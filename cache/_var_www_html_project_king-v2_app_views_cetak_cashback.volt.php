<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UIking</title>
    <link rel="stylesheet" type="text/css" href="<?= PUBLIC_PATH . '/img/master/logo.jpg' ?>" type="image/png">

    <!-- Bootstrap  -->
    <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
  	<?= $this->tag->stylesheetLink('plugins/font-awesome/css/font-awesome.min.css') ?>

    <!-- Style -->

  	<link rel="stylesheet" type="text/css" href="<?= PUBLIC_PATH . '/css/cetak/main.css' ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="wrapper">
    <header>
      <div class="container">
        <div class="col-sm-12">
          <div class="text-right">
            <button class="btn btn-default btn-print" type="button" name="button" id="print">PRINT</button>
          </div><!-- text-right  -->
        </div><!-- end columns  -->

        <div class="col-sm-12 alight-center">
          <div class="col-sm-3">
          	<?= $this->tag->image(['img/master/logo.jpg', 'class' => 'SMimg']) ?>
            <!-- <img class="MDimg" src="public/img/logo.jpg" alt="logo"> -->
          </div><!-- end columnd  -->

          <div class="col-sm-9 text-center">
            <h3 class="text-title">Lembaga Kursus dan Pelatihan (LKP)</h3>
            <h1 class="text-title">KAMPUNG INGGRIS SEMARANG</h1>
            <p>
              Izin Dinas Pendidikan No: 893.3/8977/2014 NILEK: 03204.1.01088 <br />
              Head Office: Kel. Kalisegoro RT 04 RW 03, Kec. Gunungpati, Semarang 50229 <br />
              <i class="fa fa-phone"></i> (024) 8502802, <i class="fa fa-mobile-phone"></i> 085713012707, <i class="fa fa-envelope-o"></i> kingsemarang@hotmail.com <i class="fa fa-globe"></i> www.kampunginggrissemarang.com
            </p>
          </div><!-- end columns  -->
        </div><!-- end columns  -->
      </div>
    </header>

    <main>
      <section class="largeFont">
        <div class="container">
          <h2 class="text-center text-title">
            FORMULIR PESERTA PROGRAM CASHBACK <br />
            TERM 3 TAHUN 2017
          </h2>

          <table class="table table-bordered table-condensed">
            <tr>
              <td class="text-center">1</td>
              <td>Nama Lengkap</td>
              <td class="text-center">:</td>
              <td colspan="2">Faizal Andyka Putra</td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>Tempat/Tanggal Lahir</td>
              <td class="text-center">:</td>
              <td colspan="2">Trenggalek, 27 September 2017</td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>No Telp/HP</td>
              <td class="text-center">:</td>
              <td colspan="2">081330413990</td>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>Program/Level Saat Ini</td>
              <td class="text-center">:</td>
              <td colspan="2">Hight Level</td>
            </tr>
            <tr>
              <td class="text-center">5</td>
              <td>Tuition Fee</td>
              <td class="text-center">:</td>
              <td colspan="2">Rp. 10.000</td>
            </tr>
            <tr>
              <td class="text-center">6</td>
              <td>
                Fasilitas Cashback yang Dipilih <br />
                <small>(Jika mimilih, lingkari salah satu)</small>
              </td>
              <td class="text-center">:</td>
              <td>
                1. 10% <br />
                2. 20% <br />
                3. 30% <br />
                4. 40% <br />
                5. 50% <br />
              </td>
              <td>
                6. 60% <br />
                7. 70% <br />
                8. 80% <br />
                9. 90% <br />
                10. 100% <br />
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td colspan="4">
                Daftar nama calon siswa uang diajukan sebagai syaraf fasilitas cashback (pengembalian uang registrasi): <br />
                <div class="col-xs-6">1. Faizal Andyka Putra</div>
                <div class="col-xs-6">HP : 081330413099</div>
                <div class="col-xs-6">2. Faizal Andyka Putra</div>
                <div class="col-xs-6">HP : 081330413099</div>
                <div class="col-xs-6">3. Faizal Andyka Putra</div>
                <div class="col-xs-6">HP : 081330413099</div>
                <div class="col-xs-6">4. Faizal Andyka Putra</div>
                <div class="col-xs-6">HP : 081330413099</div>
                <div class="col-xs-6">5. Faizal Andyka Putra</div>
                <div class="col-xs-6">HP : 081330413099</div>
                <div class="col-xs-6">6. Faizal Andyka Putra</div>
                <div class="col-xs-6">HP : 081330413099</div>
                <div class="col-xs-6">7. Faizal Andyka Putra</div>
                <div class="col-xs-6">HP : 081330413099</div>
                <div class="col-xs-6">8. Faizal Andyka Putra</div>
                <div class="col-xs-6">HP : 081330413099</div>
                <div class="col-xs-6">9. Faizal Andyka Putra</div>
                <div class="col-xs-6">HP : 081330413099</div>
                <div class="col-xs-6">10. Faizal Andyka Putra</div>
                <div class="col-xs-6">HP : 081330413099</div>
              </td>
            </tr>
            <tr>
              <td colspan="5">
                <div class="col-xs-6 marginTB text-center">
                  <div class="col-xs-8">
                    <p class="line">Staff</p>
                  </div>
                </div>
                <div class="col-xs-6 marginTB">
                  <div class="col-xs-9">
                    <p class="line">
                      Tanggal: 24 July 2017 <br />
                      Tanda tangan &amp; nama terang siswa
                    </p>
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </div><!-- container  -->
      </section>
    </main>

    <footer>

    </footer>

    <!-- Jquery  -->
    <?= $this->tag->javascriptInclude('plugins/jQuery/jquery-2.2.3.min.js') ?>
  	<?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
  	<?= $this->tag->javascriptInclude('js/cetak/main.js') ?>

  </body>
</html>
