<style type="text/css">
#formDaftar{
  padding: 5px 10px;
  background-color: #F7CA18;
  font-size: 16px;
}

#formDaftar a{
  color: black;
}

thead{
  background-color: #F7CA18;
  }
</style>

<section class="content animated fadeIn">
  <div class="row">
    <div class="col-md-12">
      <!-- Custom Tabs -->
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">Formulir Pendaftaran</a></li>
          <li><a href="#tab_2" data-toggle="tab">Pemabayaran</a></li>
          <li><a href="#tab_3" data-toggle="tab">Biodata Peserta</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              Cetak Berkas <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cetak Formulir Pendaftaran</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cetak Pemabayaran</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cetak Biodata Peserta</a></li>
            </ul>
          </li>
          <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
        </ul>
        <div class="tab-content form-horizontal">
          <div class="tab-pane active" id="tab_1">
            <h3 style="color: #4183D7">I. Program</h3>
            <div class="form-group">
              <label class="col-sm-1"></label>
              <label for="inputEmail3" class="col-sm-2 ">Program/Level</label>

              <div class="col-sm-8">
                <label>: <?= $data[0]->d->nm_program_studi ?>/<?= $data[0]->c->level ?></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Term/Tahun</label>

              <div class="col-sm-8">
               <label>: <?= $data[0]->b->term ?>/<?= $data[0]->b->years ?></label>
             </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Hari / Jam</label>

              <div class="col-sm-3">
                <label>: <?= $data[0]->b->day ?>/<?= $data[0]->b->hour ?> </label>
              </div>

              <div class="col-sm-2">
                <label>Tanggal Mulai</label>
              </div>
              <div class="col-sm-2">
                <label>: <?= $data[0]->b->start_date ?></label>
              </div>
            </div>

            <h3 style="color: #4183D7">II. Perserta</h3>
            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Nama Lengkap</label>

              <div class="col-sm-8">
                <label>: <?= $data[0]->a->name ?> </label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Pekerjaan</label>

              <div class="col-sm-8">
                <label>: <?= $data[0]->e->pekerjaan ?></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Nama Ayah</label>

              <div class="col-sm-8">
                <label>: <?= $data[0]->a->fathers_name ?></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Nama Ibu</label>

              <div class="col-sm-8">
                <label>: <?= $data[0]->a->mothers_name ?></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Telpon / Hp</label>

              <div class="col-sm-8">
                <label>: <?= $data[0]->a->phone_number ?></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Email</label>

              <div class="col-sm-8">
                <label>: <?= $data[0]->a->email ?></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Alamat</label>

              <div class="col-sm-8">
                <label>: <?= $data[0]->a->phone_number ?></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="dusun_1"  name="dusun" placeholder="Dusun">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" id="rt_1" name="rt" placeholder="RT">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" id="rw_1" name="rw" placeholder="RW">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="kcmtn" name="kcmtn" placeholder="Kecamatan">
                <div id="autocomplete-kecamatan" style="width: 50px"></div>
              </div>

              <div class="col-sm-4">
                <input type="text" id="desa" class="form-control" name="desa" placeholder="Desa">
                <div id="autocomplete-desa"></div>
              </div>
            </div>

            <div class="form-group" style="margin-bottom: 30px">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <input type="text" id="kota" class="form-control" name="kota" placeholder="Kota/Kabupaten">
                <div id="autocomplete-kota"></div>
              </div>

              <div class="col-sm-4">
                <input type="text" id="provinsi" class="form-control" name="prvns" placeholder="Provinsi">
                <div id="autocomplete-provinsi"></div>
              </div>
            </div>

            <h3 style="color: #4183D7">III. Investasi</h3>
            <div class="form-group">
              <label class="col-sm-1"></label>
              <label for="inputEmail3" class="col-sm-2 ">Biaya Pendaftaran</label>

              <div class="col-sm-8">
                <label>: <?= $data[0]->b->registration_fee ?></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-1"></label>
              <label for="inputEmail3" class="col-sm-2 ">Biaya Kursus</label>

              <div class="col-sm-8">
                <label>: </label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label for="inputEmail3" class="col-sm-2 ">Total Biaya</label>

              <div class="col-sm-8">
                <label>: </label>
              </div>
            </div>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_2">
            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Biaya Pendaftaran</label>

              <div class="col-sm-8">
                <label>: </label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Biaya Kursus</label>

              <div class="col-sm-8">
                <label>: </label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Biaya Biaya</label>

              <div class="col-sm-8">
                <label>: </label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Tahap</label>

              <div class="col-sm-8">
                <label>: </label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Total Bayar</label>

              <div class="col-sm-8">
                <label>: </label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Guna Membayar</label>

              <div class="col-sm-8">
                <label>: </label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Status</label>

              <div class="col-sm-8">
                <label>: </label>
              </div>
            </div>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_3">
            <h3 style="color: #4183D7">A. Program Identity <i>(Filled out by Staff)</i></h3>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Term/Year</label>

              <div class="col-sm-4">
                <input type="text" class="form-control" id="term2" placeholder="term" disabled="">
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="years2" placeholder="years" disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Program/Level</label>

              <div class="col-sm-4">
                <input type="text" class="form-control" id="program1" disabled>
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="level1" disabled>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Teacher</label>

              <div class="col-sm-8">
                <select class="form-control" name="teacher_id">
                  <option value="">- Select Teacher -</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Registration Fee</label>

              <div class="col-sm-8">
                <input type="text" class="form-control registration_fee" placeholder="Rp. " disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Tuition Fee</label>

              <div class="col-sm-8">
                <input type="text" class="form-control tuition_fee" placeholder="Rp. " disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Total Fee</label>

              <div class="col-sm-8">
                <input type="text" class="form-control total_fee" placeholder="Rp. " disabled="">
              </div>
            </div>



            <h3 style="color: #4183D7">B. Personal Identity <i>(Filled out by Staff)</i></h3>
            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Name</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" id="name_2" placeholder="Name" disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Date of Birth</label>

              <div class="col-sm-4">
                <input type="text" class="form-control" name="place_of_birth" placeholder="Place of Birth" disabled="">
              </div>

              <div class="col-sm-4">
                <input type="text" class="form-control" name="date_of_birth" id="datepicker1" disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Occupation</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" name="occupation" placeholder="Company">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Company</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" name="company" placeholder="Company">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">School/Class </label>

              <div class="col-sm-6">
                <input type="text" class="form-control" name="school" placeholder="School">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" name="school_class" placeholder="Class">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">University</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" name="university" placeholder="University">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Department/Semester</label>

              <div class="col-sm-4">
                <input type="text" class="form-control" name="department" placeholder="Department">
              </div>

              <div class="col-sm-4">
                <input type="text" class="form-control" name="semester" placeholder="Semester">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Gender</label>

              <div class="col-sm-8">
                <select class="form-control" name="gender">
                  <option value="">- Choose Gender -</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Father's Name</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" id="fathers_name_2" placeholder="Father's Name" disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Mother's Name</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" id="mothers_name_2" placeholder="Mother's Name" disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Home Addres</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" id="alamat_2" placeholder="Jln." disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="dusun_2" placeholder="Dusun" disabled="">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" id="rt_2" placeholder="RT" disabled="">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" id="rw_2" placeholder="RW" disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="kcmtn_2" placeholder="Kecamatan" disabled="">
              </div>

              <div class="col-sm-4">
                <input type="text" class="form-control" id="desa_2" placeholder="Desa" disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="kota_2" placeholder="Kota/Kabupaten" disabled=""> 
              </div>

              <div class="col-sm-4">
                <input type="text" class="form-control" id="provinsi_2" placeholder="Provinsi" disabled="">
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Current Addres</label>

              <div class="col-sm-8">
                <input type="text" class="form-control"  name="c_alamat" placeholder="Jln.">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="c_dusun" placeholder="Dusun">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" name="c_rt" placeholder="RT">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" name="c_rw" placeholder="RW">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="c_kcmtn" name="c_kcmtn" placeholder="Kecamatan">
                <div id="autocomplete-kecamatan-c" style="width: 50px"></div>
              </div>

              <div class="col-sm-4">
                <input type="text" class="form-control" id="c_desa" name="c_desa" placeholder="Desa">
                <div id="autocomplete-desa-c" style="width: 50px"></div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="c_kota" name="c_kota" placeholder="Kota/Kabupaten">
                <div id="autocomplete-kota-c" style="width: 50px"></div>
              </div>

              <div class="col-sm-4">
                <input type="text" class="form-control" id="c_provinsi" name="c_prvns" placeholder="Provinsi">
                <div id="autocomplete-provinsi-c" style="width: 50px"></div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Student's Phone Number</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" id="phone_number_2" placeholder="Student's Phone Number" disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Student's Phone Number Alternatif</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" id="phone_number_alternative_2" placeholder="08xxx" required="required" disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Parent's Phone Number</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" name="parents_number_phone" placeholder="Desa">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Email</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" id="email_2" placeholder="Email" disabled="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Facebook</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" name="facebook" placeholder="Facebook">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Religion</label>

              <div class="col-sm-8">
                <select class="form-control" name="religion">
                  <option>- Select Religion -</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Get Information From</label>

              <div class="col-sm-8">
                <select class="form-control" class="get_information">
                  <option>- Select Information -</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Photo</label>
              <div class="col-sm-8">
                <input type="file" class="filestyle" data-buttonbefore="true" name="photo_profile">
              </div>
            </div>


            <h3 style="color: #4183D7">C. Facilities Checklist <i>(Filled out by Staff)</i></h3>
            <div class="form-group">
              <div class="checkbox">
                <label class="col-sm-1"></label>
                <label class="col-sm-2" style="padding-left: 40px">
                  <input type="checkbox" checked="" name="coursebook" value="Y">
                  <b>Coursebook</b>
                </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control pull-right" name="corsebook_date" id="datepicker2">
                </div>

                <label class="col-sm-2" style="padding-left: 60px">
                  <input type="checkbox" name="receipt_1" value="Y">
                  <b>Receipt I</b>
                </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control pull-right" name="receipt_1_date" id="datepicker3">
                </div>
              </div>
            </div>

           <div class="form-group">
            <div class="checkbox">
              <label class="col-sm-1"></label>
              <label class="col-sm-2" style="padding-left: 40px">
                <input type="checkbox" name="students_biodata" value="Y">
              <b>Student's Biodata</b>
              </label>
              <div class="col-sm-3">
                <input type="text" class="form-control pull-right" name="student_biodata_date" id="datepicker4">
              </div>

              <label class="col-sm-2" style="padding-left: 60px">
                <input type="checkbox" name="receipt_2" value="Y">
                <b>Receipt II</b>
              </label>
              <div class="col-sm-3">
               <input type="text" class="form-control pull-right" name="receipt_2_date" id="datepicker5">
             </div>
            </div>
          </div>

          <div class="form-group">
            <div class="checkbox">
              <label class="col-sm-1"></label>
              <label class="col-sm-2" style="padding-left: 40px">
                <input type="checkbox" name="student_card" value="Y">
                <b>Student Card</b>
              </label>
              <div class="col-sm-3">
                <input type="text" class="form-control pull-right" name="student_card_date" id="datepicker6">
              </div>

              <label class="col-sm-2" style="padding-left: 60px">
                <input type="checkbox" name="achievement_report" value="Y">
                <b>Achievment Report</b>
              </label>
              <div class="col-sm-3">
                <input type="text" class="form-control pull-right" name="achievement_report_date" id="datepicker7">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="checkbox">
              <label class="col-sm-1"></label>
              <label class="col-sm-2" style="padding-left: 40px">
                <input type="checkbox" name="panduan" value="Y">
                <b>Panduan dan Tata Tertib</b>
              </label>
              <div class="col-sm-3">
                <input type="text" class="form-control pull-right" name="panduan_date" id="datepicker8">
              </div>

              <label class="col-sm-2" style="padding-left: 60px">
                <input type="checkbox" name="photo" value="Y">
                <b>Photo 3x4</b>
              </label>
              <div class="col-sm-3">
                <input type="text" class="form-control pull-right" name="photo_date" id="datepicker9">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="checkbox">
              <label class="col-sm-1"></label>
              <label class="col-sm-2" style="padding-left: 40px">
                <input type="checkbox" name="invoice_1" value="Y">
                <b>Invoice I</b>
              </label>
              <div class="col-sm-3">
                <input type="text" class="form-control pull-right" name="invoice_1_date" id="datepicker10">
              </div>

              <label class="col-sm-2" style="padding-left: 60px">
                <input type="checkbox" name="certivicate" value="Y">
                <b>Certificate</b>
              </label>
              <div class="col-sm-3">
                <input type="text" class="form-control pull-right"  name="certivicate_date" id="datepicker11">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="checkbox">
              <label class="col-sm-1"></label>
              <label class="col-sm-2" style="padding-left: 40px">
                <input type="checkbox" name="invoice_2" value="Y">
                <b>Invoice 2</b>
              </label>
              <div class="col-sm-3">
                <input type="text" class="form-control pull-right" name="invoice_2_date" id="datepicker12">
              </div>
            </div>
          </div>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- nav-tabs-custom -->
    </div>
  </div>
</section>


<script type="text/javascript">
$('#datepicker').datepicker({
  autoclose: true
});
$('#datepicker2').datepicker({
  autoclose: true
});



function reset()
{
  $('#pendaftaran').trigger("reset");
}

function program_studi(id){
   $.ajax({
     type: "POST",
     url: "Pendaftaran/filterprogram",
     dataType : 'json',
     data: "id="+id,
     success: function(result){
      var string = '';
      string += '<option value="">- Pilih Level -</option>'
      for (x in result) {
        string += '<option value="'+result[x].level+'">'+result[x].level+'</option>'
      }
      $("#level").html(string);
     }
   });
  $("#programs").val(id);
}



function levels(id){
  var program = $("#programs").val();
   $.ajax({
     type: "POST",
     url: "Pendaftaran/filterlevel",
     dataType : 'json',
     data: "id="+id+"&program="+program,
     success: function(result){
      console.log(result)
        $(".registration_fee").val(result.pendaftaran);
        $("#registration_fee_2").html(result.pendaftaran2);
        $(".tuition_fee").val(result.kursus);
        $("#tuition_fee_2").html(result.kursus2);
        $("#pbi").val(result.id);
        var int_kursus = parseInt(result.kursus)
        var int_pendaftaran = parseInt(result.pendaftaran)
        $(".total_fee").val(int_kursus + int_pendaftaran);
        $("#total_fee_2").html(result.total);
        $("#program1").val(result.program);
        $("#level1").val(id);
     }
   });
}

// save-edit-delete
(function() {
$('form[data-remote]').on('submit', function(e) {
    var form = $(this);
    var url = form.prop('action');

    $.ajax({
      type: 'POST',
      url: url,
      dataType:'json',
      data: form.serialize(),
      success: function(response){
       swal({
          title: '<h2>Berhasil !</h2>',
          type: 'success',
          showConfirmButton:false,
          html:
          'Pendaftaran Peserta berhasil. <br>'+
          '<span>Klik tombol dibawah ini untuk melakukan pembayaran</span>. <br>'+
          '<div class="text-center" style="padding-top:30px;">'+
            '<a href="Pendaftaran/Pembayaran/'+response+'" class="btn btn-primary" style="width:100%;"> Lanjut Pembayaran</a>'+
          '<div>',
        });

        $('#pendaftaran').trigger("reset");
      }
    });
 
    e.preventDefault();
  });

})();


$(document).ready(function(){
  $("#years1").keyup(function(){
    var x = $("#years1").val();
      $("#years2").val(x);
  });  

  $("#name_1").keyup(function(){
    var x = $("#name_1").val();
      $("#name_2").val(x);
  });  

  $("#fathers_name_1").keyup(function(){
    var x = $("#fathers_name_1").val();
      $("#fathers_name_2").val(x);
  });  

  $("#mothers_name_1").keyup(function(){
    var x = $("#mothers_name_1").val();
      $("#mothers_name_2").val(x);
  });

  $("#phone_number_1").keyup(function(){
    var x = $("#phone_number_1").val();
      $("#phone_number_2").val(x);
  });

  $("#phone_number_alternative_1").keyup(function(){
    var x = $("#phone_number_alternative_1").val();
      $("#phone_number_alternative_2").val(x);
  });  

  $("#email_1").keyup(function(){
    var x = $("#email_1").val();
      $("#email_2").val(x);
  });

  $("#dusun_1").keyup(function(){
    var x = $("#dusun_1").val();
      $("#dusun_2").val(x);
  });

  $("#rt_1").keyup(function(){
    var x = $("#rt_1").val();
      $("#rt_2").val(x);
  });

  $("#rw_1").keyup(function(){
    var x = $("#rw_1").val();
      $("#rw_2").val(x);
  });

  $("#alamat_1").keyup(function(){
    var x = $("#alamat_1").val();
      $("#alamat_2").val(x);
  });

  $("#kcmtn").keyup(function(){
    var x = $("#kcmtn").val();
      $("#kcmtn_2").val(x);
  });

  $("#desa").keyup(function(){
    var x = $("#desa").val();
      $("#desa_2").val(x);
  });

  $("#kota").keyup(function(){
    var x = $("#kota").val();
      $("#kota_2").val(x);
  });

  $("#provinsi").keyup(function(){
    var x = $("#provinsi").val();
      $("#provinsi_2").val(x);
  });
});

// $("#term1").on("change", terms);
function terms(id){
  // console.log(id)
  $("#term2").val(id);
}

</script>
