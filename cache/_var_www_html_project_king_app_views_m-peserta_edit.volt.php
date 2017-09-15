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
          <form class="form-horizontal" id="pendaftaran" action="<?= $this->url->get('Pendaftaran/input') ?>" method="POST" data-remote>
              <div class="box-body">
              <h3 style="color: #4183D7">A. Program Identity <i>(Filled out by Staff)</i></h3>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label for="inputEmail3" class="col-sm-2 ">Student Number</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="term" disabled>
                  </div>
                 
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Term/Year</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="term" placeholder="term">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="years" placeholder="years">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Program/Level</label>

                  <div class="col-sm-4">
                    <select class="form-control" name="program_id">
                      <option>- Select Program -</option>
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <select class="form-control" name="level_active">
                      <option>- Select Level -</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Teacher</label>

                  <div class="col-sm-8">
                    <select class="form-control" name="teacher_id">
                      <option>- Select Teacher -</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Registration Fee</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="registration_fee" placeholder="Rp. ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Tuition Fee</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tuition_fee" placeholder="Rp. ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Total Fee</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="total_fee" placeholder="Rp. ">
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
                    <input type="text" class="form-control" name="place_of_birth" placeholder="Place of Birth">
                  </div>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="date_of_birth" id="datepicker1">
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
                    <input type="email" class="form-control" name="department" placeholder="Department">
                  </div>

                  <div class="col-sm-4">
                    <input type="email" class="form-control" name="semester" placeholder="Semester">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Gender</label>

                  <div class="col-sm-8">
                  <select class="form-control" name="gender">
                    <option>- Choose Gender -</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Father's Name</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fathers_name" placeholder="Father's Name">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Mother's Name</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="mothers_name" placeholder="Mother's Name">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Home Addres</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" name="alamat"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="dusun" placeholder="Dusun">
                  </div>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="rt" placeholder="RT">
                  </div>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="rw" placeholder="RW">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kcmtn" placeholder="Kecamatan">
                  </div>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="desa" placeholder="Desa">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kota" placeholder="Kota/Kabupaten">
                  </div>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="prvns" placeholder="Provinsi">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Current Addres</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" name="c_alamat"></textarea>
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
                    <input type="text" class="form-control" name="c_kcmtn" placeholder="Kecamatan">
                  </div>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="c_desa" placeholder="Desa">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="c_kota" placeholder="Kota/Kabupaten">
                  </div>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="c_prvns" placeholder="Provinsi">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Student's Phone Number</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="phone_number" placeholder="Student's Phone Number">
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
                    <input type="text" class="form-control" name="email" placeholder="Email">
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
                      <option></option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Get Information From</label>

                  <div class="col-sm-8">
                    <select class="form-control" class="get_information">
                      <option></option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Photo</label>
                  <div class="col-sm-8">
                    <input type="file" class="filestyle" data-buttonbefore="true" name="photo">
                  </div>
                </div>


                <h3 style="color: #4183D7">C. Facilities Checklist <i>(Filled out by Staff)</i></h3>
                <div class="form-group">
                  <div class="checkbox">
                    <label class="col-sm-1"></label>
                    <label class="col-sm-2" style="padding-left: 40px">
                      <input type="checkbox" name="coursebook">
                      <b>Coursebook</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" name="coursebook_date" id="datepicker2">
                    </div>

                    <label class="col-sm-2" style="padding-left: 60px">
                      <input type="checkbox" name="receipt_1">
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
                      <input type="checkbox" name="students_biodata">
                      <b>Student's Biodata</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" name="students_biodata_date" id="datepicker4">
                    </div>

                    <label class="col-sm-2" style="padding-left: 60px">
                      <input type="checkbox" name="receipt_2">
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
                      <input type="checkbox" name="student_card">
                      <b>Student Card</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" name="student_card_date" id="datepicker6">
                    </div>

                    <label class="col-sm-2" style="padding-left: 60px">
                      <input type="checkbox" name="achievement_report">
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
                      <input type="checkbox" name="panduan">
                      <b>Panduan dan Tata Tertib</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" name="panduan_date" id="datepicker8">
                    </div>

                    <label class="col-sm-2" style="padding-left: 60px">
                      <input type="checkbox" name="photo">
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
                      <input type="checkbox" name="invoice_1">
                      <b>Invoice I</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" name="invoice_1_date" id="datepicker10">
                    </div>

                    <label class="col-sm-2" style="padding-left: 60px">
                      <input type="checkbox" name="certivicate">
                      <b>Certificate</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" name="certivicate_date" id="datepicker11">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="checkbox">
                    <label class="col-sm-1"></label>
                    <label class="col-sm-2" style="padding-left: 40px">
                      <input type="checkbox" name="invoice_2">
                      <b>Invoice 2</b>
                    </label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control pull-right" name="invoice_2_date" id="datepicker12">
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
for (var i = 0; i <=12 ; i++) {
	$('#datepicker'+[i]).datepicker({
	  autoclose: true
	});
}
</script>