$(document).ready(function(){
    $('select').change(function(){
      var study_way = $('select[name="listOfWays"]').val();
      $('.study_way').hide('slow');
      if(study_way == 4){
        $('.informatyka').delay(800).show('slow');
      }
      else if(study_way == 5){
        $('.matematyka').delay(800).show('slow');
      }
      else if(study_way == 11){
        $('.pedagogika').delay(800).show('slow');
      }
      else if(study_way == 10){
        $('.kosmetologia').delay(800).show('slow');
      }
      else if(study_way == 14){
        $('.filologia').delay(800).show('slow');
      }
    });
});
