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
                      <span class="wow slideInUp" data-wow-delay="1.5s">Refer Your Friends For Rewards.</span>
                    </span>
                    <p class="font-weight-exlight-p wow-outer">
                      <span class="wow slideInUp" data-wow-delay="3.1s">
                        When you refer a friend, you receive your rewards directly into your accounts
                      </span>
                    </p>
                  </h1>
                  <div class="mt-5">
                    <div class="left-50">
                      <div class="wow-outer"><a class="button button-md button-primary button-winona wow slideInRight" href="#refer" data-wow-delay="4.3s">Refer a friend</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-lg-5 col-xl-5 col-offset-1 banner-img wow fadeInRight" data-wow-delay="3.3s">
                  <div class="banner-img-item referal">
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <section id="refer" class="section bg-gray-100">
        <div class="range justify-content-xl-between">
          <div class="cell-xl-6 align-self-center container">
            <div class="row">
              <div class="col-lg-9 cell-inner">
                <div class="section-lg">
                  <h3 class="wow-outer"><span class="wow slideInDown">Referal Form</span></h3>
                  <p class="wow-outer"><span class="wow slideInDown">Complete your referal below</span></p>
                  <form class="rd-form rd-mailform" ng-controller="refCtrl" data-form-output="form-output-global" data-form-type="contact">
                    <div class="row row-10">
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="referal-name">Your Name</label>
                          <input class="form-input" ng-model="ref.rname" id="referal-name" type="text" name="rname" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="referal-email">Your Email</label>
                          <input class="form-input" ng-model="ref.remail" id="referal-email" type="email" name="remail" data-constraints="@Required @Email">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="friend-name">Friend's Name</label>
                          <input class="form-input" ng-model="ref.fname" id="friend-name" type="text" name="fname" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="friend-email">Friend's E-mail</label>
                          <input class="form-input" ng-model="ref.femail" id="friend-email" type="email" name="femail" data-constraints="@Required @Email">
                        </div>
                      </div>
                    </div>
                    <div class="group group-middle">
                      <div class="wow-outer">
                        <button class="button button-primary button-winona wow slideInRight" type="submit" ng-click="submitReferal()">
                            <span ng-bind="isLoadingRef?'...':'Refer Now'"></span>
                        </button>
                      </div>
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
      <section class="section section-overlap bg-decorate bg-banner">
        <div class="section-overlap-content">
          <div class="container pt-0 refer-steps">
              <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 text-center mb-5">
                  <h3 class="wow-outer">
                    <span class="font-weight-bold wow-outer">
                      <span class="wow slideInUp" data-wow-delay="1.5s">Earn with PressPayNG</span>
                    </span>
                  </h3>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 text-center">
                    <h6 class="wow-outer">Step 1</h6>
                    <div class="outer-circle">
                      <div class="inner-circle inner-circle-1">
                        <h4 class="wow-outer">Register</h4>
                      </div>
                    </div>
                    <p>Create an account and complete your profile to get verified</p>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 text-center">
                    <h6 class="wow-outer">Step 2</h6>
                    <div class="outer-circle">
                      <div class="inner-circle inner-circle-2">
                        <h4 class="wow-outer">Refer</h4>
                      </div>
                    </div>
                    <p>Create your referral link and share it with your friends through social media, email, and direct messages.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 text-center">
                    <h6 class="wow-outer">Step 3</h6>
                    <div class="outer-circle">
                      <div class="inner-circle inner-circle-3">
                        <h4 class="wow-outer">Earn</h4>
                      </div>
                    </div>
                    <p>Sit back and relax as your referral goes through the application process. Earn rewards when they get verified</p>
                </div>
              </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
        <?php $this->load->view('front/sub/footer') ?>
        <?php $this->load->view('front/sub/footerscripts') ?>
    </div>
  </body>
</html>