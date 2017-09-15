<script type="text/javascript">
  (function() {

  $('form[data-remote]').on('submit', function(e) {
    var form = $(this);
    var url = form.prop('action');

    $.ajax({
      type: 'POST',
      url: url,
      dataType:'html',
      data: form.serialize(),
      success: function(response){
      	// console.log(response);
      	$('#listViewTotal').html(response);
      }
    });
 
    e.preventDefault();
  });

})();
</script>