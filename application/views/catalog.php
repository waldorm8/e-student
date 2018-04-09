
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
                    <datalist id="ways">
                      <?php foreach($ways as $row){ ?>
                      <option value="<?php echo $row['sw_name'];  ?>">
                      <?php } ?>
                    </datalist>
                    <input class="form-control" list="ways" placeholder="Wybierz interesujący Cie kierunek studiów." name="ways">
                    //powybraniu kierunku wyswietlic informacje na temat specjalizacji i opis
                </div>
              </div>
      </main>
    </div>
    <script>
  </script>
