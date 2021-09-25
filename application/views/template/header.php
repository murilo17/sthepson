<!doctype html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/style.css') ?>">
    <!-- CSS Fontes -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Sthepson - Assessoria em Recursos Humanos</title>

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php echo base_url('public/assets/imagens/favicons/apple-icon-57x57.png') ?>">
    <link rel="apple-touch-icon" sizes="60x60"
          href="<?php echo base_url('public/assets/imagens/favicons/apple-icon-60x60.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php echo base_url('public/assets/imagens/favicons/apple-icon-72x72.png') ?>">
    <link rel="apple-touch-icon" sizes="76x76"
          href="<?php echo base_url('public/assets/imagens/favicons/apple-icon-76x76.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php echo base_url('public/assets/imagens/favicons/apple-icon-114x114.png') ?>">
    <link rel="apple-touch-icon" sizes="120x120"
          href="<?php echo base_url('public/assets/imagens/favicons/apple-icon-120x120.png') ?>">
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php echo base_url('public/assets/assets/imagens/favicons/apple-icon-144x144.png') ?>">
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?php echo base_url('public/assets/imagens/favicons/apple-icon-152x152.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo base_url('public/assets/imagens/favicons/apple-icon-180x180.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<?php echo base_url('public/assets/imagens/favicons/android-icon-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo base_url('public/assets/imagens/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="96x96"
          href="<?php echo base_url('public/assets/imagens/favicons/favicon-96x96.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo base_url('public/assets/imagens/favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php echo base_url('public/assets/imagens/favicons/manifest.json') ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
          content="<?php echo base_url('public/assets/imagens/favicons/ms-icon-144x144.png') ?>">
    <meta name="theme-color" content="#ffffff">
    <?php
    if (isset($styles)) {

        foreach ($styles as $style_name) {
            $href = base_url() . "public/assets/css/" . $style_name;
            ?>
            <link rel="stylesheet" href="<?= $href ?>">
        <?php }
    } ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</head>
<body>
