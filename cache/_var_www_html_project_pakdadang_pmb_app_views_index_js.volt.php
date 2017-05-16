<script type="text/javascript">
	$(document).ready(function() {
        $.ajax({
            url: '<?= $this->url->get('Kodepos') ?>',
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