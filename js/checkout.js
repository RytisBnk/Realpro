$(document).ready(function () {
$('#images').on("change",function(){
    var options = {
        type:"post",
        url: uploadUri,
        beforeSend: function()
        {
            $("#progress3").show();
            //clear everything
            $("#bar3").width('0%');
            $("#message3").html("");
            $("#percent3").html("0%");
        },
        uploadProgress: function(event, position, total, percentComplete)
        {
            $("#bar3").width(percentComplete+'%');
            $("#percent3").html(percentComplete+'%');
        },
        success: function()
        {
            $("#bar3").width('100%');
            $("#percent3").html('100%');

        },
        complete: function(response)
        {
            $("#message3").html("<span style='color: green;'>"+'Įkelta sėkmingai!'+"</span>");
        },
        error: function()
        {
            $("#message3").html("<span style='color: red;'> ERROR: unable to upload files</span>");
        }
    };

    $("#myForm").ajaxSubmit(options);
});

  $('#tipas').on('change', function () {
    var tipas = $(this).val();

    if (tipas == 'namas') {
      $('#aukstas').hide();
      $('#sklypas').show();
      $('#renovacija').fadeIn();
      $('#renovuotas').html('Namas renovuotas');
      $('#namo_tipas').show();
      $('#aukstu_skaicius').fadeIn();
      $('#kambariu_skaicius').fadeIn();
      $('#statybos_metai').fadeIn();
      $('#pastato_tipas').fadeIn();
      $('#irengimas').show();
      $('#sklypo_hr').show();
      $('#paskirtis').fadeOut(function () {
        $('#sildymas').fadeIn();
      });
      $('#garazas_hr').show();
    }
    else if (tipas == 'sklypas') {
      $('#aukstu_skaicius').fadeOut();
      $('#kambariu_skaicius').fadeOut();
      $('#aukstas').fadeOut();
      $('#renovacija').fadeOut();
      $('#statybos_metai').fadeOut();
      $('#pastato_tipas').fadeOut();
      $('#sklypas').hide();
      $('#namo_tipas').hide();
      $('#irengimas').hide();
      $('#sklypo_hr').hide();
      $('#paskirtis_kom').hide();
      $('#sildymas').fadeOut(function () {
        $('#paskirtis').fadeIn();
      });
      $('#talpa').hide();
      $('#garazo_tipas').hide();
      $('#garazas_hr').show();
    }
     else if (tipas == 'patalpos') {
      $('#aukstu_skaicius').fadeOut();
      $('#kambariu_skaicius').fadeOut();
      $('#aukstas').fadeIn();
      $('#renovacija').fadeOut();
      $('#statybos_metai').fadeOut();
      $('#pastato_tipas').fadeOut();
      $('#sklypas').hide();
      $('#namo_tipas').hide();
      $('#irengimas').show();
      $('#sklypo_hr').hide();
      $('#sildymas').hide();
      $('#paskirtis').hide();
      $('#paskirtis_kom').show();
      $('#talpa').hide();
      $('#garazo_tipas').hide();
      $('#garazas_hr').show();
    }
    else if (tipas == 'garazas') {
     $('#aukstu_skaicius').fadeOut();
     $('#kambariu_skaicius').fadeOut();
     $('#aukstas').hide();
     $('#renovacija').fadeOut();
     $('#statybos_metai').fadeOut();
     $('#pastato_tipas').fadeOut();
     $('#sklypas').hide();
     $('#namo_tipas').hide();
     $('#irengimas').hide();
     $('#sklypo_hr').hide();
     $('#sildymas').hide();
     $('#paskirtis').hide();
     $('#paskirtis_kom').hide();
     $('#talpa').show();
     $('#garazo_tipas').show();
     $('#garazas_hr').hide();
   }
   else if (tipas == 'butas') {
    $('#aukstu_skaicius').show();
    $('#kambariu_skaicius').show();
    $('#aukstas').show();
    $('#renovacija').show();
    $('#statybos_metai').show();
    $('#pastato_tipas').show();
    $('#sklypas').hide();
    $('#namo_tipas').hide();
    $('#irengimas').show();
    $('#sklypo_hr').show();
    $('#sildymas').show();
    $('#renovuotas').html('Butas renovuotas');
    $('#paskirtis').hide();
    $('#paskirtis_kom').hide();
    $('#talpa').hide();
    $('#garazo_tipas').hide();
    $('#garazas_hr').show();
  }
  });
  $('#pardavimo_tipas').on('change', function () {
    var pasiulymas = $(this).val();

    if (pasiulymas == 'nuomuoti') {
      $('#kaina').html('Kaina, &euro; per mėn.');
    }
    else {
      $('#kaina').html('Kaina, &euro;');
    }
  });
});
