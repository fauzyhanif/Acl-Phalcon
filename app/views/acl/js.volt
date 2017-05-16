<script>
$(function () {
  $('#table').DataTable();
});
(function() {

  $('form[data-remote]').on('submit', function(e) {
    var form = $(this);
    var url = form.prop('action');

    $.ajax({
      type: 'POST',
      url: url,
      dataType:'json',
      data: form.serialize(),
      success: function(response){
        new PNotify({
          title: response.title,
          text: response.text,
          type: response.type
        });
        if (response.close === 1) {
          clear_form(response.close);
          list();
        } else if (response.close === 2) {
          $('#Delete').modal('hide');
          $('#del'+response.id).fadeOut(1000);
        } else if (response.close === 3) {
          clear_form();
          listGroup();
        } else if (response.close === 4) {
          $('#groupDelete').modal('hide');
          $('#groupdel'+response.id).fadeOut(1000);
        } else {
          list();
          clear_form();
        }
      }
    });
 
    e.preventDefault();
  });

})();

function list() {
  $.ajax({
    type: 'GET',
    url: '{{ url('Acl/list') }}',
    dataType:'html',
    success: function(response){
      $('#listView').html(response);
    }
  });
}

function listGroup() {
  $.ajax({
    type: 'GET',
    url: '{{ url('Acl/MenuGroup/list') }}',
    dataType:'html',
    success: function(response){
      $('#listViewGroup').html(response);
    }
  });
}

function deleted(id, acl) {
  $('input#id_delete').val(id);
  $('span#acl').text(acl);
}

function updated(id, url, controller, action, except) {
  $('#Tambah').find('#labelAcl').text('Update Acl');
  var form = $('form[name="acl"]');
  form.attr('action', '{{ url('Acl/updated/') }}' + id);

  $.ajax({
    type: 'GET',
    url: '{{ url('Acl/detail/') }}'+id,
    dataType:'json',
    success: function(response){
      console.log(response);
      $.each(response, function(key, value) {
        form.find('[name="'+key+'"]')
            .not('input[name="usergroup"]')
            .val(value);
      });

      form.find('[name="actions"]').val(response.action);
      var str = response.usergroup;
      var res = str.split(",");
      for (var i = 0; i < res.length; i++) {
        $('input[type="checkbox"]#data'+res[i]).prop('checked', true);
      }
    }
  });

  var btn_submit = form.find('button[type="submit"]');
  btn_submit.removeClass('btn-success');
  btn_submit.addClass('btn-primary');
  btn_submit.text('Save Update');
}

function clear_form(id){
  $('#Tambah').find('#labelAcl').text('Input Acl');
  var form  = $('form[name="acl"]');
  form.attr('action', '{{ url('Acl/input') }}');
  form.find('[name]').not('[name^="usergroup"]').val('');
  form.find('[name^="usergroup"]').prop('checked', false);
  form.find('.usergroup').show();
  $('form[name="group"]').find('[name]').not('[name^=usergroup]').val('');
  $('form[name="group"]').find('[name^="usergroup"]').prop('checked', false);
  
  var btn_submit = form.find('button[type="submit"]');
  btn_submit.removeClass('btn-primary');
  btn_submit.addClass('btn-success');
  btn_submit.text('Save');

  if (id === 1) {
    $('#Tambah').modal('hide');
  }
}

function status(id, status) {
  $.ajax({
    type: 'POST',
    url: 'Acl/status',
    dataType:'json',
    data: 'id='+id+'&actived='+status,
    success: function(response){
      new PNotify({
        title: response.title,
        text: response.text,
        type: response.type
      });
      if (response.i === 'text-success' && response.bg === 'bg-green') {
        $("td i#text"+id)
          .attr("onclick", "status("+id+", '"+response.active+"')")
          .toggleClass('text-danger text-success');

        $("td span#status"+id)
          .toggleClass('bg-red bg-green')
          .text(response.status);
      } else if (response.i === 'text-danger' && response.bg === 'bg-red') {
        $("td i#text"+id)
          .attr("onclick", "status("+id+", '"+response.active+"')")
          .toggleClass('text-success text-danger');

        $("td span#status"+id)
          .toggleClass('bg-green bg-red')
          .text(response.status);
      }
    }
  });
}

$('input[type="checkbox"]#check').on("click", function() {
  var val = $(this).val();
  var res = val.split(",");
  
  $.ajax({
    type: 'POST',
    url: 'Acl/access',
    dataType:'json',
    data: 'id='+res[0]+'&usergroup='+res[1],
    success: function(response){
      new PNotify({
        title: response.title,
        text: response.text,
        type: response.type
      });
    }
  });
});

$('.except').keyup(function(event) {
    newText = event.target.value;
    $('textarea.except').attr('textval', newText);
    console.log(newText);
});

function except(that) {
  var isi = $(that).html().trim();
  var id  = $(that).attr('acl');
  $(that).parent().html('<textarea class="form-control" onblur="return except_back(this)" style="width:100%; height:100%;" acl="'+id+'">'+isi+'</textarea>').click(); 
    $(that).parent().find('textarea').focus();
  return false;
}

function except_back(that){
  var isi = $(that).val();
  var id  = $(that).attr('acl');
  $(that).parent().html('<div ondblclick="return except(this)" style="padding: 10px;" acl="'+id+'">'+isi+'</div>');
  $.ajax({
    method: "POST",
    dataType: "json",
    url: 'Acl/except',
    data: 'id='+id+'&except='+isi,
    success: function(response){
      new PNotify({
        title: response.title,
        text: response.text,
        type: response.type
      });
    }
  });
  return false;
}

function menuAsk(that) {
  var val = $(that).val();

  if (val == 'Y') {
    $('#menuShow').collapse('show');
  } else {
    $('#menuShow').collapse('hide');
  }
}

function deletedGroup(id, group) {
  $('input#group_delete').val(id);
  $('span#menuGroup').text(group);
}

function statusGroup(id, status) {
  $.ajax({
    type: 'POST',
    url: 'Acl/MenuGroup/status',
    dataType:'json',
    data: 'id='+id+'&actived='+status,
    success: function(response){
      new PNotify({
        title: response.title,
        text: response.text,
        type: response.type
      });
      if (response.i === 'text-success' && response.bg === 'bg-green') {
        $("td i#grouptext"+id)
          .attr("onclick", "statusGroup("+id+", '"+response.active+"')")
          .toggleClass('text-danger text-success');

        $("td span#groupstatus"+id)
          .toggleClass('bg-red bg-green')
          .text(response.status);
      } else if (response.i === 'text-danger' && response.bg === 'bg-red') {
        $("td i#grouptext"+id)
          .attr("onclick", "statusGroup("+id+", '"+response.active+"')")
          .toggleClass('text-success text-danger');

        $("td span#groupstatus"+id)
          .toggleClass('bg-green bg-red')
          .text(response.status);
      }
    }
  });
}
</script>