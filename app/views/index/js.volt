<script type="text/javascript">
	$(document).ready(function() {
        $.ajax({
            url: '{{ url("Kodepos")}}',
            method:"GET",
            dataType:'json',
            success:function(data)
            {
            	// console.log(data);
                $('#kodepos').html(data);
            }
        });
    });
</script>