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
      <div class="container">
        <div class="col-sm-12">
          <div class="text-right">
            <button class="btn btn-default btn-print" type="button" name="button" id="print">PRINT</button>
          </div><!-- text-right  -->
        </div><!-- end columns  -->

        <div class="col-sm-12 alight-center">
          <div class="col-sm-3">
          	{{ image('img/master/logo.jpg', 'class':'MDimg') }}
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
          <h2 class="text-center text-title marginTB">ACHIEVEMENT REPORT</h2>

          <h4 class="text-title">STUDENT'S IDENTITY</h4>
          <div class="col-xs-12">
            <div class="col-xs-2">
              <ul class="list-unstyled">
                <li>Reg. Number</li>
                <li>Name</li>
                <li>Program/Level</li>
                <li>Term/Year</li>
              </ul>
            </div><!-- end columns  -->

            <div class="col-xs-10">
              <ul class="list-unstyled">
                <li>: 17011775</li>
                <li>: Igo Octora Hartanto</li>
                <li>: English Conversation</li>
                <li>: 1/2017</li>
              </ul>
            </div><!-- end columns  -->
          </div><!-- end columns  -->

          <div class="col-xs-12 marginTB">
            <h4 class="text-title">SCORE</h4>

            <div class="col-xs-6">
              <table class="table table-bordered table-condensed">
                <tr>
                  <th colspan="3" class="text-center"><h4 class="text-title">TEST 1</h4></th>
                </tr>
                <tr>
                  <th class="text-center">Part</th>
                  <th class="text-center">Aspect</th>
                  <th class="text-center">Score</th>
                </tr>
                <tr>
                  <td class="text-center">A</td>
                  <td>Written Test (Grammar, Vocabulary, Spelling)</td>
                  <td class="text-center">76</td>
                </tr>
                <tr>
                  <td class="text-center">B</td>
                  <td>Oral Test (Comprehension, Pronunciation, Fluency)</td>
                  <td class="text-center">85</td>
                </tr>
              </table>
            </div><!-- end columns  -->

            <div class="col-xs-6">
              <table class="table table-bordered table-condensed">
                <tr>
                  <th colspan="3" class="text-center"><h4 class="text-title">TEST 2</h4></th>
                </tr>
                <tr>
                  <th class="text-center">Part</th>
                  <th class="text-center">Aspect</th>
                  <th class="text-center">Score</th>
                </tr>
                <tr>
                  <td class="text-center">A</td>
                  <td>Written Test (Grammar, Vocabulary, Spelling)</td>
                  <td class="text-center">55</td>
                </tr>
                <tr>
                  <td class="text-center">B</td>
                  <td>Oral Test (Comprehension, Pronunciation, Fluency)</td>
                  <td class="text-center">78</td>
                </tr>
              </table>
            </div><!-- end columns  -->

            <p>
              Total Score (Test 1 + Test 2): 294 <br />
              Average Score (Total Score/4): 74
            </p>
          </div><!-- end columns  -->

          <div class="col-xs-12">
            <h4 class="text-title">TEACHER'S COMMENT</h4>
            <div class="border">
              <p><strong>Good, Igo!</strong> You are a nice student. You Followed all activities conducted in the classroom. You were quite active during the course.You could respond to the teacher's questions well. You were good at practicing a conversation about invitation. Keep studying. <ins>You are promoted to the higher level</ins>. <strong>Congratulations!</strong></p>
            </div><!-- end border -->
          </div><!-- end columns  -->

          <div class="col-xs-12 marginTB">
            <div class="col-xs-6">
              <p class="bottomLine2">Tuti Umi Latifah, S.Pd.</p>
              <p>Teacher</p>
            </div><!-- end columns  -->

            <div class="col-xs-6">
              <div class="marginL">
                <p>Semarang, 24 Mei 2017</p>
                <p class="bottomLine">Yunita Irmawati, S.Pd.</p>
                <p>Direktur</p>
              </div>
            </div><!-- end columns  -->
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
