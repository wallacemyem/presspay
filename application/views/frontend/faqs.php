<?php $this->load->view('frontend/layout/header') ?>
<!-- Search Area -->
<div class="search-section dark-mode-texts">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-md-10">
            <div class="search-content text-center">
              <h1 class="search-content__heading">
                How can we help you?
              </h1>
              <div class="search-form">
                <form action="./">
                  <input type="text" placeholder="Type keywords to find answers">
                  <button type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </form>
              </div>
              <p class="search-content__text">
              We have curated some commonly aksed questions that could help you understand our service better.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ .Search Area -->
    <!-- Testimonial Area -->
    <div class="faqs-area faqs-area--inner bg-default-6">
      <div class="container">
        <div class="row justify-content-center">
          <div class="section-title section-title--l7 text-center">
            <h3 class="section-title__heading">
              Frequently Asked Question
            </h3>
          </div>
        </div>
        <div class="faq-body">
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <div class="row justify-content-center justify-md-content-start">
                <div class="col-xl-3 col-lg-4 col-md-5 col-xs-8 mb-6 mb-lg-0">
                  <div class="faq-tabs">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php 
                    $active = 0;
                    foreach($list as $fq): $active++; ?>
                      <a class="nav-link <?= ($active==1?'active':'')?>" id="v-pills-general-tab" data-bs-toggle="pill" href="#<?= $fq->name ?>" role="tab" aria-controls="<?= $fq->name ?>" aria-selected="<?= ($active==1?'true':'')?>"><?= $fq->full_name ?></a>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
                
                <div class="col-xl-9 col-lg-8 col-md-11">
                
                  <div class="tab-content" id="v-pills-tabContent">
                
                    <div class="tab-pane fade show" id="student" role="tabpanel" aria-labelledby="student">
                      <!-- single Accordion -->
                      
                      <div class="accordion accordion--inner" id="accordionExample">
                      <?php 
                    $active = 0;
                    foreach($faqArr as $fq): $active++; ?>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading<?= $active ?>">

                            <button class="accordion-button <?= ($active==1?'':'collapsed')?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $active ?>" aria-expanded="true" aria-controls="collapse<?= $active ?>">
                            <?= $fq->title ?>
                            </button>
                          </h2>
                          <div id="collapse<?= $active ?>" class="accordion-collapse collapse <?= ($active==1?'show':'')?>" aria-labelledby="heading<?= $active ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <?= $fq->descr ?>
                            </div>
                          </div>
                        </div>
                        <?php endforeach; ?>
                      </div>
                    
                    </div>

                    <div class="tab-pane fade show" id="uni" role="tabpanel" aria-labelledby="uni">
                      <!-- single Accordion -->
                      
                      <div class="accordion accordion--inner" id="accordionExample">
                      <?php 
                    $active = 0;
                    foreach($faqUni as $fq): $active++; ?>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading<?= $active ?>">

                            <button class="accordion-button <?= ($active==1?'':'collapsed')?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $active ?>" aria-expanded="true" aria-controls="collapse<?= $active ?>">
                            <?= $fq->title ?>
                            </button>
                          </h2>
                          <div id="collapse<?= $active ?>" class="accordion-collapse collapse <?= ($active==1?'show':'')?>" aria-labelledby="heading<?= $active ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <?= $fq->descr ?>
                            </div>
                          </div>
                        </div>
                        <?php endforeach; ?>
                      </div>
                    
                    </div>
                    <div class="tab-pane fade show" id="phil" role="tabpanel" aria-labelledby="phil">
                      <!-- single Accordion -->
                      
                      <div class="accordion accordion--inner" id="accordionExample">
                      <?php 
                    $active = 0;
                    foreach($faqPhil as $fq): $active++; ?>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading<?= $active ?>">

                            <button class="accordion-button <?= ($active==1?'':'collapsed')?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $active ?>" aria-expanded="true" aria-controls="collapse<?= $active ?>">
                            <?= $fq->title ?>
                            </button>
                          </h2>
                          <div id="collapse<?= $active ?>" class="accordion-collapse collapse <?= ($active==1?'show':'')?>" aria-labelledby="heading<?= $active ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <?= $fq->descr ?>
                            </div>
                          </div>
                        </div>
                        <?php endforeach; ?>
                      </div>
                    
                    </div>

                    <div class="tab-pane fade show" id="model" role="tabpanel" aria-labelledby="model">
                      <!-- single Accordion -->
                      
                      <div class="accordion accordion--inner" id="accordionExample">
                      <?php 
                    $active = 0;
                    foreach($faqRole as $fq): $active++; ?>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading<?= $active ?>">

                            <button class="accordion-button <?= ($active==1?'':'collapsed')?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $active ?>" aria-expanded="true" aria-controls="collapse<?= $active ?>">
                            <?= $fq->title ?>
                            </button>
                          </h2>
                          <div id="collapse<?= $active ?>" class="accordion-collapse collapse <?= ($active==1?'show':'')?>" aria-labelledby="heading<?= $active ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <?= $fq->descr ?>
                            </div>
                          </div>
                        </div>
                        <?php endforeach; ?>
                      </div>
                    
                    </div>
                </div>
      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!--/ .Testimonial Area -->
    <?php $this->load->view('frontend/layout/cta') ?>
    <?php $this->load->view('frontend/layout/footer') ?>