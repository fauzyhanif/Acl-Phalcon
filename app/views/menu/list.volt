{% set no = 1 %}
{% for x in group %}
<tr id="groupdel{{ x.id }}">
  <td>{{ no }}</td>
  <td>
    <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#groupDelete" onclick="deletedGroup({{ x.id }}, '{{ x.menu_group }}')"></i> |
    {% if x.actived === 'Y' %}
    <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="grouptext{{ x.id }}" onclick="statusGroup({{ x.id }}, 'N')"></i> |
    <span class="label bg-green" id="groupstatus{{ x.id }}">active</span>
    {% else %}
    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="grouptext{{ x.id }}" onclick="statusGroup({{ x.id }}, 'Y')"></i> |
    <span class="label bg-red" id="groupstatus{{ x.id }}">not active</span>
    {% endif %}
  </td>
  <td>{{ x.menu_group }}</td>
  <td>{{ x.usergroup }}</td>
</tr>
{% set no = no + 1 %}
{% endfor %}
