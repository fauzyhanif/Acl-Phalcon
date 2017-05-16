{% for x in acl %}
<tr id="del{{ x.id }}">
  <td>
    <i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated('{{ x.id }}', '{{ x.url }}', '{{ x.controller }}', '{{ x.action }}', '{{ x.except }}')"></i> |
    <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted({{ x.id }}, '{{ x.url }}')"></i> |
    {% if x.actived === 'Y' %}
    <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'N')"></i> |
    <span class="label bg-green" id="status{{ x.id }}">active</span>
    {% else %}
    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'Y')"></i> |
    <span class="label bg-red" id="status{{ x.id }}">not active</span>
    {% endif %}
  </td>
  <td align="center">{{ x.id }}</td>
  <td align="center">
  {% if x.icon is not empty %}
    <i class="fa {{ x.icon }}"></i></td>
  {% endif %}
  <td>{{ x.url }}</td>
  {% for ug in usergroup %}
  <td align="center">
    <input type="checkbox" id="check" class="flat-blue" value="{{ x.id }},{{ ug.id }}"
    {% if ug.id in Helpers.usergroup(x.usergroup) %}
    checked="true" 
    {% endif %}
    >
  </td>
  {% endfor %}
  <td style="padding: 0px;"><div ondblclick="return except(this)" style="padding: 10px;" acl="{{ x.id }}">{{ x.except }}</div></td>
</tr>
{% endfor %}