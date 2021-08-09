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
                <a class="btn btn--lg-2 btn-bittersweet me-3 text-white rounded-50 me-3 popup-btn" href="<?php base_url(); ?>about" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true">
                  Learn More</a>
                <a class="btn btn--lg-2 btn-niagara rounded-50 me-3 text-white" href="<?php base_url(); ?>sign-up" data-aos="fade-up" data-aos-duration="500" data-aos-delay="900" data-aos-once="true">Get
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
                  <img class="w-100" src="public/image/home-7/hero-l8-1.png" alt="">
                </div>
                <div class="hero-l8-img-group__2">
                  <img class="w-100" src="public/image/home-7/hero-l8-2.png" alt="">
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
        <?php $this->load->view('frontend/layout/different'); ?>
        <?php $this->load->view('frontend/layout/savings'); ?>
        <?php $this->load->view('frontend/layout/get_started'); ?>    
        <?php $this->load->view('frontend/layout/testimonial'); ?>
    <!-- promo Area -->
    <div class="promo-area promo-area--l8 bg-default">
      <div class="container">
        <div class="row justify-content-center justify-content-xl-end">
          <div class="col-xxl-6 col-xl-5 col-lg-5 col-md-7 col-xs-9">
            <div class="promo-image">
              <img class="w-100" src="public/image/home-7/promo-l8-img.png" alt="">
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
