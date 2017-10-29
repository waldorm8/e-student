<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/main.css" />
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-pink.min.css">
        <link rel="manifest" href="site.webmanifest" />

    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <div id="container">
            <div id="login-box">
                <div class="left-box" >
                    <h2>e-student</h2>
                    <div class="student">
                    </div>
                    <h1>ZAPRASZAMY!</h1>
                </div>
                <div class="right-box">
                    <h3><span class="bt-login">LOGOWANIE</span> | <span class="bt-register">REKRUTACJA</span></h3>
                    <?php echo form_open('login/get_login'); ?>
                        <div class="f-login">
                            <div class="form-group">
                                <input name="login" type="text" class="form-control" id="login"  placeholder="Login lub Email">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" id="password"  placeholder="Hasło">
                                <img class="visibility" src="<?php echo base_url(); ?>assets/images/ic_visibility_white_24dp_1x.png" />
                            </div>
                            <button type="submit" id="loginin" class="btn btn-primary">Zaloguj</button>
                            <?php if(validation_errors()){
                                echo '<div class="alert alert-danger role="alert">'.validation_errors().'</div>';
                            }
                            ?>
                                <?php
                                if($this->session->flashdata('error')){
                                    echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                    echo $this->session->flashdata('error');
                                    echo "</div>";
                                }
                                ?>
                                <?php
                                if($this->session->flashdata('userExist')){
                                    echo "<div class=\"alert alert-danger\" role=\"alert\">";
                                    echo $this->session->flashdata('userExist');
                                    echo "</div>";
                                }
                                ?>
                                <?php
                                if($this->session->flashdata('registerSuccess')){
                                    echo "<div class=\"alert alert-success\" role=\"alert\">";
                                    echo $this->session->flashdata('registerSuccess');
                                    echo "</div>";
                                }
                                ?>
                        </div>
                    <?php echo form_close(); ?>
                    
                    <?php echo form_open('login/get_register'); ?>
                    <div class="f-register hidden">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" id="name"  placeholder="Imię">
                        </div>
                        <div class="form-group">
                            <input name="surname" type="text" class="form-control" id="surname"  placeholder="Nazwisko">
                        </div>
                         <div class="form-group">
                            <input name="registerLogin" type="text" class="form-control" id="reg-login"  placeholder="Login">
                        </div>
                        <div class="form-group">
                            <input name="registerPassword" type="password" class="form-control" id="reg-password" data-toggle="tooltip" data-placement="right" placeholder="Hasło">
                            <img class="visibility" src="<?php echo base_url(); ?>assets/images/ic_visibility_white_24dp_1x.png" />
                        </div>
                        <div class="form-group">
                            <input name=registerPasswordConfirmaton type="password" class="form-control" id="re-password"  placeholder="Powtórz Hasło">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" id="email"  placeholder="E-mail">
                        </div>
                        <button type="submit" id="registerup" class="btn btn-primary">Rejestruj</button>
                    </div>
                    <?php form_close(); ?>
                </div>
                <div class="clr"></div>
            </div>
        </div>

<div class="modal fail-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:red">Błąd</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="font-weight:bold">Wystapił błąd w formularzu. Proszę popraw formularz.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        <script src="<?php echo base_url(); ?>assets/js/forms.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/visibility.js"></script>
    </body>
</html>
