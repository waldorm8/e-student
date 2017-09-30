<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>formularz</h1>

        <?php

        $data = array(
            'name' => 'imie',
            'placeholder' => 'Imię'
        );
            echo validation_errors();
            echo form_open();
            echo form_input($data);
            echo form_input('email', 'E-mail');
            echo form_submit('submit', 'Wyślij');
            echo form_close();
         ?>
    </body>
</html>
