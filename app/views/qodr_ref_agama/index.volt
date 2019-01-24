<section class="content-header animated fadeIn">
  <h1>Agama</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-database"></i> Data Master</li>
    <li class="active">Agama</li>
  </ol>
</section>

<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-3">
      <div class="box box-default">
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
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">List Agama</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
          
            <table id="table" class="table table-bordered table-hover">
              <thead>
                <tr class="tableHead">
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
                    <button class="btn btn-primary button-crud">
                      <i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated('{{ x.id }}', '{{ x.agama }}')"></i>
                    </button> |

                    <button class="btn btn-danger button-crud">
                      <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted('{{ x.id }}', '{{ x.agama }}')"></i>
                    </button> |
                    {% if x.actived === 'Y' %}

                    <button class="btn btn-default button-crud">
                      <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'N')"></i>
                    </button> |
                    <span class="label bg-green" id="status{{ x.id }}">active</span>
                    {% else %}
                    <button class="btn btn-default button-crud">
                      <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'Y')"></i>
                    </button> |
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
{% include "qodr_ref_agama/form.volt" %}
{% include "qodr_ref_agama/deleted.volt" %}

<!-- includemJs -->
{% include "qodr_ref_agama/js.volt" %}