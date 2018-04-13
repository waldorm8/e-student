$(document).ready(function(){
        $('.edit-form').css('display', 'none');
        $('.edit').on('click', function(){
          $('.edit-form').fadeIn();
          var id_rc = $(this).attr('id');
          console.log(id_rc);
            $.ajax({
                url: "jsonConclusion.json",
                type: "get",
                contentType: "application/json",
                dataType: "json"
            })
            .done(function(json){
                for(i=0;i<json.length;i++){
                  if(json[i]['id_rc'] == id_rc){
                    $('button[name="zapisz"]').attr('value', id_rc);
                    $('input[name="polish_degree"]').attr('value', json[i]['rc_polish_degree']);
                    $('input[name="math_degree"]').attr('value', json[i]['rc_math_degree']);
                    $('input[name="english_degree"]').attr('value', json[i]['rc_english_degree']);
                    $('input[name="add_degree"]').attr('value', json[i]['rc_st_additional']);
                    $('input[name="average_degree"]').attr('value', json[i]['rc_average_degree']);
                    if(json[i]['rc_behavior'] == 6){
                      $('select[name="behavior_degree"]').val(6);
                    }
                    else if(json[i]['rc_behavior'] == 5){
                      $('select[name="behavior_degree"]').val(5);
                    }
                    else if(json[i]['rc_behavior'] == 4){
                      $('select[name="behavior_degree"]').val(4);
                    }
                    else if(json[i]['rc_behavior'] == 3){
                      $('select[name="behavior_degree"]').val(3);
                    }
                    else if(json[i]['rc_behavior'] == 2){
                      $('select[name="behavior_degree"]').val(2);
                    }
                    else if(json[i]['rc_behavior'] == 1){
                      $('select[name="behavior_degree"]').val(1);
                    }
                    $('input[name="polish_score"]').attr('value', json[i]['rc_polish_score']);
                    $('input[name="english_score"]').attr('value', json[i]['rc_english_score']);
                    $('input[name="math_score"]').attr('value', json[i]['rc_math_score']);
                    $('input[name="additional_score"]').attr('value', json[i]['rc_add_score']);
                  }
                }
            })
            .fail(function(){
                alert("Wystąpił błąd");
            })
            .always(function(){

            });
            $('.edit-form').fadeIn();
        });
    });
