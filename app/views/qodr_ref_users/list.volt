{% set no = 1 %}
  {% for x in users %}
  <tr id="del{{ x.id }}">
    <td>{{ no }}</td>
    <td>

      <button class="btn btn-primary button-crud" >
        <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Tambah" onclick="updated({{ x.id }})"></i>
      </button>

      <button class="btn btn-danger button-crud">
        <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted({{ x.id }}, '{{ x.username }}')"></i> 
      </button>

      {% if x.actived === 'Y' %}
      <button class="btn btn-default button-crud">
        <i class="fa fa-power-off cursor text-success iconCrud"  id="text{{ x.id }}" onclick="status({{ x.id }}, 'N')"></i>  
      </button> |
      <span class="label bg-green" id="status{{ x.id }}">active</span>
      {% else %}
      <button class="btn btn-default button-crud">
        <i class="fa fa-power-off cursor text-success iconCrud"  id="text{{ x.id }}" onclick="status({{ x.id }}, 'Y')"></i>  
      </button> |
      <span class="label bg-red" id="status{{ x.id }}">not active</span>
      {% endif %}
    </td>
    <td>{{ x.name }}</td>
    <td>{{ x.username }}</td>
    <td>{{ x.email }}</td>
  </tr>
  {% set no = no + 1 %}
{% endfor %}