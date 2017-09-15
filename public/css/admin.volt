<style>
.cursor:hover{
  cursor: pointer;
  color: #ccc;
}
</style>
<section class="content-header animated fadeIn">
  <h1>Menu Sistem & Biaya Perkuliahan</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-home"></i> Home</li>
    <li>Menu Sistem & Biaya Perkuliahan</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">

        <!-- /.box-header -->
        <div class="box-body pad">
          <form class="form-horizontal" action="{{ url('Sistem/Admin/input') }}" method="POST" data-remote="data-remote">
                <textarea id="editor1" class="form-control" name="subject" rows="10" cols="80"></textarea>

                <div class="pull-right" style="margin-top: 20px">
                	<button class="btn btn-primary" type="submit">Submit</button>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List Sistem & Biaya Perkuliahan</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
          
            <table id="table" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td width="40">
                    <b>No</b>
                  </td>
                  <td align="center" width="150">
                    <b>Action</b>
                  </td>
                  <td>
                    <b>Subject</b>
                  </td>
                </tr>
              </thead>
              <tbody id="listView">
                {% set no = 1 %}
                {% for x in sistem %}
                <tr id="del{{ x.id }}">
                  <td>{{ no }}</td>
                  <td>
                    <i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah{{ x.id }}"></i> |
                    <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete{{ x.id }}"></i> |
                    {% if x.actived === 'Y' %}
                    <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'N')"></i> |
                    <span class="label bg-green" id="status{{ x.id }}">active</span>
                    {% else %}
                    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'Y')"></i> |
                    <span class="label bg-red" id="status{{ x.id }}">not active</span>
                    {% endif %}
                  </td>
                  <td>{{ x.subject }}</td>

                  <!-- modal delete -->
                  <div class="modal fade" id="Delete{{ x.id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <h4 class="modal-title">Delete Subject Sistem & Biaya Perkuliahan</h4>
                        </div>

                        <form name="delete" action="{{ url('Sistem/Admin/deleted') }}" method="POST" data-remote="data-remote">
                          <div class="modal-body">
                            <input type="hidden" name="id" id="id_delete" value="{{ x.id }}">
                            <p>Apakah anda yakin akan menghapus Sistem & Biaya Perkuliahan "<span id="subject" class="text-red">{{ x.subject }}</span>" ?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default close_btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div><!-- modal delete -->

                  <!-- modal edit -->
                  <div class="modal fade" id="Tambah{{ x.id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_form()">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <h4 class="modal-title">Updated Sistem & Biaya Perkuliahan</h4>
                        </div>

                        <form name="sistem" class="form-horizontal" method="POST" action="Admin/updated/{{x.id}}" data-remote="data-remote">
                          <div class="modal-body">
                            <div class="form-group">
                              <label>Sistem & Biaya Perkuliahan</label>
                              <textarea id="editor1" class="form-control" class="2" name="subject" rows="10" cols="80">{{ x.subject }}</textarea>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clear_form()">Close</button>
                            <button type="submit" class="btn btn-primary">Save Update</button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>

                </tr>
                {% set no = no + 1 %}
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- js -->
{{ javascript_include('plugins/jQuery/jquery-2.2.3.min.js') }}
{{ javascript_include('js/bootstrap.min.js') }}
{{ javascript_include('plugins/file-style/bootstrap-filestyle.min.js') }}
{{ javascript_include('plugins/slimScroll/jquery.slimscroll.min.js') }}
{{ javascript_include('plugins/fastclick/fastclick.js') }}
{{ javascript_include('js/app.min.js') }}
{{ javascript_include('js/demo.js') }}
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
{{ javascript_include('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}
<!-- include Js -->

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });  

  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });

</script>
