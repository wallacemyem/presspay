<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Wallace">
  <meta name="description" content="<?php echo @$meta_description ?>">
    
  <title>
  <?php if(!$meta_title){echo Utils::siteName;}else{echo @$meta_title;} ?>
  </title>
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
  <link rel="shortcut icon" href="<?php echo base_url() ?>public/img/favicon.png" type="image/x-icon">
  <?php $this->load->view('frontend/layout/css'); ?>
</head>

<body data-theme-mode-panel-active data-theme="light">
  <div class="site-wrapper overflow-hidden ">
    <div id="loading">
    <img src="<?php echo base_url() ?>public/images/logo-dark.png" alt="" srcset="<?php echo base_url() ?>public/images/logo-dark.png 800w"/>
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