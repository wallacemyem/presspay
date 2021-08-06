<?php $this->load->view('front/sub/header') ?>
<style>
@media(max-width:600px){
  .hide{
    display:none !important
  }
  .mtop{
    margin-top:10px !important;
  }
}
@media(min-width:601px){
  .hide2{
    display:none !important
  }
  .show-banner{
    display:none !important
  }
  .mtop{
    margin-top:0 !important;
  }
}
.partners{
  margin:0 auto !important;
  width:100%;
  max-width:800px;
  min-height: 100px;
}
.partners .item{
  width:30%;
  float:left;
}
.partners img{
  width:100px;
}
</style>
</head>


  </head>
  <body>
    <div class="ie-panel">
      
    </div>
    <div class="page">
      <!-- Page Header-->
      <?php $this->load->view('front/sub/menu') ?>
      <!-- Overlapping Screen-->
      <section class="section section-overlap bg-decorate">
        <div class="section-overlap-image hide1" style="background-image: url(public/images/screens-1-1046x720.jpg)"></div>
        <div class="section-overlap-content">
          <div class="container pt-0">
            <div class="row">
              <div class="col-md-6 col-lg-5 col-xl-4">
                <div class="section-overlap-image1 hide2 text-center">
                <!--style="background: url() center center no-repeat !important; background-size:contain !important"-->
                <img src="<?= base_url() ?>public/images/screens-1-1046x720.jpg" style="margin-top:10px; border-radius:10px; width:100%; height:300px;" />
                </div>
              </div>
              <div class="col-md-6 col-lg-5 col-xl-4 mtop">
                <div class="wow-outer">
                  <h6 class="font-weight-sbold text-primary wow slideInDown">I'm Yemi Prodigy</h6>
                </div>
              </div>
              <div class="col-md-8 col-lg-7 col-xl-6">
                <h1 class="wow-outer"><span class="font-weight-bold wow-outer"><span class="wow slideInUp">Cinematographer</span></span><span class="font-weight-exlight wow-outer"><span class="wow slideInUp" data-wow-delay=".1s">& creative director</span></span></h1>
              </div>
              <div class="col-md-6 col-lg-5 col-xl-4 col-offset-1">
                <div class="wow-outer">
                  <h4 class="font-weight-light wow slideInUp" data-wow-delay=".2s">I specialize in TV commercials, movies, music videos, documentaries, and events.</h4>
                </div>
                <div class="mt-2">
                  <div class="" style="width:50%;float:left; margin-right:3px">
                    <div class="wow-outer"><a class="button button-md button-primary button-winona wow slideInUp" href="#book" data-wow-delay=".3s">Book Me</a></div>
                  </div>
                  <div class="" style="width:45%;float:left;">
                    <div class="wow-outer"><a class="button button-md button-danger button-winona wow slideInUp" href="<?= base_url() ?>gallery" data-wow-delay=".3s">Explore</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Projects - Modern Layout-->
      <!--<section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-12 text-center">
              <h3 class="section-title wow-outer"><span class="wow slideInUp">Portfolio</span></h3>
            </div>
            <div class="col-12 isotope-wrap">
              <div class="isotope offset-top-2" data-isotope-layout="masonry" data-lightgallery="group" data-lg-thumbnail="false">
                <div class="row row-30">
                  <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                  <article class="thumbnail-corporate wow slideInDown"><img class="thumbnail-corporate-image" src="<?php echo base_url() ?>public/images/gallery-masonry-1-370x256.jpg" alt="" width="370" height="256"/>
                                    <div class="thumbnail-corporate-caption">
                                      <p class="thumbnail-corporate-title"><a href="#">Mary Williams</a></p>
                                      <p>I offer high-quality photography &amp; retouch services to individual and corporate clients all over the US.</p><a class="thumbnail-corporate-link" href="<?php echo base_url() ?>public/images/gallery-original-1.jpg" data-lightgallery="item"><span class="icon mdi mdi-magnify"></span><span class="icon mdi mdi-magnify"></span></a>
                                    </div>
                                    <div class="thumbnail-corporate-dummy"></div>
                                  </article>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                  <article class="thumbnail-corporate thumbnail-corporate-lg wow slideInDown"><img class="thumbnail-corporate-image" src="<?php echo base_url() ?>public/images/gallery-masonry-2-370x464.jpg" alt="" width="370" height="464"/>
                                    <div class="thumbnail-corporate-caption">
                                      <p class="thumbnail-corporate-title"><a href="#">YouthWear</a></p>
                                      <p>I offer high-quality photography &amp; retouch services to individual and corporate clients all over the US.</p><a class="thumbnail-corporate-link" href="<?php echo base_url() ?>public/images/gallery-original-2.jpg" data-lightgallery="item"><span class="icon mdi mdi-magnify"></span><span class="icon mdi mdi-magnify"></span></a>
                                    </div>
                                    <div class="thumbnail-corporate-dummy"></div>
                                  </article>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                  <article class="thumbnail-corporate wow slideInUp"><img class="thumbnail-corporate-image" src="<?php echo base_url() ?>public/images/gallery-masonry-3-370x256.jpg" alt="" width="370" height="256"/>
                                    <div class="thumbnail-corporate-caption">
                                      <p class="thumbnail-corporate-title"><a href="#">Ultra Optix</a></p>
                                      <p>I offer high-quality photography &amp; retouch services to individual and corporate clients all over the US.</p><a class="thumbnail-corporate-link" href="<?php echo base_url() ?>public/images/gallery-original-3.jpg" data-lightgallery="item"><span class="icon mdi mdi-magnify"></span><span class="icon mdi mdi-magnify"></span></a>
                                    </div>
                                    <div class="thumbnail-corporate-dummy"></div>
                                  </article>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                  <article class="thumbnail-corporate thumbnail-corporate-lg wow slideInUp"><img class="thumbnail-corporate-image" src="<?php echo base_url() ?>public/images/gallery-masonry-4-370x464.jpg" alt="" width="370" height="464"/>
                                    <div class="thumbnail-corporate-caption">
                                      <p class="thumbnail-corporate-title"><a href="#">Accessories Inc.</a></p>
                                      <p>I offer high-quality photography &amp; retouch services to individual and corporate clients all over the US.</p><a class="thumbnail-corporate-link" href="<?php echo base_url() ?>public/images/gallery-original-4.jpg" data-lightgallery="item"><span class="icon mdi mdi-magnify"></span><span class="icon mdi mdi-magnify"></span></a>
                                    </div>
                                    <div class="thumbnail-corporate-dummy"></div>
                                  </article>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                  <article class="thumbnail-corporate thumbnail-corporate-lg wow slideInDown"><img class="thumbnail-corporate-image" src="<?php echo base_url() ?>public/images/gallery-masonry-6-370x464.jpg" alt="" width="370" height="464"/>
                                    <div class="thumbnail-corporate-caption">
                                      <p class="thumbnail-corporate-title"><a href="#">Dwayne Winston</a></p>
                                      <p>I offer high-quality photography &amp; retouch services to individual and corporate clients all over the US.</p><a class="thumbnail-corporate-link" href="<?php echo base_url() ?>public/images/gallery-original-6.jpg" data-lightgallery="item"><span class="icon mdi mdi-magnify"></span><span class="icon mdi mdi-magnify"></span></a>
                                    </div>
                                    <div class="thumbnail-corporate-dummy"></div>
                                  </article>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                  <article class="thumbnail-corporate wow slideInDown"><img class="thumbnail-corporate-image" src="<?php echo base_url() ?>public/images/gallery-masonry-5-370x256.jpg" alt="" width="370" height="256"/>
                                    <div class="thumbnail-corporate-caption">
                                      <p class="thumbnail-corporate-title"><a href="#">Sue Peterson</a></p>
                                      <p>I offer high-quality photography &amp; retouch services to individual and corporate clients all over the US.</p><a class="thumbnail-corporate-link" href="<?php echo base_url() ?>public/images/gallery-original-5.jpg" data-lightgallery="item"><span class="icon mdi mdi-magnify"></span><span class="icon mdi mdi-magnify"></span></a>
                                    </div>
                                    <div class="thumbnail-corporate-dummy"></div>
                                  </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>-->
      <!-- Advantages and Achievements-->
      <section class="section section-lg text-center bg-default">
        <div class="container">
          <h3 class="section-title wow-outer"><span class="wow slideInUp">About Me</span></h3>
          <p class="wow-outer"><span class="text-width-1 wow slideInDown">
            Yemi Prodigy  is an experienced and passionate Cinematographer with extensive industry experience, training, and proven success in cinematography with over a decade, experience in filming TV commercials, movies, music videos, documentaries, and events around the globe. He's highly skilled in studio and location shoots, often collaborating with several organisations in different states and with both large and small crews. Most importantly, the primary purpose of working with Yemi prodigy is to visualizing and executing your vision through keen cinematography and sequencing talents while creatively designing your marketable desirable end products. 
          </span></p>
          <!--
          <div class="row row-50">
            <div class="col-6 col-md-3 wow-outer">
              <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                <div class="counter-minimal-icon linearicons-mustache-glasses"></div>
                <div class="counter-minimal-main">
                  <div class="counter">22</div>
                </div>
                <h5 class="counter-minimal-title">Photography Awards</h5>
              </article>
            </div>
            <div class="col-6 col-md-3 wow-outer">
              <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                <div class="counter-minimal-icon linearicons-camera2"></div>
                <div class="counter-minimal-main">
                  <div class="counter">156</div>
                </div>
                <h5 class="counter-minimal-title">Photo Shoots</h5>
              </article>
            </div>
            <div class="col-6 col-md-3 wow-outer">
              <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                <div class="counter-minimal-icon linearicons-shutter"></div>
                <div class="counter-minimal-main">
                  <div class="counter">10</div>
                </div>
                <h5 class="counter-minimal-title">Years of Experience</h5>
              </article>
            </div>
            <div class="col-6 col-md-3 wow-outer">
              <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                <div class="counter-minimal-icon linearicons-picture"></div>
                <div class="counter-minimal-main">
                  <div class="counter">392</div>
                </div>
                <h5 class="counter-minimal-title">Annual Clients</h5>
              </article>
            </div>
          </div>-->
        </div>
      </section>
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-50 justify-content-lg-between offset-top-1">
            <div class="col-8 text-center" style="margin:0 auto">
              <h3 class="section-title text-center wow-outer"><span class="wow slideInDown">How I Work</span></h3>
              <p>
                Yemi’s work covers a range of styles and disciplines from bright inspiring concept to creating dramatic scenes.
                When it comes to video production, he likes to be involved from the conceptualization stage till the post-production stage.</p>
            </div>
            <div class="col-lg-7 col-xl-6">
              <!-- Bootstrap collapse-->
              <div class="card-group-custom card-group-corporate wow-outer" id="accordion1" role="tablist" aria-multiselectable="false">
                <!-- Bootstrap card-->
                <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".05s">
                  <div class="card-header" id="accordion1-heading-1" role="tab">
                    <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-collapse-1" aria-controls="accordion1-collapse-1" aria-expanded="true">Conceptualization
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse show" id="accordion1-collapse-1" role="tabpanel" aria-labelledby="accordion1-heading-1">
                    <div class="card-body">
                      <p>
                        The conceptualization stage involves ideas exchange& formation, financing & budgeting, and proceeding to the pre-production stage which involves the scripting, location finding, determining  camera angles, light formation, casting e.t.c.
                      </p>
                    </div>
                  </div>
                </article>
                <!-- Bootstrap card-->
                <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".1s">
                  <div class="card-header" id="accordion1-heading-2" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-collapse-2" aria-controls="accordion1-collapse-2" aria-expanded="false">Production
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse" id="accordion1-collapse-2" role="tabpanel" aria-labelledby="accordion1-heading-2">
                    <div class="card-body">
                      <p>
                        Afterwards he proceeds to production stage which he works alongside with his effective  production crew at Prodigy's film studio. During this stage, he films the video project with no iota of disappointment or dissatisfaction from the client.
                      </p>
                    </div>
                  </div>
                </article>
                <!-- Bootstrap card-->
                <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".15s">
                  <div class="card-header" id="accordion1-heading-3" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-collapse-3" aria-controls="accordion1-collapse-3" aria-expanded="false">Post Production
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse" id="accordion1-collapse-3" role="tabpanel" aria-labelledby="accordion1-heading-3">
                    <div class="card-body">
                      <p>
                        Finally, he proceeds to post production stage which involves the editing of the project,  assembling raw footage, selecting usable sequences, tweaking content, and utilizing specialized software to produce exceptional final products for video productions.  With proficiency in a broad range of software applications and technical tools.
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-8 text-center" style="margin:0 auto">
                  <p>Most importantly, the primary purpose of working with Yemi is to visualizing and executing your vision through keen cinematography and sequencing talents while creatively designing your marketable desirable end products.</p>
                </div>
              </div>
              <div class="progress-linear-outer wow-outer">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonials-->
      <section class="section section-lg text-center">
        <div class="container">
          <h3 class="section-title">What My Clients Say</h3>
          <div class="slick-widget-testimonials wow fadeIn">
            <div class="slick-slider carousel-child" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-sm-items="3" data-md-items="5" data-lg-items="5" data-xl-items="5" data-center-mode="true" data-slide-to-scroll="1">
              <div class="item wow-outer"><img class="wow slideInLeft" src="<?php echo base_url() ?>public/images/eobilo.jpeg" alt="" width="96" height="96"/>
              </div>
              <div class="item wow-outer"><img class="wow slideInLeft" src="<?php echo base_url() ?>public/images/testimonials-person-2-96x96.jpg" alt="" width="96" height="96"/>
              </div>
              <div class="item wow-outer"><img class="wow slideInLeft" src="<?php echo base_url() ?>public/images/testimonials-person-3-96x96.jpg" alt="" width="96" height="96"/>
              </div>
            </div>
            <!-- Slick Carousel-->
            <div class="slick-slider carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-items="1" data-fade="true" data-child="#child-carousel" data-for="#child-carousel">
              <div class="item">
                <!-- Quote Light 1-->
                <blockquote class="quote-light">
                  <cite class="quote-light-cite">Edmund Obilo</cite>
                  <p class="quote-light-caption">Bilficom Media & Systems</p><span class="icon quote-light-mark linearicons-quote-open"></span>
                  <div class="quote-light-text">
                    <p>Prodigy is a excellent professional. He is a leader in the industry. We have been together on numerous projects and they were all great. I recommend him anytime.</p>
                  </div>
                </blockquote>
              </div>
              <div class="item">
                <!-- Quote Light 2-->
                <blockquote class="quote-light">
                  <cite class="quote-light-cite">You Fit Fly</cite>
                  <p class="quote-light-caption">You Fit Fly</p><span class="icon quote-light-mark linearicons-quote-open"></span>
                  <div class="quote-light-text">
                    <p>Prodigy is a excellent professional. He is a leader in the industry. We have been together on numerous projects and they were all great. I recommend him anytime.</p>
                  </div>
                </blockquote>
              </div>
              <div class="item">
                <!-- Quote Light 2-->
                <blockquote class="quote-light">
                  <cite class="quote-light-cite">Farm Konnect</cite>
                  <p class="quote-light-caption">CEO, FarmKonnect</p><span class="icon quote-light-mark linearicons-quote-open"></span>
                  <div class="quote-light-text">
                    <p>Prodigy is a excellent professional. He is a leader in the industry. We have been together on numerous projects and they were all great. I recommend him anytime.</p>
                  </div>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg text-center">
        <div class="container">
          <h3 class="section-title">Partners</h3>
          <div class="slick-widget-testimonials wow fadeIn">
            <div class="partners">
              <div class="item"><img src="<?= base_url() ?>public/images/farm.png" class="img-responsive1"> </div>
              <div class="item" style="padding-top:20px"><img src="<?= base_url() ?>public/images/ufitfly.png" class="img-responsive1"> </div>
              <div class="item"><img src="<?= base_url() ?>public/images/bil.png" class="img-responsive1"> </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-xs bg-gray-700 text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-10 col-md-12">
              <div class="box-cta-thin">
                <h4 class="wow-outer"><span class="wow slideInRight">Looking for a <span class="text-italic">quality production with class?</span> </span></h4>
                <div class="wow-outer button-outer"><a class="button button-primary button-winona wow slideInLeft" href="#book">Book me</a></div>
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