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
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(response){
        new PNotify({
          title: response.title,
          text: response.text,
          type: response.type
        });
        if (response.close === 1) {
		  $('#Tambah').modal('hide');
          list();
        } else if (response.close === 2) {
          $('#Delete').modal('hide');
          $('#del'+response.id).fadeOut(1000);
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
    url: '{{ url('Users/list') }}',
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
  var form = $('form[name="users"]').attr('action', '{{ url('Users/updated/') }}' + id);
  
  $.ajax({
    type: 'GET',
    url: '{{ url('Users/detail/') }}'+id,
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
  $('form[name="users"]').find('[name]').not('[name="usergroup"]', '[name="image"]').val('');
  $('form[name="user"]').find('[name]').not('[name="usergroup"]', '[name="image"]').val('');
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

function PreviewImage(id) {
  $('input[name="remove_image"]').val('');
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("uploadImage"+id).files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("uploadPreview"+id).src = oFREvent.target.result;
  };
};
</script>