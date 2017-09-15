<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pendaftaran</title>
  	<link rel="stylesheet" type="text/css" href="<?= PUBLIC_PATH . '/img/master/logo.jpg' ?>" type="image/png">

    <!-- Bootstrap  -->
    <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
  	<?= $this->tag->stylesheetLink('plugins/font-awesome/css/font-awesome.min.css') ?>

    <!-- Style -->

  	<link rel="stylesheet" type="text/css" href="<?= PUBLIC_PATH . '/css/cetak/main.css' ?>">
  	<link rel="stylesheet" type="text/css" href="<?= PUBLIC_PATH . '/css/cetak/print.css' ?>" media="print">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="wrapper">
    <header>

    </header>

    <main>
      <section class="bigFont">
        <div class="container">
          <div class="text-right">
            <button class="btn btn-default btn-print" type="button" name="button" id="print">PRINT</button>
          </div><!-- text-right  -->

          <table class="table table-bordered table-condensed">
            <tr>
              <td class="text-center"><h2 class="text-title">FORMULIR PENDAFTARAN</h2></td>
              <td><h2 class="text-title">KING <span class="pull-right">NO: 0001084</span></h2></td>
            </tr>

            <tr>
              <td class="text-center middle ">
                <h4 class="text-title">Lembaga Kursus dan Pelatihan (LKP)</h4>
                <h3 class="text-title">KAMPUNG INGGRIS SEMARANG</h3>
              </td>
              <td class="text-center">
                <div class="kingLogo">
                  <?= $this->tag->image(['img/master/logo.jpg', 'class' => 'SMimg']) ?>
                  <p>
                    Izin Dinas Pendidikan No: 893.3/8977/2014 <br />
                    NILEK: 03204.1.01088
                  </p>
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2" class="text-center">
                <p class="kingAddress">
                  Kel. Kalisegoro RT 04 RW III, Kec. Gunungpati, Semarang <br />
                  Telp. (024) 8508202 HP/WA 085713012707 Email: kingsemarang@hotmail.com <br />
                  Website: www.kampunginggrissemarang.com
                </p>
              </td>
            </tr>
          </table>

          <table class="table table-bordered table-condensed FPprogram">
            <h4 class="text-title">PROGRAM</h4>

            <tr>
              <td>Program/Level</td>
              <td>Conversation</td>
              <td>Term/Tahun</td>
              <td>2017</td>
            </tr>

            <tr>
              <td>Hari/Jam</td>
              <td>12.00</td>
              <td>Tanggal Mulai</td>
              <td>12 July 2016</td>
            </tr>
          </table>

          <table class="table table-bordered table-condensed FPpeserta">
            <h4 class="text-title">PESERTA</h4>

            <tr>
              <td>Nama Lengkap</td>
              <td>Faizal Andyka Putra</td>
            </tr>
            <tr>
              <td>Pekerjaan</td>
              <td>Web Developer</td>
            </tr>
            <tr>
              <td>Nama Orang Tua <br /> <small>(untuk siswa TK-SMA)</small></td>
              <td>blabla</td>
            </tr>
            <tr>
              <td>Telepon/HP</td>
              <td>081330413990</td>
            </tr>
            <tr>
              <td>Telp./HP Alternatif</td>
              <td>081330413909</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>logustra@gmail.com</td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>Kel. Kalisegoro RT 04 RW III, Kec. Gunungpati, Semarang</td>
            </tr>
          </table>

          <table class="table table-bordered table-condensed FPinvestasi">
            <h4 class="text-title">INVESTASI</h4>

            <tr>
              <td>Biaya Pendaftaran</td>
              <td>Rp. 500.000</td>
              <td rowspan="3">
                Cash atau transfer: <br />
                Bank Muamalat Indonesia <br />
                No. Rek. 5010112344 <br />
                a.n. Yunita Irmawati
              </td>
            </tr>

            <tr>
              <td>Biaya Kursus</td>
              <td>Rp. 500.000</td>
            </tr>

            <tr>
              <td>Total Biaya</td>
              <td>Rp. 1.000.000</td>
            </tr>

            <tr>
              <td colspan="2" class="text-center">Semarang, 21 July 2017</td>
              <td rowspan="2">
                1/1: Siswa <br />
                2/2: Staf <br />
                3/3: Accounting
              </td>
            </tr>

            <tr>
              <td class="text-center">
                Tanda Tangan Siswa <br />
                <br />
                <br />
                <br />
                <br />
              </td>
              <td class="text-center">
                Tanda Tangan &amp; Nama Staf <br />
                <br />
                <br />
                <br />
                <br />
              </td>
            </tr>

            <tr>
              <td colspan="3">*Pendaftaran di nyatakan sah setelah siswa membayar biaya kursus. <span class="pull-right">1/1</span></td>
            </tr>
          </table>
        </div><!-- container  -->
      </section>
    </main>

    <footer>

    </footer>

    <?= $this->tag->javascriptInclude('plugins/jQuery/jquery-2.2.3.min.js') ?>
  	<?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
  	<?= $this->tag->javascriptInclude('js/cetak/main.js') ?>
    
  </body>
</html>
