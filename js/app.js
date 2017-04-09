startApp();

$(".btn-inscription").click(function(){
  var click = $(this);
  if($(this).hasClass('btn-success')) {
    $.post('requetes/requeteInscriptionEven.php', {id: $(this).attr('id'), action: 'inscription'}).success(function() {
      click.removeClass('btn-success');
      click.addClass('btn-danger');
      click.html('Ne plus participer <i class="material-icons">clear</i>');
    });
  } else {
    $.post('requetes/requeteInscriptionEven.php', {id: $(this).attr('id'), action: 'desinscription'}).success(function() {
      var url = document.location.href;
      if(url.search("utilisateur") == -1) {
        click.removeClass('btn-danger');
        click.addClass('btn-success');
        click.html('Participer <i class="material-icons">done</i>');
      } else {
        $("#"+click.attr('id')).remove();
      }
    });
  }

});

function tousLesEve() {
  $('.table-evenements > tbody > tr').each(function(){
    $(this).show();
  });
  return false;
};

function eveAVenir(dateDuJour) {
  $('.table-evenements > tbody > tr').each(function(){
    $(this).show();
    if(new Date($(this).attr('data-date')).getTime() < new Date(dateDuJour).getTime())
      $(this).hide();
  });
  return false;
};

function evePasse(dateDuJour) {
  $('.table-evenements > tbody > tr').each(function(){
    $(this).show();
    if(new Date($(this).attr('data-date')).getTime() > new Date(dateDuJour).getTime())
      $(this).hide();
  });
  return false;
};

function triDateCroissant() {
  $('.table-evenements > tbody > tr').sort(function(a,b){
    return new Date($(a).attr('data-date')).getTime() > new Date($(b).attr('data-date')).getTime();
  }).appendTo('tbody');
  $('.triDate > li').html('<a href="#" data-toggle="tab" aria-expanded="false">Tri date<i class="material-icons">arrow_upward</i></a>');
  $('.triDate > li').attr('onclick', 'triDateDecroissant()');
}

function triDateDecroissant() {
  $('.table-evenements > tbody > tr').sort(function(a,b){
    return new Date($(a).attr('data-date')).getTime() < new Date($(b).attr('data-date')).getTime();
  }).appendTo('tbody');
  $('.triDate > li').html('<a href="#" data-toggle="tab" aria-expanded="false">Tri date<i class="material-icons">arrow_downward</i></a>');
  $('.triDate > li').attr('onclick', 'triDateCroissant()');
}

$(document).ready(function () {
  triDateDecroissant();
});

