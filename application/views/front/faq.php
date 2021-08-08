<?php $this->load->view('front/sub/header') ?>
<style>
    .panel-title > a:before {
        float: right !important;
        font-family: FontAwesome;
        content:"\f068";
        padding-right: 5px;
    }
    body{
    background-color:#f5f5f5;
    }
    .panel-title > a.collapsed:before {
        float: right !important;
        content:"\f067";
    }
    .panel-title > a:hover, 
    .panel-title > a:active, 
    .panel-title > a:focus  {
        text-decoration:none;
    }
    .panel-heading {
        padding: 20px 15px;
        border-bottom: 1px solid transparent;
        border-top-right-radius: 3px;
        border-top-left-radius: 3px;
    }
    .panel {
        margin-bottom: 20px !important;
        background-color: #ffffff;
        border: 1px solid transparent;
        -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
        box-shadow: 15px 16px 13px 8px rgb(4 4 4 / 5%);
    }
    .jumbotron {
        padding-top: 30px;
        padding-bottom: 30px;
        margin-bottom: 30px;
        color: inherit;
        background-color: #00bcd4;
        text-align: center;
        color: #fff;
    }
    .panel-body{
        padding-left:20px;
    }
</style>
<!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cerulean/bootstrap.min.css'><link rel="stylesheet" href="./style.css">-->
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
                      <span class="wow slideInUp" data-wow-delay="1.5s">Frequently Asked Questions.</span>
                    </span>
                    <p class="font-weight-exlight-p wow-outer">
                      <span class="wow slideInUp" data-wow-delay="3.1s">
                        We have curated some commonly aksed questions that could help you understand our service better.
                      </span>
                    </p>
                  </h1>
                  <div class="mt-5">
                    <div class="left-50">
                      <div class="wow-outer"><a class="button button-md button-primary button-winona wow slideInRight" href="<?= Utils::appUrl ?>signup" data-wow-delay="4.3s">Apply Today!</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-lg-5 col-xl-5 col-offset-1 banner-img wow fadeInRight" data-wow-delay="3.3s">
                  <div class="banner-img-item faq">
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <section class="section bg-gray-100">
        <div class="range justify-content-xl-between">
          <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="mt-4 mb-0">Frequently Asked Questions By Students</h3>
                <div class="panel-group mt-2" id="accordion" role="tablist" aria-multiselectable="true">
                <?php 
                    $count = 0;
                    foreach($faqArr as $fq): $count++; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<?= $count; ?>">
                            <h4 class="panel-title">
                            <a class="<?= ($count==1?'':'collapsed')?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $count; ?>" aria-expanded="<?= ($count==1?'true':'false')?>" aria-controls="collapse<?= $count; ?>">
                                <?= $fq->title ?>
                            </a>
                            </h4>

                        </div>
                        <div id="collapse<?= $count; ?>" class="panel-collapse <?= ($count==1?'':'collapse in1')?>" role="tabpanel" aria-labelledby="heading<?= $count; ?>">
                            <div class="panel-body"><?= $fq->descr ?></div>
                        </div>
                    </div> 
                    <?php endforeach; ?>
                </div>
                </div>
            </div>
            <div class="col-md-12">
              <h3 class="mt-4 mb-0">Frequently Asked Questions By Institutions</h3>
                <div class="panel-group mt-2" id="accordion" role="tablist" aria-multiselectable="true">
                <?php 
                    $count = count($faqArr);
                    foreach($faqUni as $fq): $count++; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<?= $count; ?>">
                            <h4 class="panel-title">
                            <a class="<?= ($count==1?'':'collapsed')?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $count; ?>" aria-expanded="<?= ($count==1?'true':'false')?>" aria-controls="collapse<?= $count; ?>">
                                <?= $fq->title ?>
                            </a>
                            </h4>

                        </div>
                        <div id="collapse<?= $count; ?>" class="panel-collapse <?= ($count==1?'':'collapse in1')?>" role="tabpanel" aria-labelledby="heading<?= $count; ?>">
                            <div class="panel-body"><?= $fq->descr ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
              </div>
              <div class="col-md-12">
              <h3 class="mt-4 mb-0">Frequently Asked Questions By Role Models</h3>
                <div class="panel-group mt-2" id="accordion" role="tablist" aria-multiselectable="true">
                <?php 
                    $count = count($faqArr) + count($faqUni);
                    foreach($faqRole as $fq): $count++; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<?= $count; ?>">
                            <h4 class="panel-title">
                            <a class="<?= ($count==1?'':'collapsed')?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $count; ?>" aria-expanded="<?= ($count==1?'true':'false')?>" aria-controls="collapse<?= $count; ?>">
                                <?= $fq->title ?>
                            </a>
                            </h4>

                        </div>
                        <div id="collapse<?= $count; ?>" class="panel-collapse <?= ($count==1?'':'collapse in1')?>" role="tabpanel" aria-labelledby="heading<?= $count; ?>">
                            <div class="panel-body"><?= $fq->descr ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
              </div>
              <div class="col-md-12">
              <h3 class="mt-4 mb-0">Frequently Asked Questions By Philanthropist</h3>
                <div class="panel-group mt-2" id="accordion" role="tablist" aria-multiselectable="true">
                <?php 
                    $count = count($faqArr) + count($faqUni) + count($faqRole);
                    foreach($faqPhil as $fq): $count++; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<?= $count; ?>">
                            <h4 class="panel-title">
                            <a class="<?= ($count==1?'':'collapsed')?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $count; ?>" aria-expanded="<?= ($count==1?'true':'false')?>" aria-controls="collapse<?= $count; ?>">
                                <?= $fq->title ?>
                            </a>
                            </h4>

                        </div>
                        <div id="collapse<?= $count; ?>" class="panel-collapse <?= ($count==1?'':'collapse in1')?>" role="tabpanel" aria-labelledby="heading<?= $count; ?>">
                            <div class="panel-body"><?= $fq->descr ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
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