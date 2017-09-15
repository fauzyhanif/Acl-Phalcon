<!DOCTYPE html>
<html>
<head>
  <title>kwitansi</title>
  <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
  <?= $this->tag->stylesheetLink('css/font-awesome.min.css') ?>
  <?= $this->tag->stylesheetLink('css/core/main.css') ?>
  <?= $this->tag->javascriptInclude('plugins/jQuery/jquery-2.2.3.min.js') ?>
  <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
</head>

<body>
    <header>
      <div class="container-fluid">
        <div class="col-sm-2">
          <div class="logo">
            <?= $this->tag->image(['img/master/logo.jpg', 'class' => 'img-responsive', 'width' => '100']) ?>
          </div><!-- end logo  -->
        </div><!-- end columns  -->

        <div class="col-sm-8">
          <div class="pageTitle">
            <h2>KWITANSI <span>No :</span></h2>
          </div><!-- end pageTitle  -->
        </div><!-- end columns  -->

        <div class="col-sm-2">
          <div class="uniqueNumber">
            <h2>002933</h2>
          </div><!-- end uniqueNumber  -->
        </div><!-- end columns  -->
      </div>
    </header>

    <main>
      <section class="pageBody">
        <div class="container-fluid">
          <div class="col-sm-8">
            <form class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-sm-3">Telah di terima dari :</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-line" value="<?= $data[0]->name ?>">
                </div><!-- end columnd  -->
              </div><!-- end form-group  -->

              <div class="form-group">
                <label class="control-label col-sm-3">No. Registrasi :</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-line" value="<?= $data[0]->student_number ?>">
                </div><!-- end columnd  -->
              </div><!-- end form-group  -->

              <div class="form-group">
                <label class="control-label col-sm-3">Program / Level :</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-line" value="<?= $data[0]->nm_program_studi ?> / <?= $data[0]->level ?>">
                </div><!-- end columnd  -->
              </div><!-- end form-group  -->

              <div class="form-group">
                <label class="control-label col-sm-3">Uang Sejumlah :</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-line" value="Rp. <?= number_format($data[0]->pembayaran_terakhir,0,',','.'); ?>">
                </div><!-- end columnd  -->
              </div><!-- end form-group  -->

              <div class="form-group">
                <label class="control-label col-sm-3">Guna Membayar :</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-line" value="<?= $data[0]->keterangan ?>">
                </div><!-- end columnd  -->
              </div><!-- end form-group  -->
            </form>
          </div><!-- end columns  -->

          <div class="col-sm-4">
            <div class="rekapPembayaranWrapper">
              <div class="rekapPembayaranTitle">
                <h3>REKAP PEMBAYARAN</h3>
              </div><!-- end rekapPembayarantitle  -->

              <div class="rekapPembayaranBody">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-sm-6">Biaya Pendaftaran :</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-line" value="Rp. <?= number_format($data[0]->registration_fee,0,',','.'); ?>">
                    </div><!-- end columnd  -->
                  </div><!-- end form-group  -->

                  <div class="form-group">
                    <label class="control-label col-sm-6">Biaya Kursus :</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-line" value="Rp. <?= number_format($data[0]->tuition_fee,0,',','.'); ?>">
                    </div><!-- end columnd  -->
                  </div><!-- end form-group  -->

                  <div class="form-group">
                    <label class="control-label col-sm-6">Total Biaya Pembayaran :</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-line" value="Rp. <?= number_format($data[0]->registration_fee+$data[0]->tuition_fee,0,',','.'); ?>">
                    </div><!-- end columnd  -->
                  </div><!-- end form-group  -->

                  <div class="form-group">
                    <label class="control-label col-sm-6">Tahap I :</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-line" value="Rp. <?= number_format($data[0]->tahap_1,0,',','.'); ?>">
                    </div><!-- end columnd  -->
                  </div><!-- end form-group  -->

                  <div class="form-group">
                    <label class="control-label col-sm-6">Tahap II :</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-line" value="Rp. <?= number_format($data[0]->tahap_2,0,',','.'); ?>">
                    </div><!-- end columnd  -->
                  </div><!-- end form-group  -->

                  <div class="form-group">
                    <label class="control-label col-sm-6">Tahap III :</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-line" value="Rp. <?= number_format($data[0]->tahap_3,0,',','.'); ?>">
                    </div><!-- end columnd  -->
                  </div><!-- end form-group  -->

                  <div class="form-group">
                    <label class="control-label col-sm-6">Total Dibayar :</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-line" value="Rp. <?= number_format($data[0]->tahap_1+$data[0]->tahap_2+$data[0]->tahap_3,0,',','.'); ?> ">
                    </div><!-- end columnd  -->
                  </div><!-- end form-group  -->

                  <div class="form-group">
                    <label class="control-label col-sm-6">Sisa Tagihan :</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-line" value="Rp. <?= number_format($data[0]->sisa_tagihan,0,',','.'); ?>">
                    </div><!-- end columnd  -->
                  </div><!-- end form-group  -->
                </form>
              </div><!-- end rekapPembayaranBody  -->
            </div><!-- end rekapPembayaranWrapper  -->
          </div><!-- end columns  -->
        </div><!-- end container-fluid  -->
      </section>
    </main>

    <footer>
      <div class="container-fluid">
        <div class="col-sm-8">
          <p>* Uang yang telah di bayarkan tidak bisa di minta kembali dengan alasan apapun.</p>

          <address>
            <h4>KAMPUNG INGGRIS SEMARANG</h4>
            <h5>Izin Dinas Pendidikan No: 893.3/8977/2014</h5>
            <small>Kel. Kalisegoro Kec. Gunungpati Semarang (Seberang Asrama Mahasiswa UNNES), Telp. (024) 8508202, HP. 085713012707</small>
          </address>
        </div><!-- end columns  -->

        <div class="col-sm-4">
          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-3">Semarang, </label>

              <div class="col-sm-9">
                <input type="number" class="form-control form-control-line" value="">
              </div><!-- end columnd  -->
            </div><!-- end form-group  -->

            <div class="form-group">
              <div class="col-sm-12">
                <input type="number" class="form-control form-control-line ttd" value="">
              </div><!-- columns  -->
            </div><!-- end form-group  -->
          </form>
        </div><!-- end columns  -->
      </div>
    </footer>
  </body>
</html>