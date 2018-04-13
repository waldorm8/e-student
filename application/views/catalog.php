
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="<?php echo site_url('dashboard'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Strona główna</a>
          <a class="mdl-navigation__link" href="<?php echo site_url('user_details'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment_ind</i>Dane studenta</a>
          <a class="mdl-navigation__link" href="<?php echo site_url('recruitment') ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">stars</i>Rekrutacja</a>
          <a class="mdl-navigation__link" href="<?php echo site_url('messages'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Wiadomości</a>
          <a style="background-color:rgb(64,196,255);" class="mdl-navigation__link" href="<?php echo site_url('catalog'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>Kierunki studiów</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i>Plany zajęć</a>
          <div class="mdl-layout-spacer"></div>
          <!--<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>-->
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
                <div class="mdl-grid demo-content">
                  <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid content">
                    <select class="form-control ways">
                      <option value="0">Wybierz interesujący Cie kierunek studiów.</option>
                      <?php foreach($ways as $row){ ?>
                        <option value="<?php echo $row['sw_id']; ?>"><?php echo $row['sw_name']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                </div>
              </div>
      </main>
    </div>
  <script>
    $(document).ready(function(){
      $('.ways').on('change', function(){
        $('.divWays').remove();
        var sw_id = $(this).val();
        console.log(sw_id);
        var html = "";
        $.getJSON('jsonData.json', function(data){
          for(i=0;i<data.length;i++){
            if(data[i]['sw_id'] == sw_id){
              console.log(data[i]['sp_name']);

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
  </script>
