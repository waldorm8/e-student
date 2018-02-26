
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a style="background-color:rgb(64,196,255);" class="mdl-navigation__link" href="<?php echo site_url('admin'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Panel Administratora</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">stars</i>Lista studentow</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Wyslij wiadomosc do student</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>Dodaj kiernuki</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">domain</i>Lista akademikow</a>
          <div class="mdl-layout-spacer"></div>
          <!--<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>-->
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">

            <?php
              foreach($articles as $row){?>
                <div class="mdl-grid demo-content">
                  <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid content">
                  <h2 class="mdl-card__title-text title">
                    <?php echo $row['n_title']; ?>
                    <a href="<?php echo base_url(); ?>admin/delete_news?id=<?php echo $row['n_id'] ?>"><i class="material-icons">clear</i></a>
                    <a href="<?php echo base_url(); ?>admin/edit_news?id=<?php echo $row['n_id'] ?>"><i class="material-icons edit">create</i></a>
                  </h2>
                  <small class="date"><?php echo $row['n_date']; ?></small>
                  <div class="mdl-card__supporting-text text">
                      <?php echo $row['n_text']; ?>
                  </div>
                  </div>
                  </div>
                <?php
                  }
                ?>
      </main>
    </div>
