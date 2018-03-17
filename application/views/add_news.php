<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
  <a style="background-color:rgb(64,196,255);" class="mdl-navigation__link" href="<?php echo site_url('admin'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Panel Administratora</a>
  <a class="mdl-navigation__link" href="<?php echo site_url('show_conclusions'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">stars</i>Lista wniosków na studia</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">domain</i>Ustawienia rekrutacji</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Wyslij wiadomosc do student</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>Dodaj kiernuki</a>
  <div class="mdl-layout-spacer"></div>
  <!--<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>-->
</nav>
</div>
<main class="mdl-layout__content mdl-color--grey-100">
<div class="mdl-grid demo-content">
  <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid content">
      <div class="mdl-card__supporting-text text">
        <?php
        if($this -> input -> get('id', TRUE)){
            echo form_open('admin/edit_news?id='.$this -> input -> get('id', TRUE));
        }
        else{
            echo form_open('admin/add_news');
        }?>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="title" id="title" value="<?php
            if($this -> input -> get('id', TRUE)){
              foreach($articles as $row){
                  echo $row['n_title'];
              }
            }
            else{
              echo "";
            }
            ?>">
            <label class="mdl-textfield__label" for="title">Tytuł</label>
          </div>
          <textarea name="text" id="editor1" rows="10" cols="80">
          <?php
          if($this -> input -> get('id', TRUE)){
            foreach($articles as $row){
              echo $row['n_text'];
            }
          }
          else{
            echo "";
            }
          ?>
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
          elseif($this->session->flashdata('Bad')){
            echo "<div class=\"alert alert-warnings\" role=\"alert\">";
            echo $this->session->flashdata('Bad');
            echo "</div>";
          }
          elseif($this -> session -> flashdata('edit_done')){
            echo "<div class=\"alert alert-success\" role=\"alert\">";
            echo $this->session->flashdata('edit_done');
            echo "</div>";
          }
          elseif($this->session->flashdata('edit_bad')){
            echo "<div class=\"alert alert-warnings\" role=\"alert\">";
            echo $this->session->flashdata('edit_bad');
            echo "</div>";
          }
      ?>
      </div>
  </div>
</div>
</main>
</div>
