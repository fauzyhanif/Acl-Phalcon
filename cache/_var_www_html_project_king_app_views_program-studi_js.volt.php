<script>
$(function () {
  $('#table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
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

function deleted(id, users) {
  $('input#id_delete').val(id);
  $('span#users').text(users);
}

function updated(id) {
  var form = $('form[name="users"]').attr('action', '<?= $this->url->get('Users/updated/') ?>' + id);
  
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Users/detail/') ?>'+id,
    dataType:'json',
    success: function(response){
      $.each(response, function(key, value) {
      	form.find('[name="'+key+'"]')
            .not('input[name="usergroup"]')
      		  .not('input[name="image"]')
            .not('input[name="password"]')
            .val(value);
        if (key == 'image') {
          $('input[name="remove_image"]').val(value);
          $('#uploadPreview2').attr('src', 'img/users/'+value);
        }
      });

      var str = response.usergroup;
      var res = str.split(",");
      for (var i = 0; i < res.length; i++) {
        $('input[type="checkbox"]#data'+res[i]).prop('checked', true);
      }
    }
  });
}

function clear_form(id){
  $('form[name="program_studi"]').find('[name="nm_program_studi"]').val('');
}

function status(id, status) {
  $.ajax({
    type: 'POST',
    url: 'Users/status',
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