<style>
.classDiv {
  float: left;
  padding:5px;
}
</style>
<section class="content-header animated fadeIn">
  <h1>FORM PENDAFTARAN</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-edit"></i> Pendaftaran PMB</li>
    <li>Form Pendaftaran</li>
  </ol>
</section>

<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">

        <div class="text-center" style="font-size: 15px; padding-bottom: 30px;">

        <!-- sesi pendaftran -->
          <?php
            if (count($sesi) == 1) {
                 echo "<b>".$sesi[0]->nama_sesi."</b>";
               }  elseif (count($sesi) == 0 ) {
                 echo "<b>Tidak ada pendaftaran</b>";
               } 
            ?>
        </div>
        <!-- end sesi pendaftran -->

        <!-- alert input berhasil -->
        <?php if ($this->session->get('nama')) { ?>

          <div class="alert alert-success alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4>Calon Mahasiswa atas nama <?php echo $x1 = $this->session->get('nama');?> berhasil terdaftar!</h4>
            Nomor Pendaftaran : <?php echo $x2 = $this->session->get('nomor_test');?></br>
            PIN        : <?php echo $x3 = $this->session->get('pin');?>
          </div>
            <?php if ($x1) {
                $this->session->remove("nama");
                $this->session->remove("nomor_test");
                $this->session->remove("pin");
              }
            }
        ?>  
        <!-- end alert input berhasil -->

        <form action="<?= $this->url->get('Input') ?>" method="post">          
        
        <!-- tahun akademik -->
          <?php
            if (count($sesi) == 1) {
                 echo "<input type='hidden' name='sesi' value='".$sesi[0]->id."' class='form-control input-sm'>";
                 echo "<input type='hidden' name='thn_akd' value='".$sesi[0]->thn_akd."' class='form-control input-sm'>";
               }  elseif (count($sesi) == 0 ) {
                 echo "Tidak ada pendaftaran";
               }  elseif (count($sesi) > 1 ) {
                 echo "Tidak ada pendaftaran";
               } 
            ?>
            <!-- end tahun akademik -->


          <!-- Biodata I -->
          <table width="100%" class="tableBiodata">
            <tbody>
              <tr>
                <td colspan="9">
                  <label>I. BIODATA CALON MAHASISWA</label>    
                </td>
              </tr>
              <tr>
                <td width="300">Program / Jurusan </td>
                <td width="10">:</td>
                <td>
                  <div style="width: 220px;" class="classDiv">
                    <select class="form-control input-sm" name="golongan">
                      <option value="">Golongan</option>
                      <?php foreach ($golongan as $gol) { ?>
                        <option value="<?= $gol->id ?>"><?= $gol->golongan ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div style="width: 20px; float: left; padding-top: 10px" align="center">/</div>
                  <div style="width: 220px;" class="classDiv">
                    <select class="form-control input-sm" name="jurusan">
                      <option value="">Jurusan</option>
                      <?php foreach ($jurusan as $jur) { ?>
                        <option value="<?= $jur->id ?>"><?= $jur->jurusan ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="nama" class="form-control input-sm" placeholder="Nama lengkap">
                  </div>
                </td>
              </tr>
              <tr>
                <td>NIK</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="nik" class="form-control input-sm" placeholder="NIK">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="email" class="form-control input-sm" placeholder="Email">
                  </div>
                </td>
              </tr>
              <tr>
                <td>NPWP</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="npwp" class="form-control input-sm" placeholder="NPWP">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td>
                  <div style="width: 230px;" class="classDiv">
                    <input type="text" name="tmp_lahir" class="form-control input-sm" placeholder="Tempat Lahir">
                  </div>
                  <div style="width: 10px; float: left;" align="center"></div>
                  <div style="width: 230px;" class="classDiv">
                    <input type="date" name="tgl_lahir" class="form-control pull-right" id="datepicker">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="alamat" class="form-control input-sm" placeholder="Alamat">
                  </div>
                  <br>
                  <div style="width: 230px;" class="classDiv">
                    <select class="form-control input-sm" name="prvns">
                      <option value="">Provinsi</option>
                      <?php foreach ($wilayah as $w1) { ?>
                        <option value="<?= $w1->id_wil ?>"><?= $w1->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div style="width: 10px; float: left;" align="center"></div>
                  <div style="width: 230px;" class="classDiv">
                    <select class="form-control input-sm" name="kbptn">
                      <option value="">Kabupaten</option>
                      <?php foreach ($kabupaten as $k1) { ?>
                        <option value="<?= $k1->id_wil ?>"><?= $k1->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div style="width: 230px;" class="classDiv">
                    <select class="form-control input-sm" name="kcmtn">
                      <option value="">Kecamatan</option>
                      <?php foreach ($kecamatan as $kec1) { ?>
                        <option value="<?= $kec1->id_wil ?>"><?= $kec1->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div style="width: 10px; float: left;" align="center"></div>
                  <div style="width: 230px;" class="classDiv">
                    <input type="text" name="kodepos" class="form-control input-sm" placeholder="Kodepos">
                  </div>

                  <div style="width: 230px;" class="classDiv">
                    <input type="text" name="dusun" class="form-control input-sm" placeholder="Dusun">
                  </div>
                  <div style="width: 105px;" class="classDiv">
                    <input type="text" name="rt" class="form-control input-sm" placeholder="RT">
                  </div>
                  <div style="width: 20px; padding-top: 10px;" class="classDiv">/</div>
                  <div style="width: 105px;" class="classDiv">
                    <input type="text" name="rw" class="form-control input-sm" placeholder="RW">
                  </div>

                  <br>
                  
                </td>
              </tr>
              <tr>
                <td>Telpon</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="telpon" class="form-control input-sm" placeholder="Telepon">
                  </div>
                </td>
              </tr>
              <tr>
                <td>No. Hp</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="no_hp" class="form-control input-sm" placeholder="Nomor Hp">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <select class="form-control input-sm" name="jns_kel">
                      <option value="">Jenis Kelamin</option>
                      <option value="pria">Pria</option>
                      <option value="wanita">Wanita</option>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Kewargaanegaraan</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <select class="form-control input-sm" name="wn">
                      <option value="">Kewargaan</option>
                      <?php foreach ($kewarganegaraan as $ke) { ?>
                        <option value="<?= $ke->kewarganegaraan ?>"><?= $ke->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Status Kawin</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <select class="form-control input-sm" name="sttus_kwn">
                      <option value="">Status Kawin</option>
                      <option value="belum_kawin">Belum Kawin</option>
                      <option value="kawin">kawin</option>
                      <option value="janda/duda">janda / Duda</option>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <select class="form-control input-sm" name="agama">
                      <option value="">Agama</option>
                        <?php foreach ($agama as $ag) { ?>
                          <option value="<?= $ag->id ?>"><?= $ag->agama ?></option>
                        <?php } ?>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Gol. Darah</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <select class="form-control input-sm" name="gol_darah">
                      <option value="">Golongan Darah</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="AB">AB</option>
                      <option value="O">O</option>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Asal Informasi tentang STIE WW</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <select class="form-control input-sm" name="asal_informasi">
                      <option value="">Asal Informasi STIE</option>
                      <?php foreach ($asalInformasi as $ai) { ?>
                        <option value="<?= $ai->id_informasi ?>"><?= $ai->nama ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Setelah UMPTN STIE merupakan pilihan ke</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="number" name="univ_pilke" class="form-control input-sm" placeholder="STIE Pilihan Ke">
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- ./Biodata I -->
          <hr>
          <!-- Bidata II -->
          <table width="100%" class="tableBiodata">
            <tbody>
              <tr>
                <td colspan="9">
                  <label>II.a INFORMASI ASAL SEKOLAH (untuk calon Mahasiswa Baru)</label>
                </td>
              </tr>
              <tr>
                <td width="300">Nama SMU</td>
                <td width="10">:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <select class="form-control input-sm" name="nama_smu">
                      <option value="">Nama SMU</option>
                      <?php foreach ($smu as $smu) { ?>
                        <option value="<?= $smu->mu_cd ?>"><?= $smu->mu_nm ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Jurusan SMU</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <select class="form-control input-sm" name="jurusan_smu">
                      <option value="">Jurusan SMU</option>
                      <?php foreach ($jur_smu as $js) { ?>
                        <option value="<?= $js->jur_smu_cd ?>"><?= $js->jur_smu_nm ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Nomor Ijazah</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="no_ijazah_smu" class="form-control input-sm" placeholder="Nomor Ijazah">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Jumlah MP</td>
                <td>:</td>
                <td>
                  <div style="width: 180px;" align="center" class="classDiv">
                    <input type="text" name="jmlah_mp" class="form-control input-sm" placeholder="Jumlah MP">
                  </div>
                  <div style="width: 100px; padding-top: 10px" align="right" class="classDiv">
                     Jumlah nilai :
                  </div>
                  <div style="width: 180px;" align="center" class="classDiv">
                    <input type="text" name="jmlah_nilai" class="form-control input-sm" placeholder="Jumlah nilai">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Nilai NEM</td>
                <td>:</td>
                <td>
                  <div style="width: 180px;" align="center" class="classDiv">
                    <input type="text" name="nilai_nem" class="form-control input-sm" placeholder="Nilai NEM">
                  </div>
                  <div style="width: 100px; padding-top: 10px" align="right" class="classDiv">
                     Jumlah MP :
                  </div>
                  <div style="width: 180px;" align="center" class="classDiv">
                    <input type="text" name="jmlah_mp_nem" class="form-control input-sm" placeholder="Jumlah MP">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Alamat Sekolah</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="alamat_sklh" class="form-control input-sm" placeholder="Alamat Sekolah">
                  </div>
                  <div style="width: 230px;" class="classDiv">
                    <select class="form-control input-sm" name="prvns_sklh">
                      <option value="">Provinsi</option>
                      <?php foreach ($wilayah as $w3) { ?>
                        <option value="<?= $w3->id_wil ?>"><?= $w3->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div style="width: 10px; float: left;" align="center"></div>
                  <div style="width: 230px;" class="classDiv">
                    <select class="form-control input-sm" name="kbptn_sklh">
                      <option value="">Kabupaten</option>
                      <?php foreach ($kabupaten as $k3) { ?>
                        <option value="<?= $k3->id_wil ?>"><?= $k3->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div style="width: 230px;" class="classDiv">
                    <select class="form-control input-sm" name="kcmtn_sklh">
                      <option value="">Kecamatan</option>
                      <?php foreach ($kabupaten as $kec2) { ?>
                        <option value="<?= $kec2->id_wil ?>"><?= $kec2->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div style="width: 105px;" class="classDiv">
                    <input type="text" name="rt_sklh" class="form-control input-sm" placeholder="RT">
                  </div>
                  <div style="width: 20px; padding-top: 10px;" class="classDiv">/</div>
                  <div style="width: 105px;" class="classDiv">
                    <input type="text" name="rw_sklh" class="form-control input-sm" placeholder="RW">
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- ./Bidata II -->
          <hr>
          <!-- data perguruan tinggi -->
          <table width="100%" class="tableBiodata">
            <tbody>
              <tr>
                <td colspan="9">
                  <label>II.b. INFORMASI ASAL PERGURUAN TINGGI (untuk calon Mahasiswa Alih Jalur)</label>
                </td>
              </tr>
              <tr>
                <td width="300">Asal Perguruan Tinggi</td>
                <td width="10">:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <input type="text" name="nama_pt" class="form-control input-sm" placeholder="Nama Perguruan Tinggi">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Nomor Ijazah</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="no_ijazah_pt" class="form-control input-sm" placeholder="Nomor Ijazah">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Tahun Ijazah</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="thn_ijazah_pt" class="form-control input-sm" placeholder="Tahun Ijazah">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Jumlah SKS</td>
                <td>:</td>
                <td>
                  <div style="width: 180px;" align="center" class="classDiv">
                    <input type="text" name="jmlah_sks" class="form-control input-sm" placeholder="Jumlah SKS">
                  </div>
                  <div style="width: 100px; padding-top: 10px" align="right" class="classDiv">
                     IPK :
                  </div>
                  <div style="width: 180px;" align="center" class="classDiv">
                    <input type="text" name="ipk" class="form-control input-sm" placeholder="IPK">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Jurusan Asal Perguruan Tinggi</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <input type="text" name="jur_asal_pt" class="form-control input-sm" placeholder="Jurusan">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Alamat Perguruan Tinggi</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="alamat_asal_pt" class="form-control input-sm" placeholder="Alamat Perguruan Tinggi">
                  </div>
                  <div style="width: 230px;" class="classDiv">
                    <select class="form-control input-sm" name="prvns_asal_pt">
                      <option value="">Provinsi</option>
                      <?php foreach ($wilayah as $w4) { ?>
                        <option value="<?= $w4->id_wil ?>"><?= $w4->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div style="width: 10px; float: left;" align="center"></div>
                  <div style="width: 230px;" class="classDiv">
                    <select class="form-control input-sm" name="kbptn_asal_pt">
                      <option value="">Kabupaten</option>
                      <?php foreach ($kabupaten as $k4) { ?>
                        <option value="<?= $k4->id_wil ?>"><?= $k4->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div style="width: 230px;" class="classDiv">
                    <select class="form-control input-sm" name="kcmtn_asal_pt">
                      <option value="">Kecamatan</option>
                      <?php foreach ($kecamatan as $kec3) { ?>
                        <option value="<?= $kec3->id_wil ?>"><?= $kec3->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div style="width: 105px;" class="classDiv">
                    <input type="text" name="rt_asal_pt" class="form-control input-sm" placeholder="RT">
                  </div>
                  <div style="width: 20px; padding-top: 10px;" class="classDiv">/</div>
                  <div style="width: 105px;" class="classDiv">
                    <input type="text" name="rw_asal_pt" class="form-control input-sm" placeholder="RW">
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- ./data perguruan tinggi -->
          <hr>
          <!-- data ORANGTUA -->
          <table width="100%" class="tableBiodata" style="margin-top: -40px">
            <tbody>
              <tr>
                <td colspan="9">
                  <label>III. INFORMASI ORANG TUA CALON MAHASISWA</label><br>
                </td>
              </tr>
              <tr>
                <td>
                  <label style="padding-left: 10px; margin-top: 20px">A. Ayah</label>
                </td>
              </tr>
              <tr>
                <td width="300">Nama Ayah</td>
                <td width="10">:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <input type="text" name="nama_ayah" class="form-control input-sm" placeholder="Nama Lengkap">
                  </div>
                </td>
              </tr>
              <tr>
                <td>No.Induk Kependudukan/NIK Ayah</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="nik_ayah" class="form-control input-sm" placeholder="NIK">
                  </div>
                </td>
              </tr>
              <tr>
                <td>No. Telp/Hp Ayah</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="telpon_ayah" class="form-control input-sm" placeholder="Nomor Telpon">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Pekerjaan Ayah</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <select class="form-control input-sm" name="pekerjaan_ayah">
                      <option value="">Pekerjaan</option>
                        <?php foreach ($pekerjaan as $pek2) { ?>
                          <option value="<?= $pek2->id ?>"><?= $pek2->pekerjaan ?></option>
                        <?php } ?>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Pengahasilan Ayah</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <select class="form-control input-sm" name="penghasilan_ayah">
                      <option value="">Penghasilan</option>
                        <?php foreach ($penghasilan as $phs) { ?>
                          <option value="<?= $phs->id_penghasilan ?>"><?= $phs->nm_penghasilan ?></option>
                        <?php } ?>
                    </select>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <label style="padding-left: 10px; margin-top: 20px">B. Ibu</label>
                </td>
              </tr>
              <br>
              <br>
              <tr>
                <td width="300">Nama Ibu</td>
                <td width="10">:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <input type="text" name="nama_ibu" class="form-control input-sm" placeholder="Nama Lengkap">
                  </div>
                </td>
              </tr>
              <tr>
                <td>No.Induk Kependudukan/NIK Ibu</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="nik_ibu" class="form-control input-sm" placeholder="NIK">
                  </div>
                </td>
              </tr>
              <tr>
                <td>No. Telp/Hp Ibu</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="telpon_ibu" class="form-control input-sm" placeholder="Nomor Telpon">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Pekerjaan Ibu</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <select class="form-control input-sm" name="pekerjaan_ibu">
                      <option value="">Pekerjaan</option>
                        <?php foreach ($pekerjaan as $pek3) { ?>
                          <option value="<?= $pek3->id ?>"><?= $pek3->pekerjaan ?></option>
                        <?php } ?>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Pengahasilan Ibu</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" class="classDiv">
                    <select class="form-control input-sm" name="penghasilan_ibu">
                      <option value="">Penghasilan</option>
                        <?php foreach ($penghasilan as $phs) { ?>
                          <option value="<?= $phs->id_penghasilan ?>"><?= $phs->nm_penghasilan ?></option>
                        <?php } ?>
                    </select>
                  </div>
                </td>
              </tr>

              <tr>
                <td>Alamat Orang Tua</td>
                <td>:</td>
                <td>
                  <div style="width: 460px;" align="center" class="classDiv">
                    <input type="text" name="alamat_ot" class="form-control input-sm" placeholder="Alamat">
                  </div>
                  <br>
                  <div style="width: 230px;" class="classDiv">
                    <select class="form-control input-sm" name="prvns_ot">
                      <option value="">Provinsi</option>
                      <?php foreach ($wilayah as $w1) { ?>
                        <option value="<?= $w1->id_wil ?>"><?= $w1->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div style="width: 10px; float: left;" align="center"></div>
                  <div style="width: 230px;" class="classDiv">
                    <select class="form-control input-sm" name="kbptn_ot">
                      <option value="">Kabupaten</option>
                      <?php foreach ($kabupaten as $k1) { ?>
                        <option value="<?= $k1->id_wil ?>"><?= $k1->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div style="width: 230px;" class="classDiv">
                    <select class="form-control input-sm" name="kcmtn_ot">
                      <option value="">Kecamatan</option>
                      <?php foreach ($kecamatan as $kec1) { ?>
                        <option value="<?= $kec1->id_wil ?>"><?= $kec1->nm_wil ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div style="width: 10px; float: left;" align="center"></div>
                  <div style="width: 230px;" class="classDiv">
                    <input type="text" name="dusun_ot" class="form-control input-sm" placeholder="Dusun">
                  </div>

                  <div style="width: 220px;" class="classDiv">
                    <input type="text" name="rt_ot" class="form-control input-sm" placeholder="RT">
                  </div>

                  <div style="width: 20px; padding-top: 10px;" class="classDiv">/</div>
                  <!-- <div style="width: 10px; float: left;" align="center"></div> -->
                  <div style="width: 220px;" class="classDiv">
                    <input type="text" name="rw_ot" class="form-control input-sm" placeholder="RW">
                  </div>
                  <br>
                  
                </td>
              </tr>
            </tbody>
          </table>
          <!-- ./data orang tua -->
          <hr>
          <div style="padding-right: 205px" class="text-right">
          <?php
            if (count($sesi) == 1) {
                 echo '<button class="btn btn-primary"><i class="fa fa-send"></i> Submit</button>';
               }  elseif (count($sesi) == 0 ) {
                 echo "Tidak ada pendaftaran";
               } elseif (count($sesi) > 1 ) {
                 echo "Tidak ada pendaftaran";
               } 
            ?>
            
          </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- include Js -->
<script type="text/javascript">
	$(document).ready(function() {
        $.ajax({
            url: '<?= $this->url->get('Kodepos') ?>',
            method:"GET",
            dataType:'json',
            success:function(data)
            {
            	// console.log(data);
                $('#kodepos').html(data);
            }
        });
    });
</script>