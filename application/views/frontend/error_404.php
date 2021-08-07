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
    <!-- Header Area -->
    <header class="site-header site-header--menu-right mt-2 mb-4 mt-lg-0 mb-lg-0 bg-default">
      <div class="container">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="/home-marketing.html">
              <!-- light version logo (logo must be black)-->
              <img src="image/png/logo-dark.png" alt="" class="light-version-logo">
              <!-- Dark version logo (logo must be White)-->
              <img src="image/png/logo-white.png" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="menu-block-wrapper  ms-5 menu-sep-right">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <div class="go-back">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="site-menu-main">
                <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Home <i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu" id="submenu-1">
                    <li class="sub-menu--item">
                      <a href="home-marketing.html">Marketing</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="home-project-management.html">Project Management</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="home-it-services.html">IT Services</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="home-services.html">Services</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="home-agency.html">Agency</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="home-digital-agency.html">Digital Agency</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="home-app.html">App Presenting</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="home-startup.html">Startup</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Pages <i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu" id="submenu-2">
                    <li class="sub-menu--item">
                      <a href="about-us.html">About Us</a>
                    </li>
                    <li class="sub-menu--item nav-item-has-children">
                      <a href="#" data-menu-get="h3" class="drop-trigger">Blog<i class="fas fa-angle-right"></i>
                      </a>
                      <ul class="sub-menu" id="submenu-3">
                        <li class="sub-menu--item">
                          <a href="blogs.html">Blog</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="blog-details.html">Blog Details</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="/blog-right-sidebar.html">Blog Right Sidebar </a>
                        </li>
                      </ul>
                    </li>
                    <li class="sub-menu--item nav-item-has-children">
                      <a href="#" data-menu-get="h3" class="drop-trigger">Careers<i class="fas fa-angle-right"></i>
                      </a>
                      <ul class="sub-menu" id="submenu-4">
                        <li class="sub-menu--item">
                          <a href="career.html">Careers</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="career-details.html">Carreer Details</a>
                        </li>
                      </ul>
                    </li>
                    <li class="sub-menu--item nav-item-has-children">
                      <a href="#" data-menu-get="h3" class="drop-trigger">Pricing<i class="fas fa-angle-right"></i>
                      </a>
                      <ul class="sub-menu" id="submenu-5">
                        <li class="sub-menu--item">
                          <a href="pricing-1.html">Pricing-01</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="pricing-2.html">Pricing-02</a>
                        </li>
                      </ul>
                    </li>
                    <li class="sub-menu--item nav-item-has-children">
                      <a href="#" data-menu-get="h3" class="drop-trigger">Account<i class="fas fa-angle-right"></i>
                      </a>
                      <ul class="sub-menu" id="submenu-7">
                        <li class="sub-menu--item">
                          <a href="sign-in.html">Sign In</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="sign-up.html">Sign Up</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="reset-password.html">Reset Password</a>
                        </li>
                      </ul>
                    </li>
                    <li class="sub-menu--item nav-item-has-children">
                      <a href="#" data-menu-get="h3" class="drop-trigger">Utility<i class="fas fa-angle-right"></i>
                      </a>
                      <ul class="sub-menu" id="submenu-8">
                        <li class="sub-menu--item">
                          <a href="faq.html">FAQ</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="terms-page.html">Terms & Conditions</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="404.html">404 Error</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="coming-soon.html">Coming Soon</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="testimonial-1.html">Testimonial One</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="testimonial-2.html">Testimonial Two</a>
                        </li>
                      </ul>
                    </li>
                    <li class="sub-menu--item nav-item-has-children">
                      <a href="#" data-menu-get="h3" class="drop-trigger">Contact<i class="fas fa-angle-right"></i>
                      </a>
                      <ul class="sub-menu" id="submenu-9">
                        <li class="sub-menu--item">
                          <a href="contact-1.html">Contact One</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="contact-2.html">Contact Two</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item nav-item-has-children has-megamenu">
                  <a href="#" class="nav-link-item drop-trigger">Portfolios <i class="fas fa-angle-down"></i>
                  </a>
                  <div class="sub-menu megamenu  megadropdown-center  d-lg-flex" id="submenu-100">
                    <ul class="col-lg-12 row-lg list-unstyled py-lg-2">
                      <li class="col-lg-3">
                        <div class="single-dropdown-block">
                          <h3>Gallery Style</h3>
                          <a href="portfolio-grid-2-container.html" class="mega-drop-menu-item sub-menu--item">Two Column Grid</a>
                          <a href="portfolio-grid-3-container.html" class="mega-drop-menu-item sub-menu--item">Three Column Grid</a>
                          <a href="portfolio-grid-4-container.html" class="mega-drop-menu-item sub-menu--item">Four Column Grid</a>
                          <a href="portfolio-grid-2-container-fluid.html" class="mega-drop-menu-item sub-menu--item">Two Column Wide</a>
                          <a href="portfolio-grid-3-container-fluid.html" class="mega-drop-menu-item sub-menu--item">Three Column Wide</a>
                          <a href="portfolio-grid-4-container-fluid.html" class="mega-drop-menu-item sub-menu--item">Four Column Wide</a>
                        </div>
                      </li>
                      <li class="col-lg-3">
                        <div class="single-dropdown-block">
                          <h3>Gallery (No Gap)</h3>
                          <a href="portfolio-grid-2-no-gap.html" class="mega-drop-menu-item sub-menu--item">Two Column Grid</a>
                          <a href="portfolio-grid-3-no-gap.html" class="mega-drop-menu-item sub-menu--item">Three Column Grid</a>
                          <a href="portfolio-grid-4-no-gap.html" class="mega-drop-menu-item sub-menu--item">Four Column Grid</a>
                          <a href="portfolio-grid-2-no-gap-full.html" class="mega-drop-menu-item sub-menu--item">Two Column Wide</a>
                          <a href="portfolio-grid-3-no-gap-full.html" class="mega-drop-menu-item sub-menu--item">Three Column Wide</a>
                          <a href="portfolio-grid-4-no-gap-full.html" class="mega-drop-menu-item sub-menu--item">Four Column Wide</a>
                        </div>
                      </li>
                      <li class="col-lg-3">
                        <div class="single-dropdown-block">
                          <h3>Masonry Style</h3>
                          <a href="portfolio-masonary-2-no-gap.html" class="mega-drop-menu-item sub-menu--item">Two Column Masonary</a>
                          <a href="portfolio-masonary-3-no-gap.html" class="mega-drop-menu-item sub-menu--item">Three Column Masonary</a>
                          <a href="portfolio-masonary-4-no-gap.html" class="mega-drop-menu-item sub-menu--item">Four Column Masonary</a>
                          <a href="portfolio-masonary-2-no-gap-full.html" class="mega-drop-menu-item sub-menu--item">Two Column Wide</a>
                          <a href="portfolio-masonary-3-no-gap-full.html" class="mega-drop-menu-item sub-menu--item">Three Column Wide</a>
                          <a href="portfolio-masonary-4-no-gap-full.html" class="mega-drop-menu-item sub-menu--item">Four Column Wide</a>
                        </div>
                      </li>
                      <li class="col-lg-3">
                        <div class="single-dropdown-block">
                          <h3>Portfolio Details</h3>
                          <a href="portfolio-details-1.html" class="mega-drop-menu-item sub-menu--item">Portfolio Details 1</a>
                          <a href="portfolio-details-2.html" class="mega-drop-menu-item sub-menu--item">Portfolio Details 2</a>
                          <a href="portfolio-details-3.html" class="mega-drop-menu-item sub-menu--item">Portfolio Details 3</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Blogs <i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu" id="submenu-10">
                    <li class="sub-menu--item">
                      <a href="/blogs.html">Blog Reguler</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="/blog-left-sidebar.html">Blog Left Sidebar</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Contact <i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu" id="submenu-11">
                    <li class="sub-menu--item">
                      <a href="/contact-1.html">Contact One</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="/contact-2.html">Contact Two</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          <div class="header-btn ">
            <a class="btn btn btn-electric-violet-2 btn--header-inner rounded-50 text-white shadow--electric-violet-2-4
ms-2 d-none d-lg-block" href="#">
              Purchase
            </a>
          </div>
          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!--/ .Header Area -->
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
              <a class="btn btn-readical-red shadow--torch-red-2  btn--medium-2 text-white rounded-50 m-2" href="#">Go back</a>
              <a class="btn btn-outline-readical-red btn--medium-3 rounded-50 m-2" href="#">Contact us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Area -->
    <div class="footer-area footer-inner-1 position-relative bg-default-3">
      <div class="container">
        <footer class="footer-top">
          <div class="row">
            <div class="col-lg-3 col-md-7 col-xs-9">
              <div class="footer-widgets footer-widgets--l7">
                <!-- Brand Logo-->
                <div class="brand-logo mt-1">
                  <a href="#">
                    <!-- light version logo (logo must be black)-->
                    <img src="image/png/logo-dark.png" alt="" class="light-version-logo">
                    <!-- Dark version logo (logo must be White)-->
                    <img src="image/png/logo-white.png" alt="" class="dark-version-logo">
                  </a>
                </div>
                <p class="footer-widgets__text mt-5">
                  We’re the digital agency to create<br class="d-none d-xl-block"> your digital presence for better<br class="d-none d-xl-block"> conversion and sales.</p>
                <ul class="footer-social-share footer-social-share--rounded mt-4">
                  <li>
                    <a href="#">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="row">
                <div class="col-md-4 col-xs-6">
                  <div class="footer-widgets footer-widgets--l7">
                    <h4 class="footer-widgets__title">Contact Details</h4>
                    <ul class="footer-widgets__list footer-widgets--address">
                      <li>
                        <i class="fa fa-map-marker-alt text-electric-violet-2"></i>
                        <span>Address: <br class="d-block">
                                            4401 Waldeck Street,<br class="d-block">
                                            Grapevine Nashville, Tx 76051</span>
                      </li>
                      <li>
                        <i class="fa fa-phone-alt text-electric-violet-2"></i>
                        <div class="list-content">
                          <span class="d-block gr-text-hover-decoration-none"> Phone: </span>
                          <a href="#">+99 (0) 101 0000 888</a>
                        </div>
                      </li>
                      <li>
                        <i class="fa fa-envelope text-electric-violet-2"></i>
                        <a class="heading-default-color gr-text-hover-underline text-break" href="mailto:info@medcartel.com">
                          <span class="d-block gr-text-hover-decoration-none"> Phone:
                                            </span>info@medcartel.com</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6">
                  <div class="footer-widgets footer-widgets--l7 mb-10 mb-md-0">
                    <h4 class="footer-widgets__title">Company</h4>
                    <ul class="footer-widgets__list">
                      <li>
                        <a href="#">About
                          us</a>
                      </li>
                      <li>
                        <a href="#">Privacy
                          Policy</a>
                      </li>
                      <li>
                        <a href="#">Terms &
                          Conditions</a>
                      </li>
                      <li>
                        <a href="#">Rider</a>
                      </li>
                      <li>
                        <a href="#">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-xs-9">
                  <div class="footer-widgets footer-widgets--l7">
                    <h4 class="footer-widgets__title">Newsletter</h4>
                    <p class="footer-widgets__text mb-4 mt-0">Get the latest trends updates right at your inbox.</p>
                    <!-- Newsletter -->
                    <div class="newsletter newsletter--l7">
                      <form action="/.">
                        <input type="text" placeholder="Enter Your Email">
                        <button class="btn btn-primary shadow--primary-4" type="submit">Subscribe</button>
                      </form>
                    </div>
                    <!--/ .Newsletter -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="copyright text-center border-top border-default-color-3">
          <p class="mb-0">© 2021 Fastland By FinestDevs. All Rights Reserved</p>
        </div>
      </div>
    </div>
    <!--/ .Footer Area -->
  </div>
  <!-- Plugin's Scripts -->
  <script src="./plugins/jquery/jquery.min.js"></script>
  <script src="./plugins/jquery/jquery-migrate.min.js"></script>
  <script src="./js/bootstrap.bundle.js"></script>
  <script src="./plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="./plugins/nice-select/jquery.nice-select.min.js"></script>
  <script src="./plugins/aos/aos.min.js"></script>
  <script src="./plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="./plugins/counter-up/waypoints.min.js"></script>
  <script src="./plugins/slick/slick.min.js"></script>
  <script src="./plugins/skill-bar/skill.bars.jquery.js"></script>
  <script src="./plugins/isotope/isotope.pkgd.min.js"></script>
  <!--<script src="./plugins/theme-mode-switcher/gr-theme-mode-switcher.js"></script>-->
  <!-- Activation Script -->
  <script src="js/menu.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>