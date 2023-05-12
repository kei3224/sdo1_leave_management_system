<!doctype html>
<html lang="en">

<head>
  <title>Carousel 02</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.10/css/ionicons.min.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>


  <!-- Header-->
  <header class="bg-dark py-5 d-flex align-items-center" id="main-header">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-5 fw-bolder"><?php echo $_settings->info('name') ?></h1>
        <p class="lead fw-normal text-white-50 mb-0 mt-4"><a class="btn btn-default btn-lg bg-lightblue" href='<?php echo base_url . 'admin' ?>'>Login</a></p>
      </div>
    </div>
  </header>
  
  <!-- Section-->
  <style>
    .book-cover {
      object-fit: contain !important;
      height: auto !important;
    }
  </style>
  <section class="py-3">
    <div class="container px-4 px-lg-5 mt-5">
      <?php require_once('about.html') ?>
    </div>
  </section>
  <!--Team Carousel-->
  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="heading-section mb-5 pb-md-4">Meet the HR Unit</h2>
        </div>
        <div class="col-md-12">
          <div class="featured-carousel owl-carousel">
            <!-- <div class="item">
								<div class="work">
									<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(images/work-3.jpg);">
										<a href="#" class="icon d-flex align-items-center justify-content-center">
											<span class="ion-ios-search"></span>
										</a>
									</div>
									<div class="text pt-3 w-100 text-center">
										<h3><a href="#">Work 03</a></h3>
										<span>Web Design</span>
									</div>
								</div>
							</div> -->
            <div class="item">
              <div class="work">
                <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(img/def_image.jpg);">
                  </a>
                </div>
                <div class="text pt-3 w-100 text-center">
                  <h3><a href="#">Juan Dela Cruz</a></h3>
                  <span>Administrative Officer V</span>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="work">
                <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(img/def_image.jpg);">
                  </a>
                </div>
                <div class="text pt-3 w-100 text-center">
                  <h3><a href="#">Juan Dela Cruz</a></h3>
                  <span>Administrative Officer V</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="work">
                <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(img/def_image.jpg);">
                </div>
                <div class="text pt-3 w-100 text-center">
                  <h3><a href="#">Juan Dela Cruz</a></h3>
                  <span>Administrative Officer V</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="work">
                <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(img/def_image.jpg);">
                </div>
                <div class="text pt-3 w-100 text-center">
                  <h3><a href="#">Juan Dela Cruz</a></h3>
                  <span>Administrative Officer V</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="work">
                <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(img/def_image.jpg);">
                </div>
                <div class="text pt-3 w-100 text-center">
                  <h3><a href="#">Juan Dela Cruz</a></h3>
                  <span>Administrative Officer V</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="work">
                <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(img/def_image.jpg);">
                </div>
                <div class="text pt-3 w-100 text-center">
                  <h3><a href="#">Juan Dela Cruz</a></h3>
                  <span>Administrative Officer V</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  s
  <!--Faqs-->
  <section class="ftco-section">
    <div class="faq_area section_padding_130" id="faq">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <h3><span>Frequently </span> Asked Questions</h3>
              <p>Leave Management System is </p>
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <!-- FAQ Area-->
          <div class="col-12 col-sm-10 col-lg-8">
            <div class="accordion faq-accordian" id="faqAccordion">
              <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="card-header" id="headingOne">
                  <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How can I install this app?<span class="lni-chevron-up"></span></h6>
                </div>
                <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
                  <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quidem facere deserunt sint animi sapiente vitae suscipit.</p>
                    <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                  </div>
                </div>
              </div>
              <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="card-header" id="headingTwo">
                  <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">The apps isn't installing?<span class="lni-chevron-up"></span></h6>
                </div>
                <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                  <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quidem facere deserunt sint animi sapiente vitae suscipit.</p>
                    <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                  </div>
                </div>
              </div>
              <div class="card border-0 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="card-header" id="headingThree">
                  <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Contact form isn't working?<span class="lni-chevron-up"></span></h6>
                </div>
                <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqAccordion">
                  <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quidem facere deserunt sint animi sapiente vitae suscipit.</p>
                    <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Support Button-->
            <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
              <i class="lni-emoji-sad"></i>
              <p class="mb-0 px-2">Can't find your answers?</p>
              <a href="#"> Contact us</a>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>

  <!--Contact Us-->
  <div class="bg-info contact4 overflow-hiddedn position-relative">
    <!-- Row  -->
    <div class="row no-gutters">
      <div class="container">
        <div class="col-lg-6 contact-box mb-4 mb-md-0">
          <div class="">
            <h1 class="title font-weight-light text-white mt-2">Contact Us</h1>
            <form class="mt-3">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input class="form-control text-white" type="text" placeholder="name">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input class="form-control text-white" type="email" placeholder="email address">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <textarea class="form-control text-white" rows="3" placeholder="message"></textarea>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-center mt-2">
                  <button type="submit" class="btn bg-white text-inverse px-3 py-2"><span> Submit</span></button>
                  <span class="ml-auto text-white align-self-center"><i class="icon-phone mr-2"></i>+63-975-522-2202</span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6 right-image p-r-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.6450042409256!2d120.23077827586165!3d16.031984940432405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33915e6bd6397809%3A0xb5d4969b3f94c651!2sDepEd%20SDO%20I%20Pangasinan!5e0!3m2!1sen!2sph!4v1681458358926!5m2!1sen!2sph" width="700" height="530" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="leave.js"></script>

</body>

</html>