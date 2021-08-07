<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
  <?php if(!$meta_title){echo Utils::siteName;}else{echo @$meta_title;} ?>
  </title>
  <link rel="shortcut icon" href="<?php echo base_url() ?>public/img/favicon.png" type="image/x-icon">
  <?php $this->load->view('frontend/layout/css'); ?>
</head>

<body data-theme-mode-panel-active data-theme="light">
  <div class="site-wrapper overflow-hidden ">
    <div id="loading">
      <img src="<?= base_url() ?>public/image/preloader.gif" alt="">
    </div>
    <!-- Clean The Code And Hop in -->
    <!-- Header Area -->
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader-3.gif" alt="preloader">
   </div>
   </div>   -->

   <?php $this->load->view('frontend/layout/menu'); ?>