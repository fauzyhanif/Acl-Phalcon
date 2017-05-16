{% set no = 1 %}
{% for x in sesi %}
<tr id="del{{ x.id }}">
  <td>{{ no }}</td>
  <td>
  	<i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated('{{ x.id }}', '{{ x.thn_akd }}', '{{ x.nama_sesi }}', '{{ x.tgl1 }}', '{{ x.tgl2 }}')"></i> |
  	<i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted({{ x.id }}, '{{ x.nama_sesi }}')"></i> |
  	{% if x.actived === 'Y' %}
    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'N')"></i> |
    <span class="label bg-green" id="status{{ x.id }}">active</span>
    {% else %}
    <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'Y')"></i> |
    <span class="label bg-red" id="status{{ x.id }}">not active</span>
    {% endif %}
  </td>
  <td>{{ x.thn_akd }}</td>
  <td>{{ x.nama_sesi }}</td>
  <td>{{ x.tgl1 }}</td>
  <td>{{ x.tgl2 }}</td>
</tr>
{% set no = no + 1 %}
{% endfor %}