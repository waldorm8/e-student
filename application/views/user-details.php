
<?php
if(isset($data)){
  foreach($data as $row){
    $details = array(
        'name' => $row['st_name'],
        'surname' => $row['st_surname'],
        'city' => $row['st_city'],
        'street' => $row['st_street'],
        'houseNumber' => $row['st_house_number'],
        'zipCode' => $row['st_zipcode'],
        'pesel' => $row['st_pesel'],
        'indexNumber' => $row['st_indeks'],
        'dateOfBirth' => $row['st_birth_date'],
        'login' => $row['st_login'],
        'email' => $row['st_email']
    );
  }
}
?>

 <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="<?php echo site_url('dashboard'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Strona główna</a>
          <a style="background-color:rgb(64,196,255);" class="mdl-navigation__link" href="<?php echo site_url('user_details'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment_ind</i>Dane studenta</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">stars</i>Rekrutacja</a>
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
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Dane osobowe</h2>
          </div>
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
              <?php echo form_open('user_details/editing_details'); ?>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="name" name="name">
                  <label class="mdl-textfield__label" for="name"><?php $text = isset($details['name']) ? $details['name'] : 
                  "Imię"; echo $text; ?></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="surname" name="surname">
                  <label class="mdl-textfield__label" for="surname"><?php $text = isset($details['surname']) ? $details['surname'] : 
                  "Nazwisko"; echo $text;  ?></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="street" name="street">
                  <label class="mdl-textfield__label" for="street">
                  <?php
                    if(isset($details)){
                      if($details['street'] == NULL){
                        echo "Ulica";
                      }
                      else{
                        echo $details['street'];
                      }
                    }
                    else{
                      echo "Ulica";
                    }
                  ?></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="number" id="houseNumber" name="houseNumber">
                  <label class="mdl-textfield__label" for="houseNumber">
                    <?php 
                      if(isset($details)){
                        if($details['houseNumber'] == NULL){
                          echo "Numer domu/mieszkania";
                        }
                        else{
                          echo $details['houseNumber'];
                        }
                      }
                      else{
                        echo "Numer domu/mieszkania";
                      }
                   ?></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" maxlength="5" type="number" id="zipCode" name="zipCode">
                  <label class="mdl-textfield__label" for="zipCode">
                    <?php
                      if(isset($details)){
                        if($details['zipCode'] == NULL){
                         echo "Kod pocztowy, np.: 15215";
                       }
                        else{
                          echo $details['zipCode'];
                        }
                      }
                      else{
                        echo "Kod pocztowy, np.: 15215";
                      }
                  ?></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="city" name="city">
                  <label class="mdl-textfield__label" for="city">
                    <?php 
                      if(isset($details)){
                        if($details['city'] == NULL){
                         echo "Miasto";
                       }
                        else{
                          echo $details['city'];
                        }
                      }
                      else{
                        echo "Miasto";
                      }
                  ?></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" maxlength="11" type="number" id="pesel" name="pesel">
                  <label class="mdl-textfield__label" for="pesel">
                    <?php
                      if(isset($details)){
                        if($details['pesel'] == NULL){
                         echo "Pesel";
                       }
                        else{
                          echo $details['pesel'];
                        }
                      }
                      else{
                        echo "Pesel";
                      }
                  ?></label>
                </div>
                 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="number" id="indexNumber" name="indexNumber">
                  <label class="mdl-textfield__label" for="indexNumber"><?php 
                    if(isset($details)){
                        if($details['indexNumber'] == NULL){
                         echo "Numer indeksu";
                       }
                        else{
                          echo $details['indexNumber'];
                        }
                      }
                      else{
                        echo "Numer Indeksu";
                      }
                   ?></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <label for="dateOfBirth">Data urodzenia</label>
                  <input class="mdl-datepicker__input" type="date" id="dateOfBirth" name="dateOfBirth"  value="
                  <?php
                    if(isset($details)){
                      if($details['dateOfBirth'] != NULL){
                        echo $details['dateOfBirth'];
                      }
                      else{
                        echo "0000-00-00";
                      }
                    }
                    else{
                      echo "0000-00-00";
                    }
                  ?>"/>
                </div>
                <button type="submit" name="save_details" value="save_details" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Zapisz
                </button>
                <?php 
                      if(isset($form1_errors)) echo '<div class="alert alert-danger role="alert">'.$form1_errors.'</div>';
                      else if($this -> session -> flashdata('success')){
                          echo "<div class=\"alert alert-success\" role=\"alert\">";
                          echo $this->session->flashdata('success');
                          echo "</div>";
                      }
                      else if($this -> session -> flashdata('error')){
                          echo "<div class=\"alert alert-danger\" role=\"alert\">";
                          echo $this->session->flashdata('error');
                          echo "</div>";
                      }
                ?>
              <?php echo form_close(); ?>
          </div>
        </div>
         <div class="mdl-grid demo-content">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Szczegóły konta studenta</h2>
          </div>
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
              <?php echo form_open('user_details/editing_acc_details'); ?>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" name="login" id="login">
                  <label class="mdl-textfield__label" for="login">
                    <?php
                      if(isset($details)){
                        if($details['login'] == NULL){
                         echo "Login";
                       }
                        else{
                          echo $details['login'];
                        }
                      }
                      else{
                        echo "Login";
                      }
                    ?>
                  </label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="email" name="email" id="email">
                  <label class="mdl-textfield__label" for="email">
                    <?php
                      if(isset($details)){
                        if($details['email'] == NULL){
                         echo "E-mail";
                       }
                        else{
                          echo $details['email'];
                        }
                      }
                      else{
                        echo "E-mail";
                      }
                    ?>
                  </label>
                </div>
                <button type="submit" name="save_acc_details" value="save_acc_details" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Zapisz
                </button>
                <?php
                  if(isset($form2_errors)) echo '<div class="alert alert-danger role="alert">'.$form2_errors.'</div>';
                  else if($this -> session -> flashdata('success_acc_details')){
                    echo "<div class=\"alert alert-success\" role=\"alert\">";
                    echo $this->session->flashdata('success_acc_details');
                    echo "</div>";
                  }
                  else if($this -> session -> flashdata('error_acc_details')){
                    echo "<div class=\"alert alert-danger\" role=\"alert\">";
                    echo $this->session->flashdata('error_acc_details');
                    echo "</div>";
                  }
                ?>
              <?php echo form_close(); ?>
              <form>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">Stare hasło</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">Nowe hasło</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">Powtórz nowe hasło</label>
                </div>
                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Zmień
                </button>
              </form>
          </div>
        </div>
         <div class="mdl-grid demo-content">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Zdjęcie</h2>
          </div>
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
              <form>
                <div class="mdl-file mdl-js-file mdl-file--floating-label">
                  <input type="file" name="avatar" id="avatar">
                  <label class="mdl-file__label" for="avatar">Avatar</label>
                </div>
                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Dodaj
                </button>
              </form>
          </div>
        </div>
      </main>
    </div> 