
<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
  <a  class="mdl-navigation__link" href="<?php echo site_url('admin'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Panel Administratora</a>
  <a class="mdl-navigation__link" href="<?php echo site_url('show_conclusions'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">stars</i>Lista wniosków na studia</a>
  <a class="mdl-navigation__link" href="<?php echo site_url('recruitment_settings'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">domain</i>Ustawienia rekrutacji</a>
  <a style="background-color:rgb(64,196,255);" class="mdl-navigation__link" href="<?php echo site_url('messages'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Wyślij wiadomość do student</a>
  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>Dodaj kierunuki</a>
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
                        <tr class="<?php echo $row['st_login'].$row['mess_id'] ?>">
                          <td><?php echo $i=$i+1; ?></td>
                          <td id="<?php echo $row['st_login']; ?>" class="login"><?php echo $row['st_login']; ?></td>
                          <td class="title"><?php echo $row['mess_title']; ?></td>
                          <td id="<?php echo $row['mess_text']; ?>"><?php echo $row['mess_text']; ?></td>
                          <td><?php echo $row['mess_date']; ?></td>
                          <td>
                            <button type="button" id="<?php echo $row['st_login'].$row['mess_id'] ?>" class="btn btn-primary replyButton ?>" data-toggle="modal" data-target="#replyModal">
                              Odpowiedz
                            </button>
                            <a href="<?php echo site_url("messages/delete_message").'/'.$row['mess_id']; ?>">
                              <button type="button" class="btn btn-danger">
                                Usuń
                              </button>
                            </a>
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
                        echo "<div class=\"alert alert-warning\" role=\"alert\">";
                        echo $this->session->flashdata('messNotSent');
                        echo "</div>";
                    }
                    elseif($this->session->flashdata('successDel')){
                        echo "<div class=\"alert alert-success\" role=\"alert\">";
                        echo $this->session->flashdata('successDel');
                        echo "</div>";
                    }
                    elseif($this->session->flashdata('errDel')){
                        echo "<div class=\"alert alert-warning\" role=\"alert\">";
                        echo $this->session->flashdata('errDel');
                        echo "</div>";
                    }
                    ?>
                    <?php if(validation_errors()){
                        echo '<div class="alert alert-danger role="alert">'.validation_errors().'</div>';
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
                <input required type="text" class="form-control" name="toWho" placeholder="Login">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tytuł</label>
                <input required type="text" class="form-control" name="titleMessage" aria-describedby="emailHelp" placeholder="Tytuł">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Treść wiadomości</label>
                <textarea required name="textMessage" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Wyślij</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
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
          <?php echo form_open('messages/send_message'); ?>
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Do kogo?</label>
                <input name="toWho" READONLY type="text" class="form-control replyTo" value="" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tytuł</label>
                <input name="titleMessage" READONLY type="text" class="form-control replyTitle" value="" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Treść wiadomości</label>
                <textarea name="textMessage" class="form-control" id="replyText" rows="3"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Wyślij</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
            </div>
          <?php echo form_close(); ?>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $('.replyButton').on('click', function(){
    var idPrzycisku = $(this).attr('id');
    var login = $('tr[class='+idPrzycisku+']  td[class=login]').html();
    var title = $('tr[class='+idPrzycisku+']  td[class=title]').html();

    $('.replyTo').attr('value', login);
    $('.replyTitle').attr('value', title);
  });
});
</script>
