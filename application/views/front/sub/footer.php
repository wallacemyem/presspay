<footer class="section footer-standard bg-primary">
    <div class="footer-standard-main">
        <div class="container">
            <div class="row row-50">
                <div class="col-sm-12 col-md-4 col-lg-4" id="book">
                    <h4>Subscribe</h4>
                    <form class="rd-form rd-mailform form-inline" data-form-output="form-output-global" data-form-type="subscribe" ng-controller="subCtrl">
                        <div class="form-wrap">
                            <input class="form-input" ng-model="book.email" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="subscribe-form-2-email">Email address</label>
                        </div>
                        <div class="form-button">
                            <button ng-if="!isLoadingBook" ng-click="submitBook()" class="button button-primary button-icon button-icon-only button-winona" type="submit" aria-label="submit"><span class="icon mdi linearicons-paper-plane"></span></button>
                            <button ng-if="isLoadingBook" class="button button-primary button-icon button-icon-only button-winona" type="submit" aria-label="submit">...</button>
                        </div>
                    </form>
                    <div class="container">
                        <div class="row text-left stores pt-3 pb-3">
                            <div class="pr-2 left-50">
                                <img src="<?= base_url() ?>public/update/store.png"/>
                            </div>
                            <div class="play left-50">
                                <img src="<?= base_url() ?>public/update/play.png" class="p-0"/>
                            </div>
                        </div>
                        <div class="row mt-0">
                            <div class="object-inline social-wrap">
                                <a class="link-default" target="_blank" href="//facebook.com/presspayng"><span class="icon icon-md mdi mdi-facebook"></span></a>
                            </div>
                            <div class="object-inline social-wrap">
                                <a class="link-default" target="_blank" href="//twitter.com/presspayng"><span class="icon icon-md mdi mdi-twitter"></span></a>
                            </div>
                            <div class="object-inline social-wrap">
                                <a class="link-default" target="_blank" href="//instagram.com/presspayng"><span class="icon icon-md mdi mdi-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="inset-right-1">
                    <h4>Quick Links</h4>
                    <ul class="list-sm">
                        <li class="object-inline"><a class="link-default" href="<?= base_url() ?>about">About</a></li>
                        <li class="object-inline"><a class="link-default" href="<?= Utils::appUrl ?>sign-up">Get A Loan</a></li>
                        <li class="object-inline"><a class="link-default" href="<?= base_url() ?>our-offers">Our Offers</a></li>
                        <li class="object-inline"><a class="link-default" href="<?= base_url() ?>faqs">FAQs</a></li>
                        <li class="object-inline"><a class="link-default" href="<?= base_url() ?>refer-a-friend">Refer A Friend</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-5">
                    <div class="box-11">
                        <h4>Contact Information</h4>
                        <h6 class="text-grey mt-0">Lagos</h6>
                        <ul class="list-sm">
                            <li class="object-inline"><span class="icon icon-md mdi mdi-map-marker text-gray-700"></span><a class="link-default" href="#">55 Allen Avenue Ikeja, Lagos Nigeria</a></li>
                            <li class="object-inline"><span class="icon icon-md mdi mdi-phone text-gray-700"></span><a class="link-default" href="tel:+2349090001113">+234 (0)909 000 1113</a></li>
                            <li class="object-inline"><span class="icon icon-md mdi mdi-email text-gray-700"></span><a class="link-default" href="mailto:support@presspay.ng">support@presspay.ng</a></li>
                        </ul>
                        <h6 class="text-grey mt-4">Abuja</h6>
                        <ul class="list-sm">
                            <li class="object-inline"><span class="icon icon-md mdi mdi-map-marker text-gray-700"></span><a class="link-default" href="#">Suite 25/27, Eagleville Estate, Mabushi, Abuja, Nigeria</a></li>
                            <li class="object-inline"><span class="icon icon-md mdi mdi-phone text-gray-700"></span><a class="link-default" href="tel:+2349090001113">+234 (0)909 000 1113</a></li>
                            <li class="object-inline"><span class="icon icon-md mdi mdi-email text-gray-700"></span><a class="link-default" href="mailto:support@presspay.ng">support@presspay.ng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<footer class="section footer-standard bg-primary bg-primary-lighter pt-3">
    <div class="container">
        <div class="footer-standard-aside">
            <a class="brand" href="<?= base_url() ?>"><img src="<?php echo base_url() ?>public/images/logo-white.png" alt="" width="176" height="28" srcset="<?php echo base_url() ?>public/images/logo-white.png 2x"/></a>
            <!-- Rights-->
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved. PressPayNG</span><span>&nbsp;</span><br class="d-sm-none"/></p>
            <p class="rights"><span class="link-default" onclick="url('<?= base_url() ?>privacy')">Privacy</span> | <span class="link-default" onclick="url('<?= base_url() ?>terms-of-service')">Terms of Service</span><span>&nbsp;</span><br class="d-sm-none"/></p>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
    function url(url){
        window.location.href = url;
    }
</script>