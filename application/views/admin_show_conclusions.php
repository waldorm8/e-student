
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="<?php echo site_url('admin'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Panel Administratora</a>
          <a style="background-color:rgb(64,196,255);" class="mdl-navigation__link" href="<?php echo site_url('show_conslusion'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">stars</i>Lista wniosków na studia</a>
          <a class="mdl-navigation__link" href="<?php echo site_url('recruitment_settings'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">domain</i>Ustawienia rekrutacji</a>
          <a class="mdl-navigation__link" href="<?php echo site_url('messages'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Wyślij wiadomość do student</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>Dodaj kierunuki</a>
          <div class="mdl-layout-spacer"></div>
          <!--<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>-->
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">

                <div class="mdl-grid demo-content">
                  <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid content">
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
                            <td><?php echo $row['st_id']; ?></td>
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
                            <td>Przyjmij, Skasuj, Edytuj</td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
      </main>
    </div>
