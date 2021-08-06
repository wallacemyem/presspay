<?php $this->load->view('front/sub/header') ?>
</head>


<body>
    <?php $this->load->view('front/sub/menu') ?>
    <div class="slider" id="slider">
        <!-- slider -->
        <!-- 
        <div>
            <div class="student-slider-img"><img src="<?= base_url() ?>public/images/4.jpg" alt="" class="">
                <div class="container">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="slider-captions">
                            <h1 class="slider-title">Interviews At Its Best</h1>
                            <p class="slider-text d-none d-xl-block d-lg-block d-md-block">In disucssion with Chief Tola Adeniyi on pressing national issues.</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="student-slider-img"><img src="<?= base_url() ?>public/images/2.jpg" alt="" class="">
            <div class="container">
                  <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="slider-captions">
                        <!-- slider-captions -->
                        <h1 class="slider-title">Driving National Development</h1>
                        <p class="slider-text d-none d-xl-block d-lg-block d-md-block">Media is a powerful tool for driving national development</p>
                        </div>
                    <!-- /.slider-captions -->
                </div>
            </div>
        </div>
        <div>
            <div class="student-slider-img"><img src="<?= base_url() ?>public/images/3.jpg" alt="" class="">
                <div class="container">
                      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="slider-captions">
                            <!-- slider-captions -->
                            <h1 class="slider-title">Conversation with INEC Chair</h1>
                            <p class="slider-text d-none d-xl-block d-lg-block d-md-block">Disucssing with the INEC Chair on democracy and our electoral systems</p>
                        </div>
                        <!-- /.slider-captions -->
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <!--<div class="feature-list-bar mt-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 "><p><i class="fa fa-check-circle fa-success"></i> Quality </p></div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 "><p><i class="fa fa-check-circle fa-success"></i> Innovation</p></div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 "><p><i class="fa fa-check-circle fa-success"></i> Technology </p></div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 "><p><i class="fa fa-check-circle fa-success"></i> Eco-Friendly</p> </div>

            </div>
        </div>
    </div>-->

    <div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">
                    <div class="section-title mb60 text-center">
                        <!-- section title start-->
                        <h1>Welcome to <?= Utils::siteName ?> </h1>
                        <p><?= $home['intro'] ?></p>
                    </div>
                    <!-- /.section title start-->
                </div>
         
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pdb80 text-center no-bullet">
                    <p class="lead"><?= @$home['lead'] ?></p>
                    <?= @$home['body'] ?>
                </div>
                <!--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="section-about-video">
                        <div class="about-img"><img src="<?= base_url() ?>public/images/vp_002.jpg" alt=""></div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <div class="section-space80 bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="section-title mb60 text-center">
                        <!-- section title start-->
                        <h1>What We Represent</h1>
                        <!--<p>Nunc iaculis velit a vestibulum cursu estibentum nec ante eu molestie.</p>-->
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="feature feature-icon-style">
                        <div class="feature-icon"> <i class="fa fa-support fa-2x"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">Integrity</h3>
                            <p>Our business is anchored on integrity, that is what we stand for.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="feature feature-icon-style">
                        <div class="feature-icon"><i class="fa fa-suitcase fa-2x"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">Professionalism</h3>
                            <p>We are professional in our job and the way we deliver on our promise.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="feature feature-icon-style">
                        <div class="feature-icon"> <i class="fa fa-certificate fa-2x"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">Excellence </h3>
                            <p>It is not enough to deliver, but we go the extra mile always in search of perfection and excellence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="feature feature-icon-style">
                        <div class="feature-icon"><i class="fa fa-road fa-2x"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">Leadership</h3>
                            <p>Ours is of enviable leadership and innovative solutions in media. We are always ahead of the competition.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space80 bg-gradient call-to-action">
        <div class="container">
            <div class="row">
                <div class=" offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="text-center">
                        <!-- section title start-->
                        <h1 class="text-white text-capitalize">Be Equipped for the future</h1>
                        <p class="text-white">Our range of courses provide you with the cutting edge tools and skills you need to stand out in the media space.</p>
                        <a href="<?= base_url() ?>courses" class="btn btn-default border">View Courses</a>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('front/sub/footer'); ?>
    </body>


</html>
