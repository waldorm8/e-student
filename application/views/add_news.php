<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
  <a style="background-color:rgb(64,196,255);" class="mdl-navigation__link" href="<?php echo site_url('dashboard'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Strona główna</a>
  <a class="mdl-navigation__link" href="<?php echo site_url('user_details'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment_ind</i>Dane studenta</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">stars</i>Lista studentow</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Wyslij wiadomosc do student</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>Dodaj kiernuki</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">domain</i>Lista akademikow</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i>Plany zajęć</a>
  <div class="mdl-layout-spacer"></div>
  <!--<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>-->
</nav>
</div>
<main class="mdl-layout__content mdl-color--grey-100">
<div class="mdl-grid demo-content">
  <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid content">
      <div class="mdl-card__supporting-text text">
        <?php echo form_open('admin/add_news'); ?>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="title" id="title">
            <label class="mdl-textfield__label" for="title">Tytuł</label>
          </div>
          <textarea name="text" id="editor1" rows="10" cols="80">
              This is my textarea to be replaced with CKEditor.
          </textarea>
          <script>
              // Replace the <textarea id="editor1"> with a CKEditor
              // instance, using default configuration.
              CKEDITOR.replace( 'editor1' );
          </script>
          <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
              Zapisz
          </button>
      <?php echo form_close(); ?>
      <?php
          if($this->session->flashdata('Done')){
            echo "<div class=\"alert alert-success\" role=\"alert\">";
            echo $this->session->flashdata('Done');
            echo "</div>";
          }
          else{
            echo "<div class=\"alert alert-warnings\" role=\"alert\">";
            echo $this->session->flashdata('Bad');
            echo "</div>";
          }
      ?>
      </div>
  </div>

  <!--<div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
    <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
      <use xlink:href="#chart" />
    </svg>
    <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
      <use xlink:href="#chart" />
    </svg>
  </div>-->
</div>
</main>
</div>
