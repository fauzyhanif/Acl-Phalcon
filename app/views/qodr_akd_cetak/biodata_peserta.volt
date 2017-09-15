<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UIking</title>
    <link rel="stylesheet" type="text/css" href="<?= PUBLIC_PATH . '/img/master/logo.jpg' ?>" type="image/png">

    <!-- Bootstrap  -->
    {{ stylesheet_link('css/bootstrap.min.css') }}
  	{{ stylesheet_link('plugins/font-awesome/css/font-awesome.min.css') }}

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
      <div class="container text-center">
        <div class="text-right">
          <button class="btn btn-default btn-print" type="button" name="button" id="print">PRINT</button>
        </div><!-- text-right  -->

        {{ image('img/master/logo.jpg', 'class':'SMimg') }}
        <h2 class="text-title">KAMPUNG INGGRIS SEMARANG</h2>
        <h4>Izin Dinas Pendidikan No: 893.3/8977/2014 NILEK: 03204.1.01088</h4>
        <h4 class="text-title">STUDENT'S BIODATA</h4>
      </div>
    </header>

    <main>
      <section class="">
        <div class="container">

          <table class="table table-bordered table-condensed">
            <tr>
              <th colspan="4">A. Program Identity (Filled of by Staff)</th>
            </tr>

            <tr>
              <td class="TableWidthLeft">Student Number</td>
              <td class="TableWidthRightWithPhoto">{{ data[0].b.student_number }}</td>
              <td rowspan="7" class="middle">
                <!-- <img class="MDimg pull-right" src="public/img/avatar-15.jpg" alt="avatar"> -->
              </td>
            </tr>

            <tr>
              <td>Term/Year</td>
              <td>{{ data[0].a.term }}/{{ data[0].a.years }}</td>
            </tr>

            <tr>
              <td>Program/Level</td>
              <td>{{ data[0].c.nm_program_studi }}</td>
            </tr>

            <tr>
              <td>Teacher</td>
              <td>Paijo</td>
            </tr>

            <tr>
              <td>Registration Fee</td>
              <td>Rp. <?= number_format($data[0]->a->registration_fee,0,',','.') ?></td>
            </tr>

            <tr>
              <td>Tuition Fee</td>
              <td>Rp. <?= number_format($data[0]->a->tuition_fee,0,',','.') ?></td>
            </tr>

            <tr>
              <td>Total Fee</td>
              <td>Rp. <?= number_format($data[0]->a->total_fee,0,',','.') ?></td>
            </tr>
          </table>

          <table class="table table-bordered table-condensed">
            <tr>
              <th colspan="3">B. Personal Identity (Filled our by Student)</th>
            </tr>

            <tr>
              <td class="TableWidthLeft">Name</td>
              <td colspan="2" class="TableWidthRight">{{ data[0].b.name }}</td>
            </tr>

            <tr>
              <td>Place of Birth</td>
              <td colspan="2">{{ data[0].b.place_of_birth }}</td>
            </tr>

            <tr>
              <td>Date of Birth</td>
              <td colspan="2">{{ data[0].b.date_of_birth }}</td>
            </tr>

            <tr>
              <td>Occupation</td>
              <td colspan="2">{{ data[0].b.occupation }}</td>
            </tr>

            <tr>
              <td>Company (for employee)</td>
              <td colspan="2">{{ data[0].b.company }}</td>
            </tr>

            <tr>
              <td>School/Class (for student)</td>
              <td colspan="2">{{ data[0].b.school }}/{{ data[0].b.school_class }}</td>
            </tr>

            <tr>
              <td>University/Department/Semester <br />(for Student)</td>
              <td colspan="2">{{ data[0].b.university }}/{{ data[0].b.department }}/{{ data[0].b.semester }}</td>
            </tr>

            <tr>
              <td>Gender</td>
              <td colspan="2">
                <div class="checkbox-inline">
                  {% if data[0].b.gender is 'Male' %}
                   <label class="normalFont"><input type="checkbox" value="" checked="">Male</label>
                  {% elseif data[0].b.gender is 'Female' %}
                   <label class="normalFont"><input type="checkbox" value="" checked="">Male</label>
                  {% else %}
                   <label class="normalFont"><input type="checkbox" value="">Male</label>
                   <label class="normalFont"><input type="checkbox" value="">Female</label>
                  {% endif %}
                </div>
              </td>
            </tr>

            <tr>
              <td>Father's Name</td>
              <td colspan="2">{{ data[0].b.fathers_name }}</td>
            </tr>

            <tr>
              <td>Father's Occupation</td>
              <td colspan="2"></td>
            </tr>

            <tr>
              <td>Mother's Name</td>
              <td colspan="2">{{ data[0].b.mothers_name }}</td>
            </tr>

            <tr>
              <td>Mother's Occupation</td>
              <td colspan="2">blabla</td>
            </tr>

            <tr>
              <td rowspan="3" class="middle">Home Address (as per ID Card)</td>
              <td colspan="2">{{ data[0].b.alamat }}, RT: {{ data[0].b.rt }}, RW: {{ data[0].b.rw }}, Zip Code: 50223</td>
            </tr>

            <tr>
              <td colspan="2">Village: {{ data[0].f.name }}, Sub-District: {{ data[0].e.name }}-</td>
            </tr>

            <tr>
              <td colspan="2">Regencity/City: {{ data[0].g.name }}, Province: {{ data[0].h.name }}</td>
            </tr>

            <tr>
              <td rowspan="3" class="middle">Current Address (as per ID Card)</td>
              <td colspan="2">{{ data[0].b.alamat }}, RT: {{ data[0].b.rt }}, RW: {{ data[0].b.rw }}, Zip Code: 50223</td>
            </tr>

            <tr>
              <td colspan="2">Village: {{ data[0].f.name }}, Sub-District: {{ data[0].e.name }}-</td>
            </tr>

            <tr>
              <td colspan="2">Regencity/City: {{ data[0].g.name }}, Province: {{ data[0].h.name }}</td>
            </tr>

            <tr>
              <td>Student's Phone Number</td>
              <td colspan="2">{{ data[0].b.phone_number }}</td>
            </tr>

            <tr>
              <td>Parent's Phone Number</td>
              <td colspan="2">{{ data[0].b.parents_number_phone }}</td>
            </tr>

            <tr>
              <td>Email</td>
              <td colspan="2">{{ data[0].b.email }}</td>
            </tr>

            <tr>
              <td>Facebook</td>
              <td colspan="2">{{ data[0].b.facebook }}</td>
            </tr>

            <tr>
              <td>Religion</td>
              <td colspan="2">{{ data[0].b.religion }}</td>
            </tr>

            <tr>
              <td colspan="3">How did you get information about Kampung Inggris Semarang?</td>
            </tr>

            <tr>
              <td>
                <div class="checkbox-inline">
                  {% if data[0].b.get_information is '1' %}
                  <label class="normalFont"><input type="checkbox" value="" checked="">Brochure</label>
                  {% else %}
                  <label class="normalFont"><input type="checkbox" value="">Brochure</label>
                  {% endif %}
                </div>
              </td>

              <td>
                <div class="checkbox-inline">
                  {% if data[0].b.get_information is '2' %}
                  <label class="normalFont"><input type="checkbox" value="" checked="">Presentation</label>
                  {% else %}
                  <label class="normalFont"><input type="checkbox" value="">Presentation</label>
                  {% endif %}
                </div>
              </td>

              <td>
                <div class="checkbox-inline">
                  {% if data[0].b.get_information is '10' %}
                  <label class="normalFont"><input type="checkbox" value="" checked="">Others...</label>
                  {% else %}
                  <label class="normalFont"><input type="checkbox" value="">Others...</label>
                  {% endif %}
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div class="checkbox-inline">
                  {% if data[0].b.get_information is '3' %}
                  <label class="normalFont"><input type="checkbox" value="" checked="">Pamplhet</label>
                  {% else %}
                  <label class="normalFont"><input type="checkbox" value="">Pamplhet</label>
                  {% endif %}
                </div>
              </td>

              <td>
                <div class="checkbox-inline">
                  {% if data[0].b.get_information is '4' %}
                  <label class="normalFont"><input type="checkbox" value="" checked="">Friend</label>
                  {% else %}
                  <label class="normalFont"><input type="checkbox" value="">Friend</label>
                  {% endif %}
                </div>
              </td>

              <td>
              </td>
            </tr>

            <tr>
              <td>
                <div class="checkbox-inline">
                  {% if data[0].b.get_information is '5' %}
                  <label class="normalFont"><input type="checkbox" value="" checked="">Website of Kampung Inggris</label>
                  {% else %}
                  <label class="normalFont"><input type="checkbox" value="">Website of Kampung Inggris</label>
                  {% endif %}
                </div>
              </td>

              <td>
                <div class="checkbox-inline">
                  {% if data[0].b.get_information is '6' %}
                  <label class="normalFont"><input type="checkbox" value="" checked="">School</label>
                  {% else %}
                  <label class="normalFont"><input type="checkbox" value="">School</label>
                  {% endif %}
                </div>
              </td>

              <td>
                <!-- empty  -->
              </td>
            </tr>

            <tr>
              <td>
                <div class="checkbox-inline">
                  {% if data[0].b.get_information is '7' %}
                  <label class="normalFont"><input type="checkbox" value="" checked="">Facebook</label>
                  {% else %}
                  <label class="normalFont"><input type="checkbox" value="">Teacher</label>
                  {% endif %}
                </div>
              </td>

              <td>
                <div class="checkbox-inline">
                  {% if data[0].b.get_information is '8' %}
                  <label class="normalFont"><input type="checkbox" value="" checked="">Teacher</label>
                  {% else %}
                  <label class="normalFont"><input type="checkbox" value="">Teacher</label>
                  {% endif %}
                </div>
              </td>

              <td>
                <!-- empty  -->
              </td>
            </tr>
          </table>

          <table class="table table-bordered table-condensed">
            <tr>
              <th colspan="8">C. Facilities Checklist (Filled out by Staff)</th>
            </tr>

            <tr>
              <th class="text-center">No</th>
              <th>Facilities</th>
              <th>Date</th>
              <th>Check</th>

              <th class="text-center">No</th>
              <th>Facilities</th>
              <th>Date</th>
              <th>Check</th>
            </tr>

            <tr>
              <td class="text-center">1.</td>
              <td>Coursebook</td>
              <td>{{ data[0].b.corsebook_date }}</td>
              <td class="text-center">
                {% if data[0].b.coursebook is 'Y' %}
                <input type="checkbox" value="" checked="">
                {% else %}
                <input type="checkbox" value="">
                {% endif %}
              </td>

              <td class="text-center">7.</td>
              <td>Receipt I</td>
              <td>{{ data[0].b.receipt_1_date }}</td>
              <td class="text-center">
              {% if data[0].b.receipt_1 is 'Y' %}
                <input type="checkbox" value="" checked="">
                {% else %}
                <input type="checkbox" value="">
                {% endif %}
              </td>
            </tr>

            <tr>
              <td class="text-center">2.</td>
              <td>Student's Biodata</td>
              <td>{{ data[0].b.student_biodata_date }}</td>
              <td class="text-center">
                {% if data[0].b.students_biodata is 'Y' %}
                <input type="checkbox" value="" checked="">
                {% else %}
                <input type="checkbox" value="">
                {% endif %}
              </td>

              <td class="text-center">8.</td>
              <td>Receipt II</td>
              <td>{{ data[0].b.receipt_2_date }}</td>
              <td class="text-center">
                {% if data[0].b.receipt_2 is 'Y' %}
                <input type="checkbox" value="" checked="">
                {% else %}
                <input type="checkbox" value="">
                {% endif %}
              </td>
            </tr>

            <tr>
              <td class="text-center">3.</td>
              <td>Student's Card</td>
              <td>{{ data[0].b.student_card_date }}</td>
              <td class="text-center">
                {% if data[0].b.student_card is 'Y' %}
                <input type="checkbox" value="" checked="">
                {% else %}
                <input type="checkbox" value="">
                {% endif %}
              </td>

              <td class="text-center">9.</td>
              <td>Achievement Report</td>
              <td>{{ data[0].b.achievement_report_date }}</td>
              <td class="text-center">
                {% if data[0].b.achievement_report is 'Y' %}
                <input type="checkbox" value="" checked="">
                {% else %}
                <input type="checkbox" value="">
                {% endif %}
              </td>
            </tr>

            <tr>
              <td class="text-center">4.</td>
              <td>Panduan dan Tata Tertib</td>
              <td>{{ data[0].b.panduan_date }}</td>
              <td class="text-center">
                {% if data[0].b.panduan is 'Y' %}
                <input type="checkbox" value="" checked="">
                {% else %}
                <input type="checkbox" value="">
                {% endif %}
              </td>

              <td class="text-center">10.</td>
              <td>Photo 3x4</td>
              <td>{{ data[0].b.photo_date }}</td>
              <td class="text-center">
                {% if data[0].b.photo is 'Y' %}
                <input type="checkbox" value="" checked="">
                {% else %}
                <input type="checkbox" value="">
                {% endif %}
              </td>
            </tr>

            <tr>
              <td class="text-center">5.</td>
              <td>Invoice I</td>
              <td>{{ data[0].b.invoice_1_date }}</td>
              <td class="text-center">
                {% if data[0].b.invoice_1 is 'Y' %}
                <input type="checkbox" value="" checked="">
                {% else %}
                <input type="checkbox" value="">
                {% endif %}
              </td>

              <td class="text-center">11.</td>
              <td>Certificate</td>
              <td>{{ data[0].b.certivicate_date }}</td>
              <td class="text-center">
                {% if data[0].b.certivicate is 'Y' %}
                <input type="checkbox" value="" checked="">
                {% else %}
                <input type="checkbox" value="">
                {% endif %}
              </td>
            </tr>

            <tr>
              <td class="text-center">6-.</td>
              <td>Invoice II</td>
              <td>{{ data[0].b.invoice_2_date }}</td>
              <td class="text-center">
                {% if data[0].b.invoice_2 is 'Y' %}
                <input type="checkbox" value="" checked="">
                {% else %}
                <input type="checkbox" value="">
                {% endif %}
              </td>

              <td class="text-center"></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>

          <div class="notes">
            <p>Saya telah membeca Panduan dan Tata Tertib Kursus Kampung Inggris Semarang. Dengan ini saya menyatakan faham, setuju, dan tunduk pada Panduan dan Tata Tertib tersebut.</p>
            <p class="pull-right line">Semarang, 21 July 2017</p>
          </div>
        </div><!-- container  -->
      </section>
    </main>

    <footer>

    </footer>

    {{ javascript_include('plugins/jQuery/jquery-2.2.3.min.js') }}
  	{{ javascript_include('js/bootstrap.min.js') }}
  	{{ javascript_include('js/cetak/main.js') }}
  </body>
</html>
