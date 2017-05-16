<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_form()">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="labelAcl">Input Acl</h4>
      </div>

      <form name="acl" action="{{ url('Acl/input') }}" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Icon</label>
                <input type="text" name="icon" class="form-control" placeholder="Icon">
              </div>
              <div class="form-group">
                <label>Label Menu</label>
                <input type="text" name="label" class="form-control" placeholder="Label Menu">
              </div>
              <div class="form-group">
                <label>Group Menu</label>
                <select class="form-control" name="menu_group">
                  {{ Tag.groupMenu() }}
                </select>
              </div>
              <div class="form-group">
                <label>Parent Menu</label>
                <input type="text" name="parent" class="form-control" placeholder="Parent Menu">
              </div>
              <div class="form-group">
                <label>Child Menu</label>
                <select class="form-control" name="child">
                  <option value="">Child Menu</option>
                  <option value="N">N</option>
                  <option value="Y">Y</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Url</label>
                <input type="text" name="url" class="form-control" placeholder="url">
              </div>
              <div class="form-group">
                <label>Controller</label>
                <input type="text" name="controller" class="form-control" placeholder="Controller">
              </div>
              <div class="form-group">
                <label>Action</label>
                <input type="text" name="actions" class="form-control" placeholder="Action"> 
              </div>
              <div class="form-group usergroup">
                <label>Usergroup</label><br>
                {% for ug in usergroup %}
                <td align="center">
                  <label>
                    <input type="checkbox" name="usergroup[]" id="data{{ ug.id }}" class="flat-blue tambah" value="{{ ug.id }}"> {{ ug.usergroup }}
                  </label><br>
                </td>
                {% endfor %}
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Except</label>
                <textarea class="form-control" name="except" placeholder="Except User ..."></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clear_form()">Close</button>
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>