<?php $this->load->view('frontend/layout/header'); ?>
<!-- Hero Area -->
<div class="welcome-area welcome-area--l8 position-relative">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <!-- Welcome content Area -->
          <div class="col-xxl-6 col-lg-7 col-md-9 col-xs-11 order-2 order-lg-1">
            <div class="welcome-content welcome-content--l8">
              <h3 class="welcome-content--l8__sub-title text-bittersweet" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">We Are</h3>
              <h1 class="welcome-content--l8__title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Providing financial aid <br class="d-none d-xs-block d-lg-none d-xl-block">to Nigerian Students
                
              </h1>
              <p class="welcome-content--l8__descriptions" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">We help co-fund your tuition year after year till you graduate giving you
              <br class="d-none d-md-block"> a short-term soft loan to facilitate the prompt payment of your tuition
              <br class="d-none d-md-block"> fees per academic calendar 
                        </p>
              <div class="welcome-btn-group--l8">
                <a class="btn btn--lg-2 btn-bittersweet me-3 text-white rounded-50 me-3 popup-btn" href="https://www.youtube.com/watch?v=LWZ7iytIA6k" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true">Watch
                  Learn More</a>
                <a class="btn btn--lg-2 btn-niagara rounded-50 me-3 text-white" href="#" data-aos="fade-up" data-aos-duration="500" data-aos-delay="900" data-aos-once="true">Get
                  Started</a>
              </div>
            </div>
          </div>
          <!--/ .Welcome Content Area -->
          <!--/ .Welcome img Area -->
          <div class="col-xxl-6 col-lg-5 col-md-8 col-xs-10 order-1 order-lg-2">
            <div class="hero-img d-flex align-items-end">
              <div class="hero-l8-img-group d-flex align-items-end">
                <div class="hero-l8-img-group__1">
                  <img class="w-100" src="https://finestdevs.com/demos/fastland-html/image/home-7/hero-l8-1.png" alt="">
                </div>
                <div class="hero-l8-img-group__2">
                  <img class="w-100" src="https://finestdevs.com/demos/fastland-html/image/home-7/hero-l8-2.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <!--/ .Welcome img Area -->
        </div>
      </div>
    </div>
    <!--/ .Hero Area -->
        <?php $this->load->view('frontend/layout/services'); ?>
        <?php $this->load->view('frontend/layout/savings'); ?>
        <?php $this->load->view('frontend/layout/get_started'); ?>
    <!-- Content One Area -->
    <div class="content-section content-section--l8-2 bg-default-5 border-bottom boder-default-color">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <!-- about-us Content -->
          <div class="col-xxl-6 col-lg-7 col-md-9 col-xs-10 order-2 orde-lg-1">
            <div class="about-us-right mt-4 mt-lg-0">
              <div class="section-title section-title--l8">
                <h6 class="section-title__sub-heading  text-bittersweet" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">About Lupinus Group</h6>
                <h2 class="section-title__heading mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Present your app in a beautiful and elegant way.</h2>
                <p class="section-title__description" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">White iPhone Mockup Templates. A collection of three mockups showing<br class="d-none d-xl-block"> an iPhone on a dark leather seat. High resolution PSD files, each coming<br class="d-none d-xl-block"> with a smart object.</p>
              </div>
            </div>
            <div class="widgets widgets-content--l8" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
              <div class="row justify-content-center">
                <div class="col-lg-6 col-xs-6">
                  <div class="widget widget--content-l6">
                    <div class="widget--content-l6__circle bg-niagara shadow--niagara dark-mode-texts text-white">
                      <i class="far fa-envelope"></i>
                    </div>
                    <h4 class="widget--content-l6__title">Minimal Design</h4>
                    <p class="widget--content-l6__text">Generate Lorem Ipsum place holder<br class="d-none d-xl-block"> text for use in your Explore</p>
                  </div>
                </div>
                <div class="col-lg-6 col-xs-6">
                  <div class="widget widget--content-l6">
                    <div class="widget--content-l6__circle bg-niagara shadow--niagara dark-mode-texts text-white">
                      <i class="fa fa-layer-group"></i>
                    </div>
                    <h4 class="widget--content-l6__title">Best Material</h4>
                    <p class="widget--content-l6__text">Generate Lorem Ipsum place holder<br class="d-none d-xl-block"> text for use in your Explore</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/ .about-us Content -->
          <div class="col-xxl-6 col-lg-5 col-md-8 col-xs-10 order-1 order-lg-2">
            <div class="content-img mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
              <img class="w-100" src="https://finestdevs.com/demos/fastland-html/image/home-7/content-mobile-img.png" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
              <div class="shape">
                <img src="<?= base_url() ?>public/image/home-7/red-shape.png" alt="" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ .Content One Area -->
    <?php $this->load->view('frontend/layout/testimonial'); ?>
    <!-- promo Area -->
    <div class="promo-area promo-area--l8 bg-default">
      <div class="container">
        <div class="row justify-content-center justify-content-xl-end">
          <div class="col-xxl-6 col-xl-5 col-lg-5 col-md-7 col-xs-9">
            <div class="promo-image">
              <img class="w-100" src="https://finestdevs.com/demos/fastland-html/image/home-7/promo-l8-img.png" alt="">
            </div>
          </div>
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <div class="pormo--l8-content pormo--l8">
              <div class="section-title section-title--l8 text-center text-md-start">
                <h6 class="section-title__sub-heading">Join our community</h6>
                <h2 class="section-title__heading">Get latest app updates right at your inbox</h2>
              </div>
              <!-- Newsletter -->
              <div class="newsletter-form promo--l6-newsletter">
                <form action="/.">
                  <div class="d-flex align-items-center justify-content-center flex-column flex-xs-row">
                    <input class="form-control  border-0" type="email" placeholder="Enter your email" required>
                    <button class=" btn-niagara text-white btn btn--lg w-140 rounded-25 mr-3" type="submit">Subscribe</button>
                  </div>
                </form>
              </div>
              <!--/ .Newsletter -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var typed = new Typed('.highlight-text', {
        strings: ["Tertiary.", "Institutions."],
        typeSpeed: 80,
        backSpeed: 80,
        cursorChar: '',
        shuffle: true,
        smartBackspace: false,
        loop: true
      });
    </script>
    <!--/ .promo Area -->
    <?php $this->load->view('frontend/layout/cta'); ?>
    
    <?php $this->load->view('frontend/layout/footer'); ?>
