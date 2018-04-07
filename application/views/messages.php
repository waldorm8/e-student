
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="<?php echo site_url('dashboard'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Strona główna</a>
          <a class="mdl-navigation__link" href="<?php echo site_url('user_details'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment_ind</i>Dane studenta</a>
          <a class="mdl-navigation__link" href="<?php echo site_url('recruitment') ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">stars</i>Rekrutacja</a>
          <a style="background-color:rgb(64,196,255);" class="mdl-navigation__link" href="<?php echo site_url('messages'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Wiadomości</a>
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
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Od kogo?</th>
                          <th scope="col">Tytuł</th>
                          <th scope="col">Wiadomość</th>
                          <th scope="col">Data</th>
                          <th scope="col">Nawigacja</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i = 0;
                        foreach($data as $row){ ?>
                        <tr>
                          <td><?php echo $i=$i+1; ?></td>
                          <td id="<?php echo $row['st_login']; ?>" class="login"><?php echo $row['st_login']; ?></td>
                          <td class="title"><?php echo $row['mess_title']; ?></td>
                          <td id="<?php echo $row['mess_text']; ?>"><?php echo $row['mess_text']; ?></td>
                          <td><?php echo $row['mess_date']; ?></td>
                          <td>
                            <button type="button" id="replyButton" class="btn btn-primary" data-toggle="modal" data-target="#replyModal">
                              Odpowiedz
                            </button>
                            <button type="button" class="btn btn-danger">
                              Usuń
                            </button>
                          </td>
                        </tr>
                        <?php
                      }
                        ?>
                      </tbody>
                    </table>
                    <?php
                    //var_dump($this->session->flashdata('dump'));
                    if($this -> session -> flashdata('messSent') != NULL){
                        echo "<div class=\"alert alert-success\" role=\"alert\">";
                        echo $this->session->flashdata('messSent');
                        echo "</div>";
                    }
                    elseif($this -> session -> flashdata('messNotSent')){
                        echo "<div class=\"alert alert-success\" role=\"alert\">";
                        echo $this->session->flashdata('messNotSent');
                        echo "</div>";
                    }
                    ?>
                </div>
              </div>

      </main>
    </div>
<a data-toggle="modal" data-target="#messageModal" href="" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Nowa wiadomość</a>

    <!-- Modal NOWA WIADOMOSC -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Nowa wiadomość</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php echo form_open('messages/send_message'); ?>
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Do kogo?</label>
                <input type="text" class="form-control" name="toWho" placeholder="Login">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tytuł</label>
                <input type="text" class="form-control" name="titleMessage" aria-describedby="emailHelp" placeholder="Tytuł">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Treść wiadomości</label>
                <textarea name="textMessage" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
              <button type="submit" class="btn btn-primary">Wyślij</button>
            </div>
          <?php echo form_close(); ?>
    </div>
  </div>
</div>
<!-- Modal ODPOWIEDZ -->
<div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Odpowiedź</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php echo form_open(); ?>
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Do kogo?</label>
                <input name="toWho" disabled type="text" class="form-control" id="replyTo" aria-describedby="emailHelp" placeholder="Login">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tytuł</label>
                <input name="titleMessage" disabled type="text" class="form-control" id="replyTitle" aria-describedby="emailHelp" placeholder="Tytuł">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Treść wiadomości</label>
                <textarea name="textMessage" class="form-control" id="replyText" rows="3"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
              <button type="submit" class="btn btn-primary">Wyślij</button>
            </div>
          <?php echo form_close(); ?>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $('#replyButton').on('click', function(){
    var login = $('.login').attr('id');
    var title = $('.title').html();
    console.log(title);
    $('#replyTo').attr('value', login);
    $('#replyTitle').attr('value', title);
  });
});
</script>
