{% set no = 1 %}
{% for x in jurusan %}
<tr id="del{{ x.id }}">
  <td>{{ no }}</td>
  <td>
    <i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated('{{ x.id }}', '{{ x.jurusan }}')"></i> |
    <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted({{ x.id }}, '{{ x.jurusan }}')"></i> |
    {% if x.actived === 'Y' %}
    <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'N')"></i> |
    <span class="label bg-green" id="status{{ x.id }}">active</span>
    {% else %}
    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'Y')"></i> |
    <span class="label bg-red" id="status{{ x.id }}">not active</span>
    {% endif %}
  </td>
  <td>{{ x.jurusan }}</td>
</tr>
{% set no = no + 1 %}
{% endfor %}