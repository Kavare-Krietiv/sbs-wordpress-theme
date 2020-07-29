<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SBS Radio | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/f608a668e4.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,600;1,300&display=swap"
          rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <style>
        .main-content {
            display: none;
        }

        #spinner-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 999999;
        }
    </style>
</head>
<body>

<div class="row" id="spinner-wrapper">
    <div class="offset-6 my-auto">
        <div class="spinner-grow text-danger">
            <img src="<?php echo get_template_directory_uri();?>/assests/SBS_Logo_Coloured.png" class="img-fluid">
        </div>
    </div>
</div>

<div class="main-content">
    <nav class="navbar navbar-expand-lg navbar-light navigation">
        <a class="navbar-brand" href="#">
            <img src="<?php echo get_template_directory_uri();?>/assests/SBS_Logo_Coloured.png" width="70" height="70" alt="logo" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

<!--        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
            <?php
            wp_nav_menu([
                'menu'            => 'top',
                'theme_location'  => 'top-menu',
                'container'       => 'div',
                'container_id'    => 'bs4navbar',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav mr-auto',
                'depth'           => 0,
                'fallback_cb'     => 'bs4navwalker::fallback',
                'walker'          => new bs4navwalker()
            ]);
            ?>

            <form>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <button class="btn btn-sm btn-danger" style="font-weight: bold">Listen Live</button>
                    </div>
                    <input type="text" class="form-control">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-search" style="color: #E41321"></i></span>
                    </div>
                </div>
            </form>

<!--        </div>-->
    </nav>

