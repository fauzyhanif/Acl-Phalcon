{% set no = 1 %}
{% for x in usergroup %}
<tr id="del{{ x.id }}">
  <td>{{ no }}</td>
  <td>
    <button class="btn btn-primary button-crud">
      <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Tambah" onclick="updated('{{ x.id }}', '{{ x.usergroup }}', '{{ x.description }}')"></i> 
    </button>
    <button class="btn btn-danger button-crud">
      <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted({{ x.id }}, '{{ x.usergroup }}')"></i> 
    </button>
    <button class="btn btn-default button-crud">
      <i class="fa fa-power-off cursor text-success iconCrud" id="text{{ x.id }}" onclick="status({{ x.id }}, 'N')"></i> 
    </button>

    {% if x.actived === 'Y' %}
    <span class="label bg-green" id="status{{ x.id }}">active</span>
    {% else %}
    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'Y')"></i> |
    <span class="label bg-red" id="status{{ x.id }}">not active</span>
    {% endif %}
  </td>
  <td>{{ x.usergroup }}</td>
  <td>{{ x.description }}</td>
</tr>
{% set no = no + 1 %}
{% endfor %}