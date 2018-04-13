$(document).ready(function(){
  $('.ways').on('change', function(){
    $('.divWays').remove();
    var sw_id = $(this).val();
    var html = "";
    $.getJSON('jsonData.json', function(data){
      for(i=0;i<data.length;i++){
        if(data[i]['sw_id'] == sw_id){
          $('<div class="mdl-grid demo-content divWays"><div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid content ways"><h4>'+data[i]['sp_name']+'</h4></div></div>').appendTo('main').fadeIn();
          $('<p>'+data[i]["sp_describe"]+'</p>').appendTo('.ways');
        }
      }
    })
    .fail(function(){
      alert('Wystąpił błąd');
    });
  });
});
