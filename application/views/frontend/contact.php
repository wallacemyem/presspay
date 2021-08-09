<?php $this->load->view('frontend/layout/header') ?>
<!-- contact Area -->
<div class="contact-section contact-inner-1 bg-default-3 border-bottom border-default-color-3">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-7 mb-7 mb-lg-0">
            <div class="section-title section-title--l3 text-left mb-5 mb-md-7" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
              <h6 class="section-title__sub-heading">Contact Us</h6>
              <h2 class="section-title__heading mb-4">
                Send A Message
              </h2>
              <p class="section-title__description">We would love to hear from you. Kindly use any of the available medium and we will get back to you ASAP! <br class="d-none d-xs-block"/></p>
            </div>
            <form action="./" class="contact-form" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="form-floating">
                    <input class="form-control" placeholder="Leave a comment here" id="floatinginput" />
                    <label for="floatinginput">Your Email</label>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="form-floating">
                    <input class="form-control" placeholder="Leave a comment here" id="floatinginput2" />
                    <label for="floatinginput2">Phone number</label>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea3" style="height: 100px"></textarea>
                    <label for="floatingTextarea3">Your Message Here </label>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="row align-items-center mt-3">
                    <div class="col-md-8 col-lg-7 col-md-6 col-xl-8 pt-3">
                      <div class="form-check d-flex align-items-center">
                        <input class="form-check-input bg-white float-none mt-0" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Your email address will not be published. Required fields are marked *
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4 col-lg-5 col-xl-4 text-md-end pt-3">
                      <button class="btn btn-primary shadow--primary-4 btn--lg-2 rounded-55 text-white">Send Message</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-xl-4 offset-xl-1 col-lg-5" data-aos="fade-left" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">
            <div class="contact-widget-box">
              <div class="contact-widget-box__title-block">
                <h2 class="widget-box__title">Get In Touch</h2>
                <p class="widget-box__paragraph">You can always keep in touch <br class="d-none d-xs-block d-lg-none d-xxl-block"><br> 247 Hours 365 Days</p>
              </div>
              <div class="contact-widgets-wrapper row">
                <div class="widget widget--contact col-lg-12 col-sm-6 active">
                  <div class="widget-icon widget-icon--circle">
                  <i class="fas fa-map-marker-alt"></i>
                    
                  </div>
                  <div class="widget-body">
                    <h3 class="widget-body--title">visit us :</h3>
                    <p>55 Allen Avenue Ikeja, <br class="d-block">Lagos, Nigeria</p>
                  </div>
                </div>
                <div class="widget widget--contact col-lg-12 col-sm-6 active">
                  <div class="widget-icon widget-icon--circle">
                  <i class="fas fa-envelope"></i>
                  </div>
                  <div class="widget-body">
                    <h3 class="widget-body--title">mail us :</h3>
                    <p>
                        support@presspay.ng </p>
                  </div>
                </div>
                <div class="widget widget--contact col-lg-12 col-sm-6 active">
                  <div class="widget-icon widget-icon--circle">
                  <i class="fas fa-phone-alt"></i>
                    
                  </div>
                  <div class="widget-body">
                    <h3 class="widget-body--title">call us :</h3>
                    <p>
                    +234 (0)909 000 1113
 </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ .contact Area -->
<?php $this->load->view('frontend/layout/about_us') ?>
<?php $this->load->view('frontend/layout/cta') ?>
<?php $this->load->view('frontend/layout/footer') ?>