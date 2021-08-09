<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    404
  </title>
  <link rel="shortcut icon" href="./image/png/favicon.png" type="image/x-icon">
  <?php $this->load->view('frontend/layout/css'); ?>
</head>

<body data-theme-mode-panel-active data-theme="light">
  <div class="site-wrapper overflow-hidden ">
    <div id="loading">
      <img src="./image/preloader.gif" alt="">
    </div>
    <!-- Clean The Code And Hop in -->
    <!-- Header Area -->
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader-3.gif" alt="preloader">
   </div>
   </div>   -->
   <?php $this->load->view('frontend/layout/menu') ?>
    
    <div class="error-page bg-default-3 border-bottom border-default-color-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-7 col-md-8 col-xs-10">
            <div class="error-page__image text-center">
              <img class="w-100" src="./image/png/404.png" alt="">
            </div>
            <div class="error-page__content text-center">
              <h1 class="error-page__code">404</h1>
              <h2 class="error-page__heading">Page not found</h2>
              <p class="error-page__text">The page you are looking for is not available or<br class="d-none d-xs-block"> doesn’t belong to this website!</p>
            </div>
            <div class="buttons mx-auto text-center">
              <a class="btn btn-readical-red shadow--torch-red-2  btn--medium-2 text-white rounded-50 m-2" href="<?php base_url() ?>">Go Home</a>
              <a class="btn btn-outline-readical-red btn--medium-3 rounded-50 m-2" href="<?php base_url() ?>contact">Contact us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   <?php $this->load->view('frontend/layout/cta') ?>
   <?php $this->load->view('frontend/layout/footer') ?>