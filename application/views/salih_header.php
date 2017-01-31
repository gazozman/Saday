<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
  <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>SAlihin Google Tasarımı</title>
         <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="<?php echo base_url(); ?>" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                                <li><a href="<?php echo base_url("salih"); ?>">Anasayfa</a></li>
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
                <li><a href="<?php echo base_url("salih/veriekle"); ?>">Veri Ekle</a></li>
                <li><a href="<?php echo base_url("user/logout"); ?>">Çıkış Yap</a></li>
                <?php } else {?>
                    <li><a href="<?php echo base_url("user/login"); ?>">Login</a></li>
                    <li><a href="<?php echo base_url("user/register"); ?>">Register</a></li>
                <?php } ?>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#">Start Travel Ad</a></li>
                </ul>
                 <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>