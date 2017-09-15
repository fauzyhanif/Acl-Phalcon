<script type="text/javascript">

for (var i = 0; i <= 12; i++) {
  $('#datepicker'+[i]).datepicker({
    autoclose: true
  });
}

(function() {
  // kec
  'use strict';
    var kecJson = {
      <?= $kec ?>
    }
    var kecArray = $.map(kecJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#kcmtn').autocomplete({
      minChars: 2,
      lookup: kecArray,
      appendTo: '#autocomplete-kecamatan',
    });
    $('#kcmtn').keyup(function(){
  });


  // kec
  'use strict';
    var kecJson = {
      <?= $kec ?>
    }
    var kecArray = $.map(kecJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#c_kcmtn').autocomplete({
      minChars: 2,
      lookup: kecArray,
      appendTo: '#autocomplete-kecamatan-c',
    });
    $('#c_kcmtn').keyup(function(){
  });



  // desa
  'use strict';
    var desaJson = {
      <?= $desa ?>
    }
    var desaArray = $.map(desaJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#desa').autocomplete({
      minChars: 2,
      lookup: desaArray,
      appendTo: '#autocomplete-desa',
    });
    $('#desa').keyup(function(){
  });


  // desa
  'use strict';
    var desaJson = {
      <?= $desa ?>
    }
    var desaArray = $.map(desaJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#c_desa').autocomplete({
      minChars: 2,
      lookup: desaArray,
      appendTo: '#autocomplete-desa-c',
    });
    $('#c_desa').keyup(function(){
  });


  // kota
  'use strict';
    var kotaJson = {
      <?= $kota ?>
    }
    var kotaArray = $.map(kotaJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#kota').autocomplete({
      minChars: 2,
      lookup: kotaArray,
      appendTo: '#autocomplete-kota',
    });
    $('#kota').keyup(function(){
  });

    // kota
  'use strict';
    var kotaJson = {
      <?= $kota ?>
    }
    var kotaArray = $.map(kotaJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#c_kota').autocomplete({
      minChars: 2,
      lookup: kotaArray,
      appendTo: '#autocomplete-kota-c',
    });
    $('#c_kota').keyup(function(){
  });


  // provinsi
  'use strict';
    var provinsiJson = {
      <?= $provinsi ?>
    }
    var provinsiArray = $.map(provinsiJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#provinsi').autocomplete({
      minChars: 2,
      lookup: provinsiArray,
      appendTo: '#autocomplete-provinsi',
    });
    $('#provinsi').keyup(function(){
  });

  // provinsi
  'use strict';
    var provinsiJson = {
      <?= $provinsi ?>
    }
    var provinsiArray = $.map(provinsiJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#c_provinsi').autocomplete({
      minChars: 2,
      lookup: provinsiArray,
      appendTo: '#autocomplete-provinsi-c',
    });
    $('#c_provinsi').keyup(function(){
  });


  $('form[data-remote]').on('submit', function(e) {
    var form = $(this);
    var url = form.prop('action');


    $.ajax({
      type: 'POST',
      url: url,
      dataType:'json',
      data: form.serialize(),
      success: function(response){
       swal({
          title: '<h2>Berhasil !</h2>',
          type: 'success',
          showConfirmButton:false,
          html:
          'Pendaftaran Peserta berhasil. <br>'+
          '<span>Klik tombol dibawah ini untuk melakukan pembayaran</span>. <br>'+
          '<div class="text-center" style="padding-top:30px;">'+
            
          '<div>',
        });

      }
    });
 
    e.preventDefault();
  });
})();
</script>