<?php $this->load->view('front/sub/header') ?>
</head>


  </head>
  <body>
    <div class="ie-panel">
      
    </div>
    <div class="page">
      <!-- Page Header-->
      <?php $this->load->view('front/sub/menu') ?>
      <section class="section section-overlap bg-decorate bg-banner">
      </section>
      <section class="section section-overlap bg-decorate bg-banner">
        <div class="section-overlap-content">
          <div class="container pt-0">
              <div class="row">
                <div class="col-md-7 col-lg-7 col-xl-7">
                  <h1 class="wow-outer">
                    <span class="font-weight-bold wow-outer">
                      <span class="wow slideInUp" data-wow-delay="1.5s">Contact Us.</span>
                    </span>
                    <p class="font-weight-exlight-p wow-outer">
                      <span class="wow slideInUp" data-wow-delay="3.1s">
                        We would love to hear from you. Kindly use any of the available medium and we will get back to you ASAP!
                      </span>
                    </p>
                  </h1>
                  <div class="mt-5">
                    <div class="left-50">
                      <div class="wow-outer"><a class="button button-md button-primary button-winona wow slideInRight" href="<?= Utils::appUrl ?>signup" data-wow-delay="4.3s">Apply For Loan!</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-lg-5 col-xl-5 col-offset-1 banner-img wow fadeInRight" data-wow-delay="3.3s">
                  <div class="banner-img-item">
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <section class="section section-sm">
        <div class="container">
          <div class="layout-bordered">
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <span class="icon icon-lg mdi mdi-phone text-primary"></span>
                <ul class="list-0">
                  <li><a class="link-default" href="tel:+2349090001113">+234 (0)909 000 1113</a></li>
                </ul>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <span class="icon icon-lg mdi mdi-email text-primary"></span><a class="link-default" href="mailto:hello@presspay.ng">hello@presspay.ng</a>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <span class="icon icon-lg mdi mdi-map-marker text-primary"></span>
                <a class="link-default" href="" target="_blank">55 Allen Avenue Ikeja, Lagos Nigeria</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section bg-gray-100">
        <div class="range justify-content-xl-between">
          <div class="cell-xl-6 align-self-center container">
            <div class="row">
              <div class="col-lg-9 cell-inner">
                <div class="section-lg">
                  <h3 class="wow-outer"><span class="wow slideInDown">We Want To Hear From You</span></h3>
                  <!-- RD Mailform-->
                  <form class="rd-form rd-mailform" ng-controller="formCtrl" data-form-output="form-output-global" data-form-type="contact">
                    <div class="row row-10">
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-first-name">First Name</label>
                          <input class="form-input" ng-model="form.fname" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-last-name">Last Name</label>
                          <input class="form-input" ng-model="form.lname" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-email">E-mail</label>
                          <input class="form-input" ng-model="form.email" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-phone">Phone</label>
                          <input class="form-input" ng-model="form.phone" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                        </div>
                      </div>
                      <div class="col-12 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-message">Your Message</label>
                          <textarea class="form-input" ng-model="form.msg" id="contact-message" name="message" data-constraints="@Required"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="group group-middle">
                      <div class="wow-outer">
                        <button class="button button-primary button-winona wow slideInRight" type="submit" ng-click="submitForm()">{{isLoading?'...':'Send Message'}}</button>
                      </div>
                      <p>or use</p>
                      <div class="wow-outer"><a class="button button-primary-outline button-icon button-icon-left button-winona wow slideInLeft" href="https://web.whatsapp.com/send?text=Hello%20*Yemi%20Prodigy*,%20I%20want%20to%20make%20inquiries%20about%20your%20services&phone=+2348060396906" target="_blank"><span class="icon text-primary mdi mdi-whatsapp"></span>Whatsapp</a></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="cell-xl-5 height-fill wow fadeIn">
            
          </div>
        </div>
      </section>
      <!-- Page Footer-->
        <?php $this->load->view('front/sub/footer') ?>
        <?php $this->load->view('front/sub/footerscripts') ?>
    </div>
  </body>
</html>