<?php $this->load->view('front/sub/header') ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <style>
      .brands {
          width: 100%;
          padding-top: 10px;
          padding-bottom: 20px
      }

      .brands_slider_container {
          height: 130px;
          border: solid 1px #fff;
          padding-left: 97px;
          padding-right: 97px;
          background: #fff;
      }

      .brands_slider {
          height: 100%;
          margin-top: 0px;
      }

      .brands_item {
          height: 100%;
          background:#f8f8f8;
          border-radius:5px;
      }

      .brands_item img {
          max-width: 100%
      }

      .brands_nav {
          position: absolute;
          top: 50%;
          -webkit-transform: translateY(-50%);
          -moz-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          transform: translateY(-50%);
          padding: 5px;
          cursor: pointer
      }

      .brands_nav i {
          color: #e5e5e5;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .brands_nav:hover i {
          color: #676767
      }

      .brands_prev {
          left: 40px
      }

      .brands_next {
          right: 40px
      }
  </style>
</head>


  </head>
  <body onload="addClass()">
    <div class="ie-panel">
      
    </div>
    <div class="page">
      <!-- Page Header-->
      <?php $this->load->view('front/sub/menu') ?>
      <!-- Overlapping Screen-->
      <section class="section section-overlap bg-decorate bg-banner">
        <div class="section-overlap-content">
          <div class="container pt-0">
              <div class="row">
                <div class="col-md-7 col-lg-7 col-xl-7">
                  <h1 class="wow-outer">
                    <span class="font-weight-bold wow-outer">
                      <span class="wow slideInUp" data-wow-delay="1.5s">Providing financial aid to Nigerian Students in Tertiary institutions.</span>
                    </span>
                    <p class="font-weight-exlight-p wow-outer" >
                      <span class="wow slideInUp" data-wow-delay="1.1s">
                        We help co-fund your tuition year after year till you graduate giving you a short-term <br> soft loan to facilitate the prompt payment of your tuition fees per academic calendar
                      </span>
                    </p>
                  </h1>
                  <div class="mt-5">
                    <div class="left-50 btn-left1">
                      <div class="wow-outer"><a class="button button-md button-primary-light button-winona wow slideInLeft" href="<?= base_url() ?>about" data-wow-delay="1.5s">Learn More</a></div>
                    </div>
                    <div class="left-50">
                      <div class="wow-outer"><a class="button button-md button-primary button-winona wow slideInRight" href="#" data-wow-delay="1.3s">Apply Now</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-lg-5 col-xl-5 col-offset-1 banner-img wow fadeInRight" data-wow-delay="1.3s">
                  <div class="banner-img-item"> 
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default why-us">
        <div class="left-dot wow slideInRight" data-wow-delay="2.5s"></div>
        <div class="right-dot wow slideInLeft" data-wow-delay="1.5s"></div>
        <div class="container">
          <div class="row row-50">
            <div class="col-12 text-center">
              <h3 class="section-title wow-outer"><span class="wow slideInUp">Why PressPayNG?</span></h3>
            </div>
            <div class="col-12 isotope-wrap bullet-wrap" id="home-container">
            <?php $var = 0; foreach($whyArr as $why):$var++; ?>
              <div id="hm<?=$var?>" class="card card-item <?= $var==1?'active':''?> wow fadeInUborder-red" data-wow-delay="1.5s">
                <img src="<?= base_url() ?>public/images/<?= $why->icon ?>" class="icon"/>
                <h4 class="card-title"><?= $why->sub_name ?></h4>
                <p class="wrap-p"><?= $why->value ?></p>
              </div>
            <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg text-center bg-gray-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 section-img text-right pr-5 left-other-dot">
              <img src="<?= base_url() ?>public/images/student_phone.png" class="wow slideInUp" data-wow-delay="0.5s">
            </div>
            <div class="col-md-6 col-lg-5 col-xl-5 text-left">
              <button class="cta-header">We Pay, You Pay</button>
              <h3 class="section-title smaller-title wow-outer text-left"><span class="wow slideInUp">Commence a Savings Plan for your tuition today</span></h3>
              <p class="wow-outer text-left pt-0 mt-3"><span class="text-width-1 wow slideInDown">
                Take the pressure of school fees off you. Take advantage of our <span class="impo">flexible savings plan</span> plus <span class="impo">Student loan</span> - for students in tertiary institutions in Nigeria.
              </span></p>
              <div class="wow-outer text-left mt-4">
                <a class="button button-md button-primary button-winona wow slideInUp" href="<?= base_url() ?>about" data-wow-delay=".3s">Learn More</a>
              </div>
            </div>
          </div>
         
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 justify-content-lg-between offset-top-1">
          </div>
          <div class="row">
            <div class="col-md-5 col-lg-5 col-xl-5 text-left">
              <h3 class="section-title smaller-title wow-outer text-left"><span class="wow slideInUp">With PressPay.NG</span></h3>
              <h6 class="section-title smaller-title sub-heading wow-outer text-left mt-0"><span class="wow slideInUp">Every Nigerian can become a graduate. Let us co-fund your tuition.</span></h6>
              <p class="wow-outer text-left pt-0 mt-3"><span class="text-width-1 wow slideInDown">
                Access up to 50% of your tuition as student loan from us and contribute the other 50% with our flexible savings plans. Together, we take responsibility for your future.
              </span></p>
              <div class="wow-outer text-left mt-4">
                <a class="button button-md button-primary-light button-winona wow slideInUp" href="<?= Utils::appUrl ?>signup" data-wow-delay=".3s">Sign Up</a>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 section-img section-img-2 text-right pr-5 wow slideInRight" data-wow-delay="1.3s">
              <img src="<?= base_url() ?>public/images/50.svg">
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg text-center bg-gray-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 section-img text-right pr-5 right-other-dot wow fadeInRight" data-wow-delay="1.0s">
              <img src="<?= base_url() ?>public/images/manphone.png" class="wow slideInLeft" data-wow-delay="2.5s">
            </div>
            <div class="col-md-5 col-lg-5 col-xl-5 text-left">
              <button class="cta-header">We've got you covered</button>
              <h3 class="section-title smaller-title wow-outer text-left"><span class="wow slideInUp">What makes us different</span></h3>
              <p class="wow-outer text-left pt-0 mt-3"><span class="text-width-1 wow slideInDown">
                PressPayNg offers you the <span class="impo">credibility</span> you need to solicit support for your tuition/school fees. <br><br>
                Now, everyone can contribute credibly to your tuition fee – <span class="impo">NO SCAM</span>, NO “Send me your School ID Card”. Just copy your tuition payment link and share with everyone, then watch your dream come true.
              </span></p>
              <div class="wow-outer text-left mt-4">
                <a class="button button-md button-primary button-winona wow slideInUp" href="<?= Utils::appUrl ?>signup" data-wow-delay=".3s">I want to join!</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg text-center bg-default">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-8 text-right pr-5 pb-5">
              <h3 class="section-title smaller-title wow-outer text-left"><span class="wow slideInUp">How to get started</span></h3>
              <br>
              <div class="number-wrap">
                <div class="number-item" data-wow-delay="0.5s">
                  <div class="number">1</div>
                  <div class="number-text">Download app or start application here</div>
                  <div class="spacer" style="clear: both;"></div>
                </div>
                <div class="number-item" data-wow-delay="1.5s">
                  <div class="number">2</div>
                  <div class="number-text mt-1">Register on the app</div>
                  <div class="spacer" style="clear: both;"></div>
                </div>
                <div class="number-item" data-wow-delay="2.0s">
                  <div class="number">3</div>
                  <div class="number-text">We carry out KYC and verify your application information</div>
                  <div class="spacer" style="clear: both;"></div>
                </div>
                <div class="number-item" data-wow-delay="2.5s">
                  <div class="number">4</div>
                  <div class="number-text mt-1">We credit you 50% for your tuition</div>
                  <div class="spacer" style="clear: both;"></div>
                </div>
              </div>
              <div class="container">
                <div class="row text-left stores">
                  <div class="left-50">
                    <img src="<?= base_url() ?>public/update/store.png" class="wow fadeInRight" data-wow-delay="0.5s"/>
                  </div>
                  <div class="left-50">
                    <img src="<?= base_url() ?>public/update/play.png" class="p-0 wow fadeInLeft" data-wow-delay="1.5s"/>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 pl-0 play pt-0 wow fadeInLeft" data-wow-delay="2.5s">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-xl-3 text-left mobile-phone mb-3"></div>
            <!-- <div class="col-md-12 col-lg-8 col-xl-5 text-right">
            <h3 class="section-title smaller-title wow-outer text-left"><span class="wow slideInUp">What's Next?</span></h3>
              <div class="number-wrap number-wrap-2 mt-4 text-right">
                <div class="number-item" data-wow-delay="0.5s">
                  <div class="number">
                    <svg class="Path_37842" viewBox="177.97 273.636 19.678 14.478"><path id="Path_37842" d="M 186.5176391601562 288.1143188476562 C 185.9148254394531 288.1143188476562 185.3332824707031 287.8836669921875 184.8937072753906 287.4674072265625 L 178.70849609375 281.6122436523438 C 177.7610626220703 280.7153930664062 177.7200927734375 279.22021484375 178.6169281005859 278.2727661132812 C 179.5137634277344 277.3253784179688 181.0087280273438 277.2841796875 181.9563903808594 278.1812133789062 L 186.3814849853516 282.3700561523438 L 193.5289001464844 274.41943359375 C 194.4010925292969 273.4491271972656 195.8946990966797 273.369873046875 196.8650207519531 274.2418518066406 C 197.8350830078125 275.1140441894531 197.9145660400391 276.607666015625 197.0423583984375 277.5779418945312 L 188.2743835449219 287.3312377929688 C 187.8484802246094 287.8048400878906 187.2494354248047 288.0865478515625 186.6128234863281 288.1123046875 C 186.5810241699219 288.1136474609375 186.5492248535156 288.1143188476562 186.5176391601562 288.1143188476562 Z M 186.5176391601562 288.1143188476562"></path></svg>
                  </div>
                  <div class="number-text">You commence a savings plan for the other 50% of your tuition</div>
                  <div class="spacer" style="clear: both;"></div>
                </div>
                <div class="number-item" data-wow-delay="1.5s">
                  <div class="number">
                    <svg class="Path_37842" viewBox="177.97 273.636 19.678 14.478"><path id="Path_37842" d="M 186.5176391601562 288.1143188476562 C 185.9148254394531 288.1143188476562 185.3332824707031 287.8836669921875 184.8937072753906 287.4674072265625 L 178.70849609375 281.6122436523438 C 177.7610626220703 280.7153930664062 177.7200927734375 279.22021484375 178.6169281005859 278.2727661132812 C 179.5137634277344 277.3253784179688 181.0087280273438 277.2841796875 181.9563903808594 278.1812133789062 L 186.3814849853516 282.3700561523438 L 193.5289001464844 274.41943359375 C 194.4010925292969 273.4491271972656 195.8946990966797 273.369873046875 196.8650207519531 274.2418518066406 C 197.8350830078125 275.1140441894531 197.9145660400391 276.607666015625 197.0423583984375 277.5779418945312 L 188.2743835449219 287.3312377929688 C 187.8484802246094 287.8048400878906 187.2494354248047 288.0865478515625 186.6128234863281 288.1123046875 C 186.5810241699219 288.1136474609375 186.5492248535156 288.1143188476562 186.5176391601562 288.1143188476562 Z M 186.5176391601562 288.1143188476562"></path></svg>
                  </div>
                  <div class="number-text">We aggregate our 50% and your 50% at the end of your savings plan</div>
                  <div class="spacer" style="clear: both;"></div>
                </div>
                <div class="number-item" data-wow-delay="2.5s">
                  <div class="number">
                    <svg class="Path_37842" viewBox="177.97 273.636 19.678 14.478"><path id="Path_37842" d="M 186.5176391601562 288.1143188476562 C 185.9148254394531 288.1143188476562 185.3332824707031 287.8836669921875 184.8937072753906 287.4674072265625 L 178.70849609375 281.6122436523438 C 177.7610626220703 280.7153930664062 177.7200927734375 279.22021484375 178.6169281005859 278.2727661132812 C 179.5137634277344 277.3253784179688 181.0087280273438 277.2841796875 181.9563903808594 278.1812133789062 L 186.3814849853516 282.3700561523438 L 193.5289001464844 274.41943359375 C 194.4010925292969 273.4491271972656 195.8946990966797 273.369873046875 196.8650207519531 274.2418518066406 C 197.8350830078125 275.1140441894531 197.9145660400391 276.607666015625 197.0423583984375 277.5779418945312 L 188.2743835449219 287.3312377929688 C 187.8484802246094 287.8048400878906 187.2494354248047 288.0865478515625 186.6128234863281 288.1123046875 C 186.5810241699219 288.1136474609375 186.5492248535156 288.1143188476562 186.5176391601562 288.1143188476562 Z M 186.5176391601562 288.1143188476562"></path></svg>
                  </div>
                  <div class="number-text mt-1">We credit your school directly with the tuition</div>
                  <div class="spacer" style="clear: both;"></div>
                </div>
                <div class="number-item" data-wow-delay="3.0s">
                  <div class="number">
                    <svg class="Path_37842" viewBox="177.97 273.636 19.678 14.478"><path id="Path_37842" d="M 186.5176391601562 288.1143188476562 C 185.9148254394531 288.1143188476562 185.3332824707031 287.8836669921875 184.8937072753906 287.4674072265625 L 178.70849609375 281.6122436523438 C 177.7610626220703 280.7153930664062 177.7200927734375 279.22021484375 178.6169281005859 278.2727661132812 C 179.5137634277344 277.3253784179688 181.0087280273438 277.2841796875 181.9563903808594 278.1812133789062 L 186.3814849853516 282.3700561523438 L 193.5289001464844 274.41943359375 C 194.4010925292969 273.4491271972656 195.8946990966797 273.369873046875 196.8650207519531 274.2418518066406 C 197.8350830078125 275.1140441894531 197.9145660400391 276.607666015625 197.0423583984375 277.5779418945312 L 188.2743835449219 287.3312377929688 C 187.8484802246094 287.8048400878906 187.2494354248047 288.0865478515625 186.6128234863281 288.1123046875 C 186.5810241699219 288.1136474609375 186.5492248535156 288.1143188476562 186.5176391601562 288.1143188476562 Z M 186.5176391601562 288.1143188476562"></path></svg>
                  </div>
                  <div class="number-text">You commence a 3-month repayment plan for the 50% student loan (plus interest) from us</div>
                  <div class="spacer" style="clear: both;"></div>
                </div>
                <div class="number-item" data-wow-delay="4.5s">
                  <div class="number">
                    <svg class="Path_37842" viewBox="177.97 273.636 19.678 14.478"><path id="Path_37842" d="M 186.5176391601562 288.1143188476562 C 185.9148254394531 288.1143188476562 185.3332824707031 287.8836669921875 184.8937072753906 287.4674072265625 L 178.70849609375 281.6122436523438 C 177.7610626220703 280.7153930664062 177.7200927734375 279.22021484375 178.6169281005859 278.2727661132812 C 179.5137634277344 277.3253784179688 181.0087280273438 277.2841796875 181.9563903808594 278.1812133789062 L 186.3814849853516 282.3700561523438 L 193.5289001464844 274.41943359375 C 194.4010925292969 273.4491271972656 195.8946990966797 273.369873046875 196.8650207519531 274.2418518066406 C 197.8350830078125 275.1140441894531 197.9145660400391 276.607666015625 197.0423583984375 277.5779418945312 L 188.2743835449219 287.3312377929688 C 187.8484802246094 287.8048400878906 187.2494354248047 288.0865478515625 186.6128234863281 288.1123046875 C 186.5810241699219 288.1136474609375 186.5492248535156 288.1143188476562 186.5176391601562 288.1143188476562 Z M 186.5176391601562 288.1143188476562"></path></svg>
                  </div>
                  <div class="number-text">With good credit score, you can access this co-funding plan every academic year</div>
                  <div class="spacer" style="clear: both;"></div>
                </div>
              </div>
            </div> -->
            <div class="col-lg-12 col-xl-12 section-img text-center">
              <div class="wow-outer"><a class="button button-md button-primary button-winona wow slideInUp" href="<?= Utils::appUrl ?>signup" data-wow-delay="2.3s">Start Now</a></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg text-center bg-gray-100">
        <div class="container">
          <h3 class="section-title">Our Success Story</h3>
          <div class="slick-widget-testimonials wow fadeIn">
            <div class="slick-slider carousel-child" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-sm-items="3" data-md-items="5" data-lg-items="5" data-xl-items="5" data-center-mode="true" data-slide-to-scroll="1">
              <?php foreach($feeds as $feed): ?>
                <div class="item wow-outer"><img class="wow slideInLeft" src="<?php echo base_url() ?>public/images/<?= $feed->icon ?>" alt="" width="96" height="96"/></div>
              <?php endforeach ?>
            </div>
            <!-- Slick Carousel-->
            <div class="slick-slider carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-items="1" data-fade="true" data-child="#child-carousel" data-for="#child-carousel">
              <?php foreach($feeds as $feed): ?>
              <div class="item">
                <!-- Quote Light 1-->
                <blockquote class="quote-light">
                  <cite class="quote-light-cite"><?= $feed->sub_name?></cite>
                  <p class="quote-light-caption"></p><span class="icon quote-light-mark linearicons-quote-open"></span>
                  <div class="quote-light-text">
                    <p><?= $feed->value ?></p>
                  </div>
                </blockquote>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg text-center pt-2">
        <div class="brands">
            <div class="container">
              <h3 class="section-title mb-0 wow slideInLeft" data-wow-delay="0.5s">As featured in</h3>
              <div class="slick-widget-testimonials wow fadeIn mt-0">
                  <div class="row pt-0 mt-0">
                      <div class="col">
                          <div class="brands_slider_container">
                              <div class="owl-carousel owl-theme brands_slider">
                                  <div class="owl-item wow fadeInRight" data-wow-delay="1.5s">
                                      <div class="brands_item d-flex flex-column justify-content-center"><img src="<?= base_url() ?>public/images/cnbc.png" alt=""></div>
                                  </div>
                                  <div class="owl-item wow fadeInRight" data-wow-delay="2.5s">
                                      <div class="brands_item d-flex flex-column justify-content-center"><img src="<?= base_url() ?>public/images/crunch.png" alt=""></div>
                                  </div>
                                  <div class="owl-item wow fadeInRight" data-wow-delay="3.5s">
                                      <div class="brands_item d-flex flex-column justify-content-center"><img src="<?= base_url() ?>public/images/bd.png" alt=""></div>
                                  </div>
                              </div> <!-- Brands Slider Navigation -->
                              <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                              <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                          </div>
                      </div>
                  </div>
              </div>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
              <script>
                  $(document).ready(function(){
            
                    if($('.brands_slider').length)
                    {
                    var brandsSlider = $('.brands_slider');
            
                    brandsSlider.owlCarousel(
                    {
                    loop:true,
                    autoplay:true,
                    autoplayTimeout:5000,
                    nav:false,
                    dots:false,
                    autoWidth:true,
                    items:8,
                    margin:42
                    });
            
                    if($('.brands_prev').length)
                    {
                    var prev = $('.brands_prev');
                    prev.on('click', function()
                    {
                    brandsSlider.trigger('prev.owl.carousel');
                    });
                    }
            
                    if($('.brands_next').length)
                    {
                    var next = $('.brands_next');
                    next.on('click', function()
                    {
                    brandsSlider.trigger('next.owl.carousel');
                    });
                    }
                    }
            
            
                    });
              </script>
            </div>
        </div>
      </section>
      <!-- Page Footer-->
        <?php $this->load->view('front/sub/footer') ?>
        <script>
          function animatethis(targetElement, speed) {
              var scrollWidth = $(targetElement).get(0).scrollWidth;
              var clientWidth = $(targetElement).get(0).clientWidth;
              $(targetElement).animate({ scrollLeft: scrollWidth - clientWidth },
              {
                  duration: speed,
                  complete: function () {
                      targetElement.animate({ scrollLeft: 0 },
                      {
                          duration: speed,
                          complete: function () {
                              animatethis(targetElement, speed);
                          }
                      });
                  }
              });
          };
          animatethis($('#home-container'), 30000);
          function addClass() {
              var len = <?= $home_icons ?>;
              var count = 2;
              setInterval(() => {
                  if(count>len){
                      count = 1;
                  }
                  else{
                      if(count>1){
                          var textPre = document.getElementById('hm'+(count-1));
                          var text = document.getElementById('hm'+count);
                          textPre.classList.remove('active');
                          text.classList.add('active');
                      }
                      else{
                          //var text = document.getElementById('hm'+count);
                          //text.classList.add('active');
                      }
                  }
                  count++;
              }, 5000);
          }
      </script>
        <?php $this->load->view('front/sub/footerscripts') ?>
    </div>
  </body>
</html>