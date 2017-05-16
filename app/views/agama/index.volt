<section class="content-header animated fadeIn">
  <h1>Agama</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-home"></i> Home</li>
    <li>Data Master</li>
    <li class="active">Agama</li>
  </ol>
</section>

<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Input Agama</h3>
        </div>
        <div class="box-body">
          <form name="group" action="{{ url('Agama/input') }}" method="POST" data-remote="data-remote">
            <div class="form-group">
              <label>Nama Agama</label>
              <input type="text" name="agama" class="form-control" placeholder="Agama">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
            </div>
          </form>
       	</div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List Agama</h3>
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
                    <b>Agama</b>
                  </td>
                </tr>
              </thead>
              <tbody id="listView">
                {% set no = 1 %}
                {% for x in agama %}
                <tr id="del{{ x.id }}">
                  <td>{{ no }}</td>
                  <td>
                    <i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated('{{ x.id }}', '{{ x.agama }}')"></i> |
                    <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted({{ x.id }}, '{{ x.agama }}')"></i> |
                    {% if x.actived === 'Y' %}
                    <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'N')"></i> |
                    <span class="label bg-green" id="status{{ x.id }}">active</span>
                    {% else %}
                    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'Y')"></i> |
                    <span class="label bg-red" id="status{{ x.id }}">not active</span>
                    {% endif %}
                  </td>
                  <td>{{ x.agama }}</td>
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

<!-- include popup -->
{% include "agama/form.volt" %}
{% include "agama/deleted.volt" %}

<!-- include Js -->
{% include "agama/js.volt" %}