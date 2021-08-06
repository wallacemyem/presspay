<style>
    .scrolling-wrapper {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .scrolling-wrapper .card {
        flex: 0 0 auto;
    }
</style>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <!-- logo -->
                <div class="logo">
                    <a href="<?= base_url() ?>"><img src="<?= base_url() ?>/public/images/logo-dark.png" alt="<?= Utils::siteName ?>"></a>
                </div>
            </div>
            <!-- logo -->
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <div id="navigation">
                    <ul>
                        <li class="<?= @$ab ?>"><a class="animsition-link">About Us</a>
                            <ul>
                                <li><a href="<?= base_url() ?>about" title="About us" class="animsition-link text-capitalize">The Company</a></li>
                                <!--<li><a href="<?= base_url() ?>team" title="PressPay.NG Team" class="animsition-link text-capitalize">Our Team</a></li>-->
                            </ul>
                        </li>
                        <li class="<?= @$loan ?>"><a class="animsition-link">Get A Loan</a>
                            <ul>
                                <li><a href="<?= Utils::appUrl ?>sign-up" title="Apply now" class="animsition-link text-capitalize">Apply Now</a></li>
                                <li><a href="<?= base_url() ?>about" title="Learn more" class="animsition-link text-capitalize">Learn more</a></li>
                                <li><a href="<?= base_url() ?>refer-a-friend" title="Refer" class="animsition-link text-capitalize">Refer a friend</a></li>
                            </ul>
                        </li>
                        <li class="<?= @$offer ?>"><a class="animsition-link" href="<?= base_url() ?>our-offers">Our Offers</a></li>
                        <li class="<?= @$support ?>"><a href="<?= base_url() ?>#" class="animsition-link">Support</a>
                            <ul>
                                <li><a href="<?= base_url() ?>faqs" title="faqs" class="animsition-link text-capitalize">FAQs</a></li>
                                <li><a href="<?= base_url() ?>contact" title="faqs" class="animsition-link text-capitalize">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="do-pad mr-3">
                            <div class="wow-outer1"><a class="button button-md button-primary button-winona" href="<?= Utils::appUrl ?>sign-up" data-wow-delay="4.3s">Apply Now</a></div>
                        </li>
                        <li class="do-pad">
                            <div class="wow-outer1"><a class="button button-md button-primary-light button-winona" href="<?= Utils::appUrl ?>sign-in" data-wow-delay="4.3s">Sign In</a></div>
                        </li>
                    </ul>
                </div>
                <!-- /.navigation start-->
            </div>
        </div>
    </div>
</div