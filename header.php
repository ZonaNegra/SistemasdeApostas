<?php

    include("config.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de Apostas</title>
    <link href="<?php echo INCLUDE_PATH;?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="<?php echo INCLUDE_PATH;?>vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo INCLUDE_PATH;?>css/style.css" />
    <link rel="stylesheet" type="text/js" media="screen" href="<?php echo INCLUDE_PATH;?>js/javascript.js" />
    <script src="main.js"></script>
</head>
<body>

    <navbar class='my-navbar'>
        <section>
            <label class='brand'>LOGO/NOME</label>
            <ul class='menu-navbar'>
                <a href='<?php echo INCLUDE_PATH;?>home'><li>HOME</li></a>
                <a href='<?php echo INCLUDE_PATH;?>sobre'><li>SOBRE</li></a>
                <a href='<?php echo INCLUDE_PATH;?>contato'><li>CONTATO</li></a>
                <a href='<?php echo INCLUDE_PATH;?>login'><li>ENTRAR</li></a>
            </ul>
        </section>
    </navbar>