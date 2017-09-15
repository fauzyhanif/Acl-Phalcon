<script type="text/javascript">
function filterKota(id){
 $.ajax({
   type: "POST",
   url: "Pendaftaran/kota",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    console.log(result);
   }
 });
}


function desa(id){
 $.ajax({
   type: "POST",
   url: "Pendaftaran/desa",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    
   }
 });
}


function kcmtn(id){
 $.ajax({
   type: "POST",
   url: "Pendaftaran/kcmtn",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    
   }
 });
}

// 	(function() {

//   // kec
//   'use strict';
//     var kecJson = {
//       <?= $kec ?>
//     }
//     var kecArray = $.map(kecJson, function(value, key) {
//       return {
//         value: value,
//         data: key
//       };
//     });
//     // Initialize autocomplete with custom appendTo:
//     $('#kcmtn').autocomplete({
//       minChars: 2,
//       lookup: kecArray,
//       appendTo: '#autocomplete-kecamatan',
//     });
//     $('#kcmtn').keyup(function(){
//   });



//   // desa
//   'use strict';
//     var desaJson = {
//       <?= $desa ?>
//     }
//     var desaArray = $.map(desaJson, function(value, key) {
//       return {
//         value: value,
//         data: key
//       };
//     });
//     // Initialize autocomplete with custom appendTo:
//     $('#desa').autocomplete({
//       minChars: 2,
//       lookup: desaArray,
//       appendTo: '#autocomplete-desa',
//     });
//     $('#desa').keyup(function(){
//   });


//   // desa
//   'use strict';
//     var kotaJson = {
//       <?= $kota ?>
//     }
//     var kotaArray = $.map(kotaJson, function(value, key) {
//       return {
//         value: value,
//         data: key
//       };
//     });
//     // Initialize autocomplete with custom appendTo:
//     $('#kota').autocomplete({
//       minChars: 2,
//       lookup: kotaArray,
//       appendTo: '#autocomplete-kota',
//     });
//     $('#kota').keyup(function(){
//   });


//   // desa
//   'use strict';
//     var provinsiJson = {
//       <?= $provinsi ?>
//     }
//     var provinsiArray = $.map(provinsiJson, function(value, key) {
//       return {
//         value: value,
//         data: key
//       };
//     });
//     // Initialize autocomplete with custom appendTo:
//     $('#provinsi').autocomplete({
//       minChars: 2,
//       lookup: provinsiArray,
//       appendTo: '#autocomplete-provinsi',
//     });
//     $('#provinsi').keyup(function(){
//   });

// })();
</script>