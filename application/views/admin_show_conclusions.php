
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="<?php echo site_url('admin'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Panel Administratora</a>
          <a style="background-color:rgb(64,196,255);" class="mdl-navigation__link" href="<?php echo site_url('show_conslusion'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">stars</i>Lista wniosków na studia</a>
          <a class="mdl-navigation__link" href="<?php echo site_url('messages'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Wyślij wiadomość do studenta</a>
          <a class="mdl-navigation__link" href="<?php echo site_url('catalog/add_ways'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>Dodaj kierunki</a>
          <a class="mdl-navigation__link" href="<?php echo site_url('catalog/just_speciality'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>Dodaj specjalizacje</a>
          <div class="mdl-layout-spacer"></div>
          <!--<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>-->
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">

                <div class="mdl-grid demo-content">
                  <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid content">
                    <?php
                      if($this -> session ->flashdata('deletedConc') != NULL){
                        echo "<div class=\"alert alert-success\" role=\"alert\">";
                        echo $this->session->flashdata('deletedConc');
                        echo "</div>";
                      }
                      elseif($this -> session ->flashdata('deleteError') != NULL){
                        echo "<div class=\"alert alert-warning\" role=\"alert\">";
                        echo $this->session->flashdata('deleteError');
                        echo "</div>";
                      }
                      elseif($this -> session ->flashdata('editSucc') != NULL){
                        echo "<div class=\"alert alert-success\" role=\"alert\">";
                        echo $this->session->flashdata('editSucc');
                        echo "</div>";
                      }
                      elseif($this -> session ->flashdata('editErr') != NULL){
                        echo "<div class=\"alert alert-warning\" role=\"alert\">";
                        echo $this->session->flashdata('editErr');
                        echo "</div>";
                      }
                     ?>
                    <div class="mdl-card__supporting-text text">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id</th>
                            <th scope="col">Imie i nazwisko</th>
                            <th scope="col">Kierunek</th>
                            <th scope="col">Średnia ocen</th>
                            <th scope="col">Punkty</th>
                            <th scope="col">Data złożenia</th>
                            <th scope="col">Stan</th>
                            <th scope="col">Nawigacja</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 0;
                          foreach($data as $row){?>
                          <tr>
                            <th><?php echo $i =$i+1; ?></th>
                            <td><?php echo $row['id_rc']; ?></td>
                            <td><?php echo $row['st_name']." ".$row['st_surname']; ?></td>
                            <td><?php echo $row['sw_name']; ?></td>
                            <td><?php echo $row['rc_average_degree']; ?></td>
                            <td><?php echo $row['rc_points']; ?></td>
                            <td><?php echo $row['rc_date']; ?></td>
                            <?php
                              if($row['rc_flag'] == "o"):
                                echo "<td class=\"alert alert-warning\">
                                      <a href=".site_url(array('show_conclusions','change_flag', $row['id_rc'])).">
                                        Oczekiwanie
                                      </a>
                                      </td>";
                              elseif($row['rc_flag'] == "p"):
                                echo "<td class=\"alert alert-success\">
                                      <a href=".site_url(array('show_conclusions','change_flag', $row['id_rc'])).">
                                        Przyjęty
                                      </a>
                                      </td>";
                              endif;
                            ?>
                            <td><a href="<?php echo site_url('show_conclusions/delete_conclussion/'); ?><?php echo $row['id_rc']; ?>">Skasuj</a> <span style="cursor:pointer;" id="<?php echo $row['id_rc']; ?>" class="edit">Edytuj</span></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="mdl-grid demo-content edit-form">
                  <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid content">
                <?php echo form_open('show_conclusions/edit_conclusion'); ?>
                <div class="form-group">
                  <h3>Edycja</h3>
                  <label for="">Ocena z języka polskiego</label>
                  <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="polish_degree" class="form-control">
                  <label for="">Ocena z matematyki</label>
                  <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="math_degree" class="form-control">
                  <label for="">Ocena z języka angielskiego</label>
                  <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="english_degree" class="form-control">
                  <label for="">Ocena z przedmiotu dodatkowego(zależnie od kierunku   )</label>
                  <input required type="text" placeholder="zakres: 2-6" pattern="[2-6]{1}" name="add_degree" class="form-control">
                  <label for="">Średnia ocen</label>
                  <input required type="text" name="average_degree" class="form-control">
                  <label for="study_way">Ocena z zachowania</label>
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
                  <div class="form-check">
                  </div>
                  <button type="submit" name="zapisz" class="btn btn-primary btn-lg btn-block">Zapisz</button>
                </div>
                <?php echo form_close(); ?>
              </div>
            </div>
      </main>
    </div>
    <script src="assets/js/edit.js"></script>
