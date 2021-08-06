<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo @$meta_description ?>">
    <meta name="author" content="">
    <title ng-cloak><?php if(!$meta_title){echo Utils::siteName;}else{echo @$meta_title;} ?></title>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo @$meta_title; ?>"/>
    <meta property="og:image" content="<?php if(!@$img){$img2=base_url()."public/images/logo-dark.png";}else{$img2 = $img;} ?><?php echo @$img2; ?>"/>
    <meta property="og:url" content="<?php echo current_url(); ?>"/>
    <meta property="og:site_name" content="<?php echo Utils::siteName; ?>"/>
    <meta property="og:description" content="<?php echo @$meta_description; ?>"/>
    
    <meta property="twitter:title" content="<?php echo @$meta_title; ?>"/>
    <meta property="twitter:image" content="<?php if(!@$img){$img2="images/logo-dark.png";}else{$img2 = "upload/".$img;}echo base_url() ?><?php echo @$img2; ?>"/>
    <meta property="twitter:url" content="<?php echo current_url(); ?>"/>
    <meta property="twitter:card" content="summary"/>
    <meta property="twitter:description" content="<?php echo @$meta_description; ?>"/>

     <!-- Favicons -->
    <link type="image/x-icon" href="<?php echo base_url() ?>public/img/favicon.png" rel="shortcut icon">
    
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!--menu styleshet-->
    <link href="<?= base_url() ?>public/menu/style.css" rel="stylesheet">
    <!-- Stylesheets-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7CIBM+Plex+Sans:200,300,400,400i,600,700">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/fonts.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

    <script src="<?= base_url() ?>public/angular/angular.min.js"></script>
    <script src="<?= base_url() ?>public/angular/angular-toastr.tpls.js"></script>
    <script src="<?= base_url() ?>public/angular/PaystackFee.js"></script>
    <script src="<?= base_url() ?>public/angular/angular-toastr-angular-toastr.tpls.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>public/angular/angular-toastr.css" />
    <link rel="stylesheet" href="<?= base_url() ?>public/angular/angular-toastr-3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        .partners{
            margin:0 auto !important;
            width:100%;
            max-width:800px;
            min-height: 100px;
        }
        .partners .item{
            width:30%;
            float:left;
        }
        .partners img{
            width:100px;
        }
    </style>
