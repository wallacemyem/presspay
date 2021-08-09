    <!-- Footer Area -->
    <div class="footer-area footer-section--2 position-relative bg-default">
      <div class="container">
        <footer class="footer-top">
          <div class="row">
            <div class="col-lg-4 col-md-8 col-xs-10">
              <div class="footer-widgets footer-widgets--l2">
                <!-- Brand Logo-->
                <div class="brand-logo mt-1">
                  <a href="#">
                    <!-- light version logo (logo must be black)-->
                    <img src="<?php base_url(); ?>public/img/favicon.png" alt="" class="light-version-logo" height="60" width="60">
                    <!-- Dark version logo (logo must be White)-->
                    <img src="<?php base_url(); ?>public/img/favicon.png" alt="" class="dark-version-logo" height="60" width="60">
                  </a>
                </div>
                <p class="footer-widgets__text">Access up to 50% of your tuition as student loan from us and contribute the other 50%<br class="d-none d-lg-block"> with our flexible savings plans. <br class="d-none d-lg-block">Together, we take responsibility for your<br class="d-none d-lg-block"> future.
                 </p>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="row">
                <div class="col-md-4 col-xs-6">
                  <div class="footer-widgets footer-widgets--l2 mb-10 mb-md-0">
                    <h4 class="footer-widgets__title">Company</h4>
                    <ul class="footer-widgets__list">
                      <li>
                        <a href="<?php base_url() ?>about">About
                          us</a>
                      </li>
                      <li>
                        <a href="<?php base_url() ?>privacy">Privacy
                          Policy</a>
                      </li>
                      <li>
                        <a href="<?php base_url() ?>terms_of_service">Terms &
                          Conditions</a>
                      </li>
                      <li>
                        <a href="<?php base_url() ?>contact">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6">
                  <div class="footer-widgets footer-widgets--l2">
                    <h4 class="footer-widgets__title">Contact Details</h4>
                    <ul class="footer-widgets__list footer-widgets--address">
                      <li> <i class="fa fa-map-marker-alt text-radical-red"></i>
                      55 Allen Avenue Ikeja, Lagos <br class="d-block">
  </li>
                        <li><i class="fa fa-map-marker-alt text-radical-red"></i>
                        Suite 25/27, Eagleville Estate, Mabushi, Abuja
                      </li>
                      <li> <i class="fa fa-phone-alt text-radical-red"></i>
                        <div class="list-content">
                          <a href="#">+234 (0)909 000 1113</a>
                          
                        </div>
                      </li>
                      <li> <i class="fa fa-envelope text-radical-red"></i>
                        <a class="heading-default-color gr-text-hover-underline text-break" href="support@presspay.ng">support@presspay.ng</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-xs-7">
                  <div class="footer-widgets footer-widgets--l2">
                    <h4 class="footer-widgets__title">Follow us on social
                      media</h4>
                    <div class="footer-social-share dot-right footer-social-share--2">
                      <ul class="list-unstyled d-flex align-items-center">
                        <li>
                          <a href="https://facebook.com/presspayng">Facebook</a>
                        </li>
                        <li>
                          <a href="https://twitter.com/presspayng">Twitter</a>
                        </li>
                        <li>
                          <a href="https://instagram.com/presspayng">Instagram</a>
                        </li>
                      </ul>
                    </div>
                    <div class="payment-gatway border-top border-default-color">
                      <img class="w-100" src="<?php base_url(); ?>public/image/home-2/payment-gatway.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!--/ .Footer Area -->
  </div>
  <?php $this->load->view('frontend/layout/js'); ?>
  </div>
</body>

</html>