<!-- Header Area -->
<header class="site-header site-header--menu-right menu-block-5 dynamic-sticky-bg mt-3 mt-lg-0 site-header--absolute site-header--sticky">
      <div class="container">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="<?= base_url() ?>">
              <!-- light version logo (logo must be black)-->
              <img src="<?php echo base_url() ?>public/images/logo-dark.png" alt="" class="light-version-logo" height="61" width="160">
              <!-- Dark version logo (logo must be White)-->
              <img src="<?php echo base_url() ?>public/images/logo-white.png" alt="" class="dark-version-logo" height="61" width="160">
            </a>
          </div>
          <div class="menu-block-wrapper  ms-4">
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
                  <a href="<?= base_url() ?>about" class="nav-link-item drop-trigger">ABOUT US
                  </a>
                  
                </li>
                <li class="nav-item nav-item-has-children ">
                  <a href="#" class="nav-link-item drop-trigger">GET A LOAN <i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu" id="submenu-2">
                    <li class="sub-menu--item">
                      <a href="https://app.presspay.ng/sign-up">Apply Now</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="<?= base_url() ?>about">Learn More</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="<?= base_url() ?>refer-a-friend">Refer a Friend</a>
                    </li>
                  </ul>
                        
                </li>
                <li class="nav-item nav-item-has-children">
                  <a href="<?= base_url() ?>our-offers" class="nav-link-item drop-trigger">OUR OFFERS 
                  </a>
                  
                </li>
                <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">SUPPORT <i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu" id="submenu-11">
                    <li class="sub-menu--item">
                      <a href="<?= base_url() ?>faqs">FAQs</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="<?= base_url() ?>contact">Contact Us</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          <div class="header-btn ">
            <a class="btn btn btn-niagara btn--medium-4 h-45 rounded-50 text-white shadow--niagara-3 ms-auto ms-lg-4 d-none d-sm-flex" href="https://app.presspay.ng/sign-in">
              Login
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