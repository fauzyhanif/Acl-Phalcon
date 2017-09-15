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
<section class="content-header animated fadeIn">
  <h1>Edit data peserta</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-user"></i> Data peserta</li>
    <li class="active">Edit data peserta</li>
  </ol>
</section>

<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <h1 class="box-title"></h1>
          <div class="box-tools pull-right">
            <a href="<?= $this->url->get('Peserta/Profil/') ?><?= $id ?>" class="btn btn-primary btn-flat">
              <i class="fa fa-edit"></i> Kembali ke profil
            </a>
          </div>
        </div>
        <!-- /.box-header -->
        <form class="form-horizontal" id="pendaftaran" action="<?= $this->url->get('Peserta/update') ?>" method="POST" data-remote>
          <div class="box-body">
            <input type="hidden" value="<?= $data[0]->a->id ?>" name="id">
            <h3 style="color: #4183D7">A. Personal Identity <i>(Filled out by Staff)</i></h3>
            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Name</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" name="name" value="<?= $data[0]->a->name ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Date of Birth</label>

              <div class="col-sm-4">
                <input type="text" class="form-control"  value="<?= $data[0]->a->place_of_birth ?>" name="place_of_birth">
              </div>

              <div class="col-sm-4">
                <input type="text" class="form-control"  value="<?= $data[0]->a->date_of_birth ?>" name="date_of_birth" id="datepicker1">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Occupation</label>

              <div class="col-sm-8">
                <select class="form-control" name="occupation">
                  <option value="">- Choose Occupation -</option>
                  <?php foreach ($pekerjaan as $x) { ?>
                    <?php if ($data[0]->a->occupation == $x->id) { ?>
                    <option value="<?= $x->id ?>" selected=""><?= $x->pekerjaan ?></option>
                    <?php } else { ?>
                    <option value="<?= $x->id ?>"><?= $x->pekerjaan ?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Category</label>

              <div class="col-sm-8">
                <select class="form-control" name="category">
                  <option value="">- Choose Category -</option>              
                  <option>TK</option>              
                  <option>SD</option>              
                  <option>SMP</option>              
                  <option>SMA</option>              
                  <option>Mahasiswa</option>              
                  <option>Umum</option>              
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Institution</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" name="institution">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">School/Class </label>

              <div class="col-sm-6">
                <input type="text" class="form-control" value="<?= $data[0]->a->school ?>" name="school">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" value="<?= $data[0]->a->school_class ?>" name="school_class">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">University</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" value="<?= $data[0]->a->university ?>" name="university">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Department/Semester</label>

              <div class="col-sm-4">
                <input type="text" class="form-control" value="<?= $data[0]->a->department ?>" name="department">
              </div>

              <div class="col-sm-4">
                <input type="text" class="form-control" value="<?= $data[0]->a->semester ?>" name="semester">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Gender</label>

              <div class="col-sm-8">
                <select class="form-control" name="gender">
                  <option value="">- Choose Gender -</option>
                  <?php if ($data[0]->a->gender == 'Male') { ?>
                  <option value="Male" selected="">Male</option>
                  <?php } elseif ($data[0]->a->gender == 'Female') { ?>
                  <option value="Female" selected="">Female</option>
                  <?php } else { ?>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Father's Name</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" value="<?= $data[0]->a->fathers_name ?>" name="fathers_name">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Father's Occupation</label>

              <div class="col-sm-8">
                <select class="form-control" name="fathers_occupation">
                  <option value="">- Choose Occupation -</option>
                  <?php foreach ($pekerjaan as $x) { ?>
                    <?php if ($data[0]->a->fathers_occupation == $x->id) { ?>
                    <option value="<?= $x->id ?>" selected=""><?= $x->pekerjaan ?></option>
                    <?php } else { ?>
                    <option value="<?= $x->id ?>"><?= $x->pekerjaan ?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Mother's Name</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" value="<?= $data[0]->a->mothers_name ?>" name="mothers_name">
              </div>                
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Mother's Occupation</label>

              <div class="col-sm-8">
              <select class="form-control" name="mothers_occupation">
                  <option value="">- Choose Occupation -</option>
                  <?php foreach ($pekerjaan as $x) { ?>
                    <?php if ($data[0]->a->mothers_occupation == $x->id) { ?>
                    <option value="<?= $x->id ?>" selected=""><?= $x->pekerjaan ?></option>
                    <?php } else { ?>
                    <option value="<?= $x->id ?>"><?= $x->pekerjaan ?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Home Addres</label>

              <div class="col-sm-8">
                <textarea class="form-control" name="alamat"><?= $data[0]->a->alamat ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" value="<?= $data[0]->a->dusun ?>" name="dusun" placeholder="Dusun">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" value="<?= $data[0]->a->rt ?>" name="rt" placeholder="RT">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" value="<?= $data[0]->a->rw ?>" name="rw" placeholder="RW">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <select class="form-control" name="prvns" onchange="filterKota(this.value)">
                <option value="">- Pilih Provinsi -</option>
                  <?php foreach ($xxxx as $x) { ?>
                    <?php if ($data[0]->a->prvns == $x->id) { ?>
                    <option value="<?= $x->id ?>" selected=""><?= $x->name ?></option>
                    <?php } else { ?>
                    <option value="<?= $x->id ?>"><?= $x->name ?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>

              <div class="col-sm-4">
                <select class="form-control select1" id="kota" name="kota" onchange="filterKcmtn(this.value)">
                  <option value="<?= $data[0]->a->kota ?>"><?= $data[0]->c->name ?></option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <select class="form-control select1" id="kcmtn" name="kcmtn" onchange="filterDesa(this.value)">
                  <option value="<?= $data[0]->a->kcmtn ?>"><?= $data[0]->d->name ?></option>
                </select>
              </div>

              <div class="col-sm-4">
                <select class="form-control select1" id="desa" name="desa">
                  <option value="<?= $data[0]->a->desa ?>"><?= $data[0]->e->name ?></option>
                </select>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Current Addres</label>

              <div class="col-sm-8">
                <textarea class="form-control" name="c_alamat"> <?= $data[0]->a->c_alamat ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" value="<?= $data[0]->a->c_dusun ?>" name="c_dusun" placeholder="Dusun">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" value="<?= $data[0]->a->c_rt ?>" name="c_rt" placeholder="RT">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" value="<?= $data[0]->a->c_rw ?>" name="c_rw" placeholder="RW">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <select class="form-control" name="c_prvns" onchange="filterKota2(this.value)">
                    <option value="">- Pilih Provinsi -</option>
                  <?php foreach ($xxxx as $x) { ?>
                    <?php if ($data[0]->a->c_prvns == $x->id) { ?>
                    <option value="<?= $x->id ?>" selected=""><?= $x->name ?></option>
                    <?php } else { ?>
                    <option value="<?= $x->id ?>"><?= $x->name ?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>

              <div class="col-sm-4">
                <select class="form-control select1" id="c_kota" name="c_kota" onchange="filterKcmtn2(this.value)">
                  <option value="<?= $data[0]->a->c_kota ?>"><?= $data[0]->c_kota ?></option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3"></label>
              <div class="col-sm-4">
                <select class="form-control select1" id="c_kcmtn" name="c_kcmtn" onchange="filterDesa2(this.value)">
                  <option value="<?= $data[0]->a->c_kcmtn ?>"><?= $data[0]->c_kcmtn ?></option>
                </select>
              </div>

              <div class="col-sm-4">
                <select class="form-control select1" id="c_desa" name="c_desa">
                  <option value="<?= $data[0]->a->c_desa ?>"><?= $data[0]->c_desa ?></option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Student's Phone Number</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" value="<?= $data[0]->a->phone_number ?>" name="phone_number">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Student's Phone Number Alternative</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" value="<?= $data[0]->a->phone_numbers_alt ?>" name="phone_numbers_alt">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Parent's Phone Number</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" value="<?= $data[0]->a->parents_phone_number ?>" name="parents_phone_number">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Email</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" value="<?= $data[0]->a->email ?>" name="email">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Facebook</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" value="<?= $data[0]->a->facebook ?>" name="facebook">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Instagram</label>

              <div class="col-sm-8">
                <input type="text" class="form-control" value="<?= $data[0]->a->facebook ?>" name="facebook">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Religion</label>

              <div class="col-sm-8">
                <select class="form-control" name="religion">
                  <option>- Select Religion -</option>
                  <?php foreach ($agama as $x) { ?>
                  <?php if ($data[0]->a->religion == $x->id) { ?>
                  <option value="<?= $x->id ?>" selected="selected"><?= $x->agama ?></option>
                  <?php } else { ?>
                  <option value="<?= $x->id ?>"><?= $x->agama ?></option>
                  <?php } ?>
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
                  <?php if ($data[0]->a->informasi == $x->id) { ?>
                  <option value="<?= $x->id ?>" selected="selected"><?= $x->nama ?></option>
                  <?php } else { ?>
                  <option value="<?= $x->id ?>"><?= $x->nama ?></option>
                  <?php } ?>
                  <?php } ?>
                </select>
              </div>
            </div>

            <h3 style="color: #4183D7">B. Facilities Checklist <i>(Filled out by Staff)</i></h3>
            <div class="form-group">
              <div class="checkbox">
                <label class="col-sm-1"></label>
                <label class="col-sm-2" style="padding-left: 40px">
                  <?php if ($data[0]->a->coursebook == 'Y') { ?>
                  <input type="checkbox" name="coursebook" id="coursebook" value="Y" onchange="coursebooks()" checked="">
                  <?php } else { ?>
                  <input type="checkbox" name="coursebook" id="coursebook" onchange="coursebooks()">
                  <?php } ?>
                  <b>Coursebook</b>
                </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control pull-right" value="<?= $data[0]->a->corsebook_date ?>" name="corsebook_date" id="datepicker2">
                </div>

                <label class="col-sm-2" style="padding-left: 60px">
                  <?php if ($data[0]->a->receipt_1 == 'Y') { ?>
                  <input type="checkbox" checked="" name="receipt_1" value="Y">
                  <?php } else { ?>
                  <input type="checkbox" name="receipt_1" value="Y">
                  <?php } ?>
                  <b>Receipt I</b>
                </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control pull-right" value="<?= $data[0]->a->receipt_1_date ?>" name="receipt_1_date" id="datepicker3">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="checkbox">
                <label class="col-sm-1"></label>
                <label class="col-sm-2" style="padding-left: 40px">
                  <?php if ($data[0]->a->students_biodata == 'Y') { ?>
                  <input type="checkbox" checked="" name="students_biodata" value="Y">
                  <?php } else { ?>
                  <input type="checkbox" name="students_biodata" value="Y">
                  <?php } ?>
                  <b>Student's Biodata</b>
                </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control pull-right" value="<?= $data[0]->a->student_biodata_date ?>" name="student_biodata_date" id="datepicker4">
                </div>

                <label class="col-sm-2" style="padding-left: 60px">
                <?php if ($data[0]->a->receipt_2 == 'Y') { ?>
                <input type="checkbox" checked="" name="receipt_2" value="Y">
                <?php } else { ?>
                <input type="checkbox" name="receipt_2" value="Y">
                <?php } ?>
                <b>Receipt II</b>
                </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control pull-right" value="<?= $data[0]->a->receipt_2_date ?>" name="receipt_2_date" id="datepicker5">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="checkbox">
                <label class="col-sm-1"></label>
                <label class="col-sm-2" style="padding-left: 40px">
                  <?php if ($data[0]->a->student_card == 'Y') { ?>
                  <input type="checkbox" checked="" name="student_card" value="Y">
                  <?php } else { ?>
                  <input type="checkbox" name="student_card" value="Y">
                  <?php } ?>
                  <b>Student Card</b>
                </label>
                <div class="col-sm-3">
                  <inpu  t type="text" class="form-control pull-right" value="<?= $data[0]->a->student_card_date ?>" name="student_card_date" id="datepicker6">
                </div>

                <label class="col-sm-2" style="padding-left: 60px">
                  <?php if ($data[0]->a->achievement_report == 'Y') { ?>
                  <input type="checkbox" checked="" name="achievement_report" value="Y">
                  <?php } else { ?>
                  <input type="checkbox" name="achievement_report" value="Y">
                  <?php } ?>
                  <b>Achievment Report</b>
                </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control pull-right" value="<?= $data[0]->a->achievement_report_date ?>" name="achievement_report_date" id="datepicker7">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="checkbox">
                <label class="col-sm-1"></label>
                <label class="col-sm-2" style="padding-left: 40px">
                  <?php if ($data[0]->a->panduan == 'Y') { ?>
                  <input type="checkbox" checked="" name="panduan" value="Y">
                  <?php } else { ?>
                  <input type="checkbox" name="panduan" value="Y">
                  <?php } ?>
                  <b>Panduan dan Tata Tertib</b>
                </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control pull-right" value="<?= $data[0]->a->panduan_date ?>" name="panduan_date" id="datepicker8">
                </div>

                <label class="col-sm-2" style="padding-left: 60px">
                  <?php if ($data[0]->a->photo == 'Y') { ?>
                  <input type="checkbox" checked="" name="photo" value="Y">
                  <?php } else { ?>
                  <input type="checkbox" name="photo" value="Y">
                  <?php } ?>
                  <b>Photo 3x4</b>
                </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control pull-right" value="<?= $data[0]->a->photo_date ?>" name="photo_date" id="datepicker9">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="checkbox">
                <label class="col-sm-1"></label>
                <label class="col-sm-2" style="padding-left: 40px">
                  <?php if ($data[0]->a->invoice_1 == 'Y') { ?>
                  <input type="checkbox" checked="" name="invoice_1" value="Y">
                  <?php } else { ?>
                  <input type="checkbox" name="invoice_1" value="Y">
                  <?php } ?>
                  <b>Invoice I</b>
                </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control pull-right" value="<?= $data[0]->a->invoice_1_date ?>" name="invoice_1_date" id="datepicker10">
                </div>

                <label class="col-sm-2" style="padding-left: 60px">
                  <?php if ($data[0]->a->certivicate == 'Y') { ?>
                  <input type="checkbox" checked="" name="certivicate" id="certivicate" value="" onchange="certivicates()">
                  <?php } else { ?>
                  <input type="checkbox" name="certivicate" id="certivicate" value="N"  onchange="certivicates()">
                  <?php } ?>
                  <b>Certificate</b>
                </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control pull-right" value="<?= $data[0]->a->certivicate_date ?>" name="certivicate_date" id="datepicker11">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="checkbox">
                <label class="col-sm-1"></label>
                <label class="col-sm-2" style="padding-left: 40px">
                  <?php if ($data[0]->a->invoice_2 == 'Y') { ?>
                  <input type="checkbox" checked="" name="invoice_2" value="Y" id>
                  <?php } else { ?>
                  <input type="checkbox" name="invoice_2" value="Y">
                  <?php } ?>
                  <b>Invoice 2</b>
                </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control pull-right" value="<?= $data[0]->a->invoice_2_date ?>" name="invoice_2_date" id="datepicker12">
                </div>
             </div>
            </div>
          </div>
          <!-- /.box-footer -->
          <!-- /.box-body -->
          <div class="box-footer text-right" style="margin-right: 100px">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<script type="text/javascript">
for (var i = 0; i < 12; i++) {
  $('#datepicker'+[i]).datepicker({format: 'dd M yyyy'});
}
$('#datepicker').datepicker({format: 'dd M yyyy'});

$('#datepickerx').datepicker();
$('#datepickery').datepicker();

function filterKota(id){
 $.ajax({
   type: "POST",
   url: "<?= $this->url->get('Pendaftaran/kota') ?>",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    var y = '<option>- Pilih Kota -</option>'
    for (var x in result){
      y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
    }
    $('#kota').html(y)
   }
 });
}

function filterKcmtn(id){
 $.ajax({
   type: "POST",
   url: "<?= $this->url->get('Pendaftaran/kcmtn') ?>",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    var y = '<option>- Pilih Kecamatan -</option>'
    for (var x in result){
      y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
    }
    $('#kcmtn').html(y)
   }
 });
}

function filterDesa(id){
  $.ajax({
    type: "POST",
    url: "<?= $this->url->get('Pendaftaran/desa') ?>",
    dataType : 'json',
    data: "id="+id,
    success: function(result){
      var y = '<option>- Pilih Desa -</option>'
      for (var x in result){
        y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
      }
      $('#desa').html(y)
    }
  });
}

function filterKota2(id){
 $.ajax({
   type: "POST",
   url: "<?= $this->url->get('Pendaftaran/kota') ?>",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    var y = '<option>- Pilih Kota -</option>'
    for (var x in result){
      y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
    }
    $('#c_kota').html(y)
   }
 });
}

function filterKcmtn2(id){
 $.ajax({
   type: "POST",
   url: "<?= $this->url->get('Pendaftaran/kcmtn') ?>",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    var y = '<option>- Pilih Kecamatan -</option>'
    for (var x in result){
      y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
    }
    $('#c_kcmtn').html(y)
   }
 });
}

function filterDesa2(id){
  $.ajax({
    type: "POST",
    url: "<?= $this->url->get('Pendaftaran/desa') ?>",
    dataType : 'json',
    data: "id="+id,
    success: function(result){
      var y = '<option>- Pilih Desa -</option>'
      for (var x in result){
        y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
      }
      $('#c_desa').html(y)
    }
  });
}

function coursebooks(){
	var x = $('#coursebook').is(':checked');
	if (x) {
		// console.log("Y")
		$('#coursebook').val("Y");
	} else {
		// console.log("N")
		$('#coursebook').val("N");
	}
}

function certivicates(){
	var x = $('#certivicate').is(':checked');
	if (x) {
		// console.log("Y")
		$('#certivicate').val("Y");
	} else {
		// console.log("N")
		$('#certivicate').val("N");
	}
}

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
        $('#Edit').modal('hide');
        viewHistory($('#id').val())
        new PNotify({
          title: "Berhasil",
          text: response,
          type: "success"
        });

      }
    });
 
    e.preventDefault();
  });

})();

function viewHistory(id){
 $.ajax({
   type: "POST",
   url: "<?= $this->url->get('/Peserta/Profil/view-detail-history') ?>",
   dataType : 'html',
   data: "id="+id,
   success: function(result){
    $('#detailHistory').html(result);
   }
 });
}
</script>