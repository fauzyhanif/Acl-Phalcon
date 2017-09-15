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
      <div class="box box-danger">
        <div class="box-header">
          <h1 class="box-title">Edit Data Peserta</h1>
          <div class="box-tools pull-right">
            <a href="<?= $this->url->get('Pendaftaran/List') ?>" class="btn bg-navy btn-flat btn-block">
              <i class="fa fa-edit"></i> List Pendaftaran
            </a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form class="form-horizontal" id="pendaftaran" action="<?= $this->url->get('Peserta/update') ?>" method="POST"  enctype="multipart/form-data">
              <input type="hidden" value="<?= $data[0]->id ?>" name="id">
              <div class="box-body">
              <h3 style="color: #4183D7">A. Program Identity <i>(Filled out by Staff)</i></h3>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label for="inputEmail3" class="col-sm-2 ">Student Number</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?= $data[0]->student_number ?>" disabled>
                  </div>
                 
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Term/Year</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $data[0]->term ?>" name="term" placeholder="term">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $data[0]->years ?>" name="years" placeholder="years">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Program/Level</label>

                  <div class="col-sm-4">
                    <select class="form-control" name="program_id">
                      <option>- Select Program -</option>
                      <?php foreach ($program as $x) { ?>
                      <?php if ($data[0]->program_id == $x->id) { ?>
                        <option value="<?= $x->id ?>" selected="selected"><?= $x->nm_program_studi ?></option>
                      <?php } ?>
                      <option value="<?= $x->id ?>"><?= $x->nm_program_studi ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <select class="form-control" name="level_active">
                      <option>- Select Level -</option>
                      <option selected="selected"><?= $data[0]->level_active ?></option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
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
                    <input type="text" class="form-control" value="<?= $data[0]->registration_fee ?>" name="registration_fee" placeholder="Rp. ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Tuition Fee</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?= $data[0]->tuition_fee ?>" name="tuition_fee" placeholder="Rp. ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Total Fee</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?= $data[0]->total_fee ?>" name="total_fee" placeholder="Rp. ">
                  </div>
                </div>

                

                <h3 style="color: #4183D7">B. Personal Identity <i>(Filled out by Staff)</i></h3>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Name</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" value="<?= $data[0]->name ?>" placeholder="Name">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Date of Birth</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control"  value="<?= $data[0]->place_of_birth ?>" name="place_of_birth" placeholder="Place of Birth">
                  </div>

                  <div class="col-sm-4">
                    <input type="text" class="form-control"  value="<?= $data[0]->date_of_birth ?>" name="date_of_birth" id="datepicker1">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Company</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?= $data[0]->company ?>" name="company" placeholder="Company">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">School/Class </label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" value="<?= $data[0]->school ?>" name="school" placeholder="School">
                  </div>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" value="<?= $data[0]->school_class ?>" name="school_class" placeholder="Class">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">University</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?= $data[0]->university ?>" name="university" placeholder="University">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Department/Semester</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $data[0]->department ?>" name="department" placeholder="Department">
                  </div>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $data[0]->semester ?>" name="semester" placeholder="Semester">
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
                    <input type="text" class="form-control" value="<?= $data[0]->fathers_name ?>" name="fathers_name" placeholder="Father's Name">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Mother's Name</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?= $data[0]->mothers_name ?>" name="mothers_name" placeholder="Mother's Name">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Home Addres</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" name="alamat"><?= $data[0]->alamat ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $data[0]->dusun ?>" name="dusun" placeholder="Dusun">
                  </div>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" value="<?= $data[0]->rt ?>" name="rt" placeholder="RT">
                  </div>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" value="<?= $data[0]->rw ?>" name="rw" placeholder="RW">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $data[0]->kcmtn ?>" id="kcmtn" name="kcmtn" placeholder="Kecamatan">
                    <div id="autocomplete-kecamatan" style="width: 50px"></div>
                  </div>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $data[0]->desa ?>" id="desa" name="desa" placeholder="Desa">
                    <div id="autocomplete-desa" style="width: 50px"></div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $data[0]->kota ?>" id="kota" name="kota" placeholder="Kota/Kabupaten">
                    <div id="autocomplete-kota" style="width: 50px"></div>
                  </div>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $data[0]->prvns ?>" id="prvns" name="prvns" placeholder="Provinsi">
                    <div id="autocomplete-provinsi" style="width: 50px"></div>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Current Addres</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" name="c_alamat"> <?= $data[0]->c_alamat ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $data[0]->c_dusun ?>" name="c_dusun" placeholder="Dusun">
                  </div>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" value="<?= $data[0]->c_rt ?>" name="c_rt" placeholder="RT">
                  </div>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" value="<?= $data[0]->c_rw ?>" name="c_rw" placeholder="RW">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="c_kcmtn" value="<?= $data[0]->c_kcmtn ?>" name="c_kcmtn" placeholder="Kecamatan">
                    <div id="autocomplete-kecamatan-c" style="width: 50px"></div>
                  </div>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="c_desa" value="<?= $data[0]->c_desa ?>" name="c_desa" placeholder="Desa">
                    <div id="autocomplete-desa-c" style="width: 50px"></div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="c_kota" value="<?= $data[0]->c_kota ?>" name="c_kota" placeholder="Kota/Kabupaten">
                    <div id="autocomplete-kota-c" style="width: 50px"></div>
                  </div>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="c_provinsi" value="<?= $data[0]->c_prvns ?>" name="c_prvns" placeholder="Provinsi">
                    <div id="autocomplete-provinsi-c" style="width: 50px"></div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Student's Phone Number</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?= $data[0]->phone_number ?>" name="phone_number" placeholder="Student's Phone Number">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Parent's Phone Number</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?= $data[0]->parents_number_phone ?>" name="parents_number_phone" placeholder="Desa">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Email</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?= $data[0]->email ?>" name="email" placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Facebook</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?= $data[0]->facebook ?>" name="facebook" placeholder="Facebook">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Religion</label>

                  <div class="col-sm-8">
                    <select class="form-control" name="religion">
                      <option>- Select Religion -</option>
                      <?php foreach ($agama as $x) { ?>
                      <?php if ($data[0]->religion == $x->id) { ?>
                        <option value="<?= $x->id ?>" selected="selected"><?= $x->agama ?></option>
                      <?php } ?>
                      <option value="<?= $x->id ?>"><?= $x->agama ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Get Information From</label>

                  <div class="col-sm-8">
                    <select class="form-control" class="get_information">
                      <option>- Select Information -</option>
                      <?php foreach ($informasi as $x) { ?>
                       <?php if ($data[0]->informasi == $x->id) { ?>
                        <option value="<?= $x->id ?>" selected="selected"><?= $x->nama ?></option>
                      <?php } ?>
                      <option value="<?= $x->id ?>"><?= $x->nama ?></option>
                      <?php } ?>
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
                      <?php if ($data[0]->coursebook == 'Y') { ?>
                      <input type="checkbox" checked="" name="coursebook" value="Y">
                      <?php } else { ?>
                      <input type="checkbox" name="coursebook" value="Y">
                      <?php } ?>
                      <b>Coursebook</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" value="<?= $data[0]->corsebook_date ?>" name="corsebook_date" id="datepicker2">
                    </div>

                    <label class="col-sm-2" style="padding-left: 60px">
                      <?php if ($data[0]->receipt_1 == 'Y') { ?>
                      <input type="checkbox" checked="" name="receipt_1" value="Y">
                      <?php } else { ?>
                      <input type="checkbox" name="receipt_1" value="Y">
                      <?php } ?>
                      <b>Receipt I</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" value="<?= $data[0]->receipt_1_date ?>" name="receipt_1_date" id="datepicker3">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="checkbox">
                    <label class="col-sm-1"></label>
                    <label class="col-sm-2" style="padding-left: 40px">
                      <?php if ($data[0]->students_biodata == 'Y') { ?>
                      <input type="checkbox" checked="" name="students_biodata" value="Y">
                      <?php } else { ?>
                      <input type="checkbox" name="students_biodata" value="Y">
                      <?php } ?>
                      <b>Student's Biodata</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" value="<?= $data[0]->student_biodata_date ?>" name="student_biodata_date" id="datepicker4">
                    </div>

                    <label class="col-sm-2" style="padding-left: 60px">
                      <?php if ($data[0]->receipt_2 == 'Y') { ?>
                      <input type="checkbox" checked="" name="receipt_2" value="Y">
                      <?php } else { ?>
                      <input type="checkbox" name="receipt_2" value="Y">
                      <?php } ?>
                      <b>Receipt II</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" value="<?= $data[0]->receipt_2_date ?>" name="receipt_2_date" id="datepicker5">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="checkbox">
                    <label class="col-sm-1"></label>
                    <label class="col-sm-2" style="padding-left: 40px">
                      <?php if ($data[0]->student_card == 'Y') { ?>
                      <input type="checkbox" checked="" name="student_card" value="Y">
                      <?php } else { ?>
                      <input type="checkbox" name="student_card" value="Y">
                      <?php } ?>
                      <b>Student Card</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" value="<?= $data[0]->student_card_date ?>" name="student_card_date" id="datepicker6">
                    </div>

                    <label class="col-sm-2" style="padding-left: 60px">
                      <?php if ($data[0]->achievement_report == 'Y') { ?>
                      <input type="checkbox" checked="" name="achievement_report" value="Y">
                      <?php } else { ?>
                      <input type="checkbox" name="achievement_report" value="Y">
                      <?php } ?>
                      <b>Achievment Report</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" value="<?= $data[0]->achievement_report_date ?>" name="achievement_report_date" id="datepicker7">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="checkbox">
                    <label class="col-sm-1"></label>
                    <label class="col-sm-2" style="padding-left: 40px">
                      <?php if ($data[0]->panduan == 'Y') { ?>
                      <input type="checkbox" checked="" name="panduan" value="Y">
                      <?php } else { ?>
                      <input type="checkbox" name="panduan" value="Y">
                      <?php } ?>
                      <b>Panduan dan Tata Tertib</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" value="<?= $data[0]->panduan_date ?>" name="panduan_date" id="datepicker8">
                    </div>

                    <label class="col-sm-2" style="padding-left: 60px">
                      <?php if ($data[0]->photo == 'Y') { ?>
                      <input type="checkbox" checked="" name="photo" value="Y">
                      <?php } else { ?>
                      <input type="checkbox" name="photo" value="Y">
                      <?php } ?>
                      <b>Photo 3x4</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" value="<?= $data[0]->photo_date ?>" name="photo_date" id="datepicker9">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="checkbox">
                    <label class="col-sm-1"></label>
                    <label class="col-sm-2" style="padding-left: 40px">
                      <?php if ($data[0]->invoice_1 == 'Y') { ?>
                      <input type="checkbox" checked="" name="invoice_1" value="Y">
                      <?php } else { ?>
                      <input type="checkbox" name="invoice_1" value="Y">
                      <?php } ?>
                      <b>Invoice I</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" value="<?= $data[0]->invoice_1_date ?>" name="invoice_1_date" id="datepicker10">
                    </div>

                    <label class="col-sm-2" style="padding-left: 60px">
                      <?php if ($data[0]->certivicate == 'Y') { ?>
                      <input type="checkbox" checked="" name="certivicate" value="Y">
                      <?php } else { ?>
                      <input type="checkbox" name="certivicate" value="Y">
                      <?php } ?>
                      <b>Certificate</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" value="<?= $data[0]->certivicate_date ?>" name="certivicate_date" id="datepicker11">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="checkbox">
                    <label class="col-sm-1"></label>
                    <label class="col-sm-2" style="padding-left: 40px">
                      <?php if ($data[0]->invoice_2 == 'Y') { ?>
                      <input type="checkbox" checked="" name="invoice_2" value="Y">
                      <?php } else { ?>
                      <input type="checkbox" name="invoice_2" value="Y">
                      <?php } ?>
                      <b>Invoice 2</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" value="<?= $data[0]->invoice_2_date ?>" name="invoice_2_date" id="datepicker12">
                    </div>

                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-right" style="margin-right: 100px">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
        </div>
      </div>
    </div>
  </div>
</section>


<script type="text/javascript">

for (var i = 0; i <= 12; i++) {
  $('#datepicker'+[i]).datepicker({
    autoclose: true
  });
}

(function() {
  // kec
  'use strict';
    var kecJson = {
      <?= $kec ?>
    }
    var kecArray = $.map(kecJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#kcmtn').autocomplete({
      minChars: 2,
      lookup: kecArray,
      appendTo: '#autocomplete-kecamatan',
    });
    $('#kcmtn').keyup(function(){
  });


  // kec
  'use strict';
    var kecJson = {
      <?= $kec ?>
    }
    var kecArray = $.map(kecJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#c_kcmtn').autocomplete({
      minChars: 2,
      lookup: kecArray,
      appendTo: '#autocomplete-kecamatan-c',
    });
    $('#c_kcmtn').keyup(function(){
  });



  // desa
  'use strict';
    var desaJson = {
      <?= $desa ?>
    }
    var desaArray = $.map(desaJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#desa').autocomplete({
      minChars: 2,
      lookup: desaArray,
      appendTo: '#autocomplete-desa',
    });
    $('#desa').keyup(function(){
  });


  // desa
  'use strict';
    var desaJson = {
      <?= $desa ?>
    }
    var desaArray = $.map(desaJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#c_desa').autocomplete({
      minChars: 2,
      lookup: desaArray,
      appendTo: '#autocomplete-desa-c',
    });
    $('#c_desa').keyup(function(){
  });


  // kota
  'use strict';
    var kotaJson = {
      <?= $kota ?>
    }
    var kotaArray = $.map(kotaJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#kota').autocomplete({
      minChars: 2,
      lookup: kotaArray,
      appendTo: '#autocomplete-kota',
    });
    $('#kota').keyup(function(){
  });

    // kota
  'use strict';
    var kotaJson = {
      <?= $kota ?>
    }
    var kotaArray = $.map(kotaJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#c_kota').autocomplete({
      minChars: 2,
      lookup: kotaArray,
      appendTo: '#autocomplete-kota-c',
    });
    $('#c_kota').keyup(function(){
  });


  // provinsi
  'use strict';
    var provinsiJson = {
      <?= $provinsi ?>
    }
    var provinsiArray = $.map(provinsiJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#provinsi').autocomplete({
      minChars: 2,
      lookup: provinsiArray,
      appendTo: '#autocomplete-provinsi',
    });
    $('#provinsi').keyup(function(){
  });

  // provinsi
  'use strict';
    var provinsiJson = {
      <?= $provinsi ?>
    }
    var provinsiArray = $.map(provinsiJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#c_provinsi').autocomplete({
      minChars: 2,
      lookup: provinsiArray,
      appendTo: '#autocomplete-provinsi-c',
    });
    $('#c_provinsi').keyup(function(){
  });


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
            
          '<div>',
        });

      }
    });
 
    e.preventDefault();
  });
})();
</script>