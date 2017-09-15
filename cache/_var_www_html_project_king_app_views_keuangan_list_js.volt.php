<script type="text/javascript">
$(function () {
  $('#example1').DataTable({
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
      	// console.log(response)
      	var string = '';
      	for (var x in response) {
      		string += '<tr>';
      		string += '<td>'+response[x].nip+'</td>';
      		string += '<td>'+response[x].name+'</td>';
      		string += '<td class="text-center"><a href="Pendaftaran/Pembayaran/'+response[x].nip+'" class="btn btn-primary btn-xs btn-flat">ya</a></td>';
      		string += '<tr>';
      	}
      	$('#list').html(string);
      }
    });
 
    e.preventDefault();
  });

})();
</script>