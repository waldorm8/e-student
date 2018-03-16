<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
  <a class="mdl-navigation__link" href="<?php echo site_url('dashboard'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Strona główna</a>
  <a class="mdl-navigation__link" href="<?php echo site_url('user_details'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment_ind</i>Dane studenta</a>
  <a style="background-color:rgb(64,196,255);" class="mdl-navigation__link" href="<?php echo site_url('recruitment') ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">stars</i>Rekrutacja</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Wiadomosci</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>Kierunki studiów</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">domain</i>Akademiki</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i>Plany zajęć</a>
  <div class="mdl-layout-spacer"></div>
  <!--<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>-->
</nav>
</div>
<main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid content">
            <div class="form-group study_way">
              <h3>Przed wypełnieniem ocen na dany kierunek sprawdź czy uzupełniłeś swoje <a href="<?php echo site_url('user_details')?>">dane osobowe!</a></h3>
              <label id="label" for="study_way">Wybierz kierunek studiów.</label>
              <select name="listOfWays" class="form-control" id="study_way_select">
                <option></option>
                <?php foreach($ways as $result)
                { ?>
                <option value="<?php echo strtolower($result['sw_id']) ?>"><?php echo $result['sw_name']?></option>
                <?php
                }
                ?>
              </select>
              <?php
              if($this->session->flashdata('good')):?>
                <div class="alert alert-success" role="alert">
                  <?php  echo $this -> session -> flashdata('good'); ?>
                </div>
              <?php
              elseif($this -> session -> flashdata('detailserr')):?>
                <div class="alert alert-warning" role="alert">
                  <?php echo $this -> session -> flashdata('detailserr');?>
                </div>
              <?php
              elseif($this -> session -> flashdata('existerr')):?>
                <div class="alert alert-warning" role="alert">
                  <?php echo $this -> session -> flashdata('existerr');?>
                </div>
              <?php
              elseif($this -> session -> flashdata('baseerr')):?>
                  <div class="alert alert-warning" role="alert">
                    <?php echo $this -> session -> flashdata('baseerr');?>
                  </div>
              <?php
              endif;
              ?>
              <h4>Nie jesteś pewny jaki kierunek wybrać? <a href="<?php echo site_url('catalog') ?>">Zobacz katalog kierunków.</a></h4>
            </div>

            <?php echo form_open('recruitment/save_conclusion'); ?>
            <div style="display:none;" class="form-group informatyka">
              <h3>Informatyka (inżynier)</h3>
              <input style="display:none" type="text" name="way" value="4">
              <h4>Wpisz oceny ze świadectwa maturalnego</h4>
              <label for="">Ocena z języka polskiego</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="polish_degree" class="form-control">
              <label for="">Ocena z matematyki</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="math_degree" class="form-control">
              <label for="">Ocena z języka angielskiego</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="english_degree" class="form-control">
              <label for="">Ocena z informatyki lub fizyki</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="add_degree" class="form-control">
              <label id="label" for="study_way">Ocena z zachowania</label>
              <select required name="behavior_degree" class="form-control">
                <option></option>
                <option value="6">Wzorowy</option>
                <option value="5">Bardzo dobry</option>
                <option value="4">Dobry</option>
                <option value="3">Poprawny</option>
                <option value="2">Naganny</option>
                <option value="1">Nieodpowiedni</option>
              </select>
              <h4>Wpisz procentowe wyniki matury</h4>
              <label for="">Wynik z języka polskiego</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="polish_score" class="form-control">
              <label for="">Wynik z matematyki poziom podstawowy</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="math_score" class="form-control">
              <label for="">Wynik z języka angielskiego</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="english_score" class="form-control">
              <label for="">Wynik z przedmiotu dodatkowego (matematyka-poziom rozszerzony lub informatyka lub fizyka)</label>
              <input required type="number" min="0" max="100" class="form-control" name="additional_score" placeholder="Jeśli nie pisano wpisz 0">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Złóż na studia!</button>
            </div>
            <?php echo form_close(); ?>
            <?php echo form_open('recruitment/save_conclusion'); ?>
            <div style="display:none;" class="form-group matematyka">
              <h3>Matematyka (licencjat)</h3>
              <input style="display:none" type="text" name="way" value="5">
              <h4>Wpisz oceny ze świadectwa maturalnego</h4>
              <label for="">Ocena z języka polskiego</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="polish_degree" class="form-control">
              <label for="">Ocena z matematyki</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="math_degree" class="form-control">
              <label for="">Ocena z języka angielskiego</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="english_degree" class="form-control">
              <label for="">Ocena z informatyki lub fizyki</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="add_degree" class="form-control">
              <label id="label" for="study_way">Ocena z zachowania</label>
              <select required name="behavior_degree" class="form-control" id>
                <option></option>
                <option value="6">Wzorowy</option>
                <option value="5">Bardzo dobry</option>
                <option value="4">Dobry</option>
                <option value="3">Poprawny</option>
                <option value="2">Naganny</option>
                <option value="1">Nieodpowiedni</option>
              </select>
              <h4>Wpisz procentowe wyniki matury</h4>
              <label for="">Wynik z języka polskiego</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="polish_score" class="form-control">
              <label for="">Wynik z matematyki poziom podstawowy</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="math_score" class="form-control">
              <label for="">Wynik z języka angielskiego</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="english_score" class="form-control">
              <label for="">Wynik z przedmiotu dodatkowego (matematyka - poziom rozszerzony, informatyka, fizyka)</label>
              <input required type="number" min="0" max="100" class="form-control" name="additional_score" placeholder="Jeśli nie pisano wpisz 0">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Złóż na studia!</button>
            </div>
          <?php echo form_close(); ?>
            <?php echo form_open('recruitment/save_conclusion'); ?>
            <div style="display:none;" class="form-group pedagogika">
              <h3>Pedagogika (licencjat)</h3>
              <input style="display:none" type="text" name="way" value="11">
              <h4>Wpisz oceny ze świadectwa maturalnego</h4>
              <label for="">Ocena z języka polskiego</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="polish_degree" class="form-control">
              <label for="">Ocena z matematyki</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="math_degree" class="form-control">
              <label for="">Ocena z języka angielskiego</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="english_degree" class="form-control">
              <label for="">Ocena z historii lub WOS</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="add_degree" class="form-control">
              <label id="label" for="study_way">Ocena z zachowania</label>
              <select required name="behavior_degree" class="form-control">
                <option></option>
                <option value="6">Wzorowy</option>
                <option value="5">Bardzo dobry</option>
                <option value="4">Dobry</option>
                <option value="3">Poprawny</option>
                <option value="2">Naganny</option>
                <option value="1">Nieodpowiedni</option>
              </select>
              <h4>Wpisz procentowe wyniki matury</h4>
              <label for="">Wynik z języka polskiego poziom podstawowy</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="polish_score" class="form-control">
              <label for="">Wynik z matematyki poziom podstawowy</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="math_score" class="form-control">
              <label for="">Wynik z języka angielskiego</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="english_score" class="form-control">
              <label for="">Wynik z przedmiotu dodatkowego (język polski - poziom rozszerzony lub historia lub wos)</label>
              <input required type="number" min="0" max="100" class="form-control" placeholder="Jeśli nie pisano wpisz 0">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Złóż na studia!</button>
            </div>
          <?php echo form_close(); ?>
            <?php echo form_open('recruitment/save_conclusion'); ?>
              <div style="display:none;" class="form-group kosmetologia">
              <h3>Kosmetologia (licencjat)</h3>
              <input style="display:none" type="text" name="way" value="10">
              <h4>Wpisz oceny ze świadectwa maturalnego</h4>
              <label for="">Ocena z języka polskiego</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="polish_degree" class="form-control">
              <label for="">Ocena z matematyki</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="math_degree" class="form-control">
              <label for="">Ocena z języka angielskiego</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="english_degree" class="form-control">
              <label for="">Ocena z chemii lub biologii</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="add_degree" class="form-control">
              <label id="label" for="study_way">Oceny z zachowania</label>
              <select required name="behavior_degree" class="form-control">
                <option></option>
                <option value="6">Wzorowy</option>
                <option value="5">Bardzo dobry</option>
                <option value="4">Dobry</option>
                <option value="3">Poprawny</option>
                <option value="2">Naganny</option>
                <option value="1">Nieodpowiedni</option>
              </select>
              <h4>Wpisz procentowe wyniki matury</h4>
              <label for="">Wynik z języka polskiego</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="polish_score" class="form-control">
              <label for="">Wynik z matematyki poziom podstawowy</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="math_score" class="form-control">
              <label for="">Wynik z języka angielskiego</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="english_score" class="form-control">
              <label for="">Wynik z przedmiotu dodatkowego (biologia, chemia)</label>
              <input required type="number" min="0" max="100" class="form-control" name="additional_score" placeholder="Jeśli nie pisano wpisz 0">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Złóż na studia!</button>
            </div>
          <?php echo form_close(); ?>
            <?php echo form_open('recruitment/save_conclusion'); ?>
            <div style="display:none;" class="form-group filologia">
              <h3>Filologia (licencjat)</h3>
              <input style="display:none" type="text" name="way" value="14">
              <h4>Wpisz oceny ze świadectwa maturalnego</h4>
              <label for="">Ocena z języka polskiego</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="polish_degree" class="form-control">
              <label for="">Ocena z matematyki</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="math_degree" class="form-control">
              <label for="">Ocena z języka angielskiego</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="english_degree" class="form-control">
              <label for="">Ocena z wybranego języka obcego</label>
              <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="add_degree" class="form-control">
              <label id="label" for="study_way">Oceny z zachowania</label>
              <select required name="behavior_degree" class="form-control">
                <option></option>
                <option value="6">Wzorowy</option>
                <option value="5">Bardzo dobry</option>
                <option value="4">Dobry</option>
                <option value="3">Poprawny</option>
                <option value="2">Naganny</option>
                <option value="1">Nieodpowiedni</option>
              </select>
              <h4>Wpisz procentowe wyniki matury</h4>
              <label for="">Wynik z języka polskiego</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="polish_score" class="form-control">
              <label for="">Wynik z matematyki poziom podstawowy</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="math_score" class="form-control">
              <label for="">Wynik z języka angielskiego</label>
              <input required type="number" min="30" max="100" placeholder="zakres: 30-100" name="english_score" class="form-control">
              <label for="">Wynik z przedmiotu dodatkowego (język obcy dodatkowy lub angielski na poziomie rozszerzonym)</label>
              <input required type="number" min="0" max="100" class="form-control" name="additional_score" placeholder="Jeśli nie pisano wpisz 0">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Złóż na studia!</button>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>
</main>
<script src="<?php echo base_url(); ?>assets/js/recruitment_script.js"></script>
</div>
