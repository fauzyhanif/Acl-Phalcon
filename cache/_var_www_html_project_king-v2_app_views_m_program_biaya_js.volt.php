<script>
$(function () {
  $('#table').DataTable({
      "ordering": false,
    });
});

$(document).ready(function(){

  $(".1").mask("000.000.000", {reverse:true});

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
        list1();
        list2();
        list3();
        new PNotify({
          title: response.title,
          text: response.text,
          type: response.type
        });
        $('#Tambah').modal('hide');
        $('#Delete').modal('hide');
        $('#Edit').modal('hide');

        $('form[name="program_biaya').trigger("reset");
      }
    });
 
    e.preventDefault();
  });

})();

function list1() {
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Program-biaya/list1') ?>',
    dataType:'html',
    success: function(response){
      // console.log(response);

      $('#listView1').html(response);
    }
  });
}

function list2() {
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Program-biaya/list2') ?>',
    dataType:'html',
    success: function(response){
      // console.log(response);

      $('#listView2').html(response);
    }
  });
}

function list3() {
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Program-biaya/list3') ?>',
    dataType:'html',
    success: function(response){
      // console.log(response);

      $('#listView3').html(response);
    }
  });
}

function deleted(id, program) {
  $('input#id_delete').val(id);
  $('span#program').text(program);
}


function updated(id, program_id, biaya_kursus, biaya_kursus_angsuran, angsuran_1, angsuran_2) {
  var form = $('form[name="edit_program_biaya"]').attr('action', '<?= $this->url->get('Program-biaya/updated/') ?>' + id);
  form.find('[name="program_id"]').val(program_id);
  form.find('[name="biaya_kursus"]').val(biaya_kursus);
  form.find('[name="biaya_kursus_angsuran"]').val(biaya_kursus_angsuran);
  form.find('[name="angsuran_1"]').val(angsuran_1);
  form.find('[name="angsuran_2"]').val(angsuran_2);
}

function clear_form(id){
  $('form[name="program_biaya').trigger("reset");
}

function status(id, status) {
  $.ajax({
    type: 'POST',
    url: 'Program-biaya/status',
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