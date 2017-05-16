<script>
function getIPL(id){
   $.ajax({
       type: "POST",
       url: "searchjurusan",
       dataType : 'json',
       data: "id="+id,
       success: function(result){
       	// console.log(result);
        $("#data").html(result);
       }
     });
}
</script>	