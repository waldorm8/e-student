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
                <option value="<?php echo strtolower($result['sw_name']) ?>"><?php echo $result['sw_name']?></option>
                <?php
                }
                ?>
              </select>
              <h4>Nie jesteś pewny jaki kierunek wybrać? <a href="<?php echo site_url('catalog') ?>">Zobacz katalog kierunków.</a></h4>
            </div>

            <form>
            <div style="display:none;" class="form-group informatyka">
              <h3>Informatyka (inżynier)</h3>
              <input style="display:none" type="text" name="way" value="Informatyka">
              <h4>Wpisz oceny ze świadectwa maturalnego</h4>
              <label for="">Ocena z matematyki</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z informatyki</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z języka polskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z języka angielskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label id="label" for="study_way">Oceny z zachowania</label>
              <select name="" class="form-control" id="">
                <option></option>
                <option value="informatyka">Wzorowy</option>
                <option value="matematykaq">Bardzo dobry</option>
                <option value="pedagogika">Dobry</option>
                <option value="kosmetologia">Poprawny</option>
                <option value="filologia">Naganny</option>
              </select>
              <h4>Wpisz procentowe wyniki matury</h4>
              <label for="">Wynik z matematyki poziom podstawowym</label>
              <input type="number" maxlength="3" class="form-control" id="">
              <label for="">Wynik z matematyki poziom rozszerzonym</label>
              <input type="number" maxlength="3" class="form-control" placeholder="Jeśli nie pisano wpisz 0" id="">
              <label for="">Wynik z języka polskiego</label>
              <input type="number" maxlength="3" class="form-control" id="">
              <label for="">Wynik z języka angielskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <button type="button" class="btn btn-primary btn-lg btn-block">Złóż na studia!</button>
            </div>
            </form>
            <form>
            <div style="display:none;" class="form-group matematyka">
              <h3>Matematyka (licencjat)</h3>
              <input style="display:none" type="text" name="way" value="Matematyka">
              <h4>Wpisz oceny ze świadectwa maturalnego</h4>
              <label for="">Ocena z matematyki</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z WOS'u</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z języka polskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z języka angielskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label id="label" for="study_way">Oceny z zachowania</label>
              <select name="" class="form-control" id="">
                <option></option>
                <option value="informatyka">Wzorowy</option>
                <option value="matematykaq">Bardzo dobry</option>
                <option value="pedagogika">Dobry</option>
                <option value="kosmetologia">Poprawny</option>
                <option value="filologia">Naganny</option>
              </select>
              <h4>Wpisz procentowe wyniki matury</h4>
              <label for="">Wynik z matematyki, poziom podstawowym</label>
              <input type="number" maxlength="3" class="form-control" id="">
              <label for="">Wynik z matematyki, poziom rozszerzonym</label>
              <input type="number" maxlength="3" class="form-control" placeholder="Jeśli nie pisano wpisz 0" id="">
              <label for="">Wynik z języka polskiego</label>
              <input type="number" maxlength="3" class="form-control" id="">
              <label for="">Wynik z języka angielskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <button type="button" class="btn btn-primary btn-lg btn-block">Złóż na studia!</button>
            </div>
          </form>
            <form>
            <div style="display:none;" class="form-group pedagogika">
              <h3>Pedagogika (licencjat)</h3>
              <input style="display:none" type="text" name="way" value="Pedagogika">
              <h4>Wpisz oceny ze świadectwa maturalnego</h4>
              <label for="">Ocena z matematyki</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z historii</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z języka polskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z języka angielskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label id="label" for="study_way">Oceny z zachowania</label>
              <select name="" class="form-control" id="">
                <option></option>
                <option value="informatyka">Wzorowy</option>
                <option value="matematykaq">Bardzo dobry</option>
                <option value="pedagogika">Dobry</option>
                <option value="kosmetologia">Poprawny</option>
                <option value="filologia">Naganny</option>
              </select>
              <h4>Wpisz procentowe wyniki matury</h4>
              <label for="">Wynik z matematyki</label>
              <input type="number" maxlength="3" class="form-control" id="">
              <label for="">Wynik z języka polskiego, poziom podstawowy</label>
              <input type="number" maxlength="3" class="form-control" placeholder="Jeśli nie pisano wpisz 0" id="">
              <label for="">Wynik z języka polskiego, poziom rozszerzony</label>
              <input type="number" maxlength="3" class="form-control" id="">
              <label for="">Wynik z języka angielskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <button type="button" class="btn btn-primary btn-lg btn-block">Złóż na studia!</button>
            </div>
          </form>
            <form>
            <div style="display:none;" class="form-group kosmetologia">
              <h3>Kosmetologia (licencjat)</h3>
              <input style="display:none" type="text" name="way" value="Kosmetologia">
              <h4>Wpisz oceny ze świadectwa maturalnego</h4>
              <label for="">Ocena z matematyki</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z biologii</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z chemii</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z języka polskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z języka angielskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label id="label" for="study_way">Oceny z zachowania</label>
              <select name="" class="form-control" id="">
                <option></option>
                <option value="informatyka">Wzorowy</option>
                <option value="matematykaq">Bardzo dobry</option>
                <option value="pedagogika">Dobry</option>
                <option value="kosmetologia">Poprawny</option>
                <option value="filologia">Naganny</option>
              </select>
              <h4>Wpisz procentowe wyniki matury</h4>
              <label for="">Wynik z matematyki</label>
              <input type="number" maxlength="3" class="form-control" id="">
              <label for="">Wynik z języka polskiego</label>
              <input type="number" maxlength="3" class="form-control" placeholder="Jeśli nie pisano wpisz 0" id="">
              <label for="">Wynik z chemii lub biologii</label>
              <input type="number" maxlength="3" class="form-control" id="" placeholder="Wybierz lepszy wynik">
              <label for="">Wynik z języka angielskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <button type="button" class="btn btn-primary btn-lg btn-block">Złóż na studia!</button>
            </div>
          </form>
            <form>
            <div style="display:none;" class="form-group filologia">
              <h3>Filologia (licencjat)</h3>
              <input style="display:none" type="text" name="way" value="Filologia">
              <h4>Wpisz oceny ze świadectwa maturalnego</h4>
              <label for="">Ocena z matematyki</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z historii</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z języka polskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label for="">Ocena z języka angielskiego</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <label id="label" for="study_way">Oceny z zachowania</label>
              <select name="" class="form-control" id="">
                <option></option>
                <option value="informatyka">Wzorowy</option>
                <option value="matematykaq">Bardzo dobry</option>
                <option value="pedagogika">Dobry</option>
                <option value="kosmetologia">Poprawny</option>
                <option value="filologia">Naganny</option>
              </select>
              <h4>Wpisz procentowe wyniki matury</h4>
              <label for="">Wynik z matematyki</label>
              <input type="number" maxlength="3" class="form-control" id="">
              <label for="">Wynik z języka polskiego</label>
              <input type="number" maxlength="3" class="form-control" placeholder="Jeśli nie pisano wpisz 0" id="">
              <label for="">Wynik z języka angielskiego, poziom podstawowy</label>
              <input type="number" maxlength="3" class="form-control" id="">
              <label for="">Wynik z języka angielskiego, poziom rozszerzony</label>
              <input type="number" maxlength="1" min="2" max="6" class="form-control" id="">
              <button type="button" class="btn btn-primary btn-lg btn-block">Złóż na studia!</button>
            </div>
          </form>
        </div>
      </div>
</main>
<script>
  $(document).ready(function(){
      $('select').change(function(){
        var study_way = $('select[name="listOfWays"]').val();
        $('.study_way').hide('slow');
        if(study_way == "informatyka"){
          $('.informatyka').delay(800).show('slow');
        }
        else if(study_way == "matematyka"){
          $('.matematyka').delay(800).show('slow');
        }
        else if(study_way == "pedagogika"){
          $('.pedagogika').delay(800).show('slow');
        }
        else if(study_way == "kosmetologia"){
          $('.Kosmetologia').delay(800).show('slow');
        }
        else if(study_way == "filologia"){
          $('.filologia').delay(800).show('slow');
        }
      });
  });
</script>
</div>
