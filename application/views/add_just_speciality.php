
<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
  <a  class="mdl-navigation__link" href="<?php echo site_url('admin'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Panel Administratora</a>
  <a class="mdl-navigation__link" href="<?php echo site_url('show_conclusions'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">stars</i>Lista wniosków na studia</a>
  <a class="mdl-navigation__link" href="<?php echo site_url('messages'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Wyślij wiadomość do studenta</a>
  <a class="mdl-navigation__link" href="<?php echo site_url('catalog/add_ways'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>Dodaj kierunki</a>
  <a style="background-color:rgb(64,196,255);" class="mdl-navigation__link" href="<?php echo site_url('catalog/just_speciality'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>Dodaj specjalizacje</a>
  <div class="mdl-layout-spacer"></div>
  <!--<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>-->
</nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
                <div class="mdl-grid demo-content">
                  <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid content">
                    <?php
                      echo form_open('catalog/just_speciality');
                    ?>
                    <label>Proszę o wybranie kierunku do którego dodać specjalizacje</label>
                    <select class="form-control" name="way">
                      <option></option>
                      <?php foreach($ways as $row){ ?>
                      <option value="<?php echo $row['sw_id'] ?>"><?php echo $row['sw_name']; ?></option>
                      <?php } ?>
                    </select>
                    <label>Nazwa specjalizacji</label>
                    <input required type="text" name="specName" class="form-control" />
                    <label>Opis specjalizacji</label>
                    <textarea required class="form-control" name="descSpec"></textarea>
                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Zapisz</button>
                    <?php
                      echo form_close();

                      if($this -> session -> flashdata('addSuccess') != NULL){
                        echo "<div class=\"alert alert-success\" role=\"alert\">";
                        echo $this->session->flashdata('addSuccess');
                        echo "</div>";
                      }
                      elseif($this -> session -> flashdata('addError') != NULL){
                        echo "<div class=\"alert alert-warning\" role=\"alert\">";
                        echo $this->session->flashdata('addError');
                        echo "</div>";
                      }
                     ?>
                </div>
              </div>

      </main>
    </div>
