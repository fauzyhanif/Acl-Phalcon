<script>
$(function () {
  $('#table').DataTable({
      "ordering": false,
    });
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
        list();
        clear_form();
        new PNotify({
          title: response.title,
          text: response.text,
          type: response.type
        });
        $('#Tambah').modal('hide');
        $('#Delete').modal('hide');
        $('#Edit').modal('hide');
      }
    });
 
    e.preventDefault();
  });

})();

function list() {
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Program-Studi/list') ?>',
    dataType:'html',
    success: function(response){
      $('#listView').html(response);
    }
  });
}

function deleted(id, program) {
  $('input#id_delete').val(id);
  $('span#program').text(program);
}


function updated(id, nm_program_studi) {
  var form = $('form[name="edit_program_studi"]').attr('action', '<?= $this->url->get('Program-Studi/updated/') ?>' + id);
  form.find('[name="nm_program_studi"]').val(nm_program_studi);
}

function clear_form(id){
  $('form[name="program_studi"]').find('[name="nm_program_studi"]').val('');
}

function status(id, status) {
  $.ajax({
    type: 'POST',
    url: 'Program-Studi/status',
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
</script>