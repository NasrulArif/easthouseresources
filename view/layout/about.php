<section class="bg-white py-10" id="about">
    <div class="container">
        <div class="row">
          
            <div class="col-lg-12 mb-5 mb-lg-0">
            <div class="owl-carousel owl-theme hero-slider">
                  <?php
                      $slides = array(
                          //array(image, small title, big title, button 1, url button, button 2, url button) - leave empty "" if not applicable
                          array("assets/img/works/1.jpeg", "AGRONETICS",  "LETS FUTURIZE GROWTH", "Get Started", "https://wa.me/60176454151", "Our Works", "#works"),
                          array("assets/img/works/2.jpeg", "AGRONETICS",  "LETS FUTURIZE GROWTH", "Get Started", "https://wa.me/60176454151", "Our Works", "#works"),
                          array("assets/img/works/3.jpeg","AGRONETICS",  "LETS FUTURIZE GROWTH", "Get Started", "https://wa.me/60176454151", "Our Works", "#works"),
                          array("assets/img/works/4.jpeg", "AGRONETICS",  "LETS FUTURIZE GROWTH", "Get Started", "https://wa.me/60176454151", "Our Works", "#works"),
                          array("assets/img/works/5.jpeg", "AGRONETICS",  "LETS FUTURIZE GROWTH", "Get Started", "https://wa.me/60176454151", "Our Works", "#works"),
                          array("assets/img/works/6.jpeg", "AGRONETICS",  "LETS FUTURIZE GROWTH", "Get Started", "https://wa.me/60176454151", "Our Works", "#works"),
                          array("assets/img/works/7.jpeg", "AGRONETICS",  "LETS FUTURIZE GROWTH", "Get Started", "https://wa.me/60176454151", "Our Works", "#works"),
                          array("assets/img/works/8.jpeg", "AGRONETICS",  "LETS FUTURIZE GROWTH", "Get Started", "https://wa.me/60176454151", "Our Works", "#works"),
                          array("assets/img/works/9.jpeg", "AGRONETICS",  "LETS FUTURIZE GROWTH", "Get Started", "https://wa.me/60176454151", "Our Works", "#works"),
                          array("assets/img/works/10.jpeg", "AGRONETICS",  "LETS FUTURIZE GROWTH", "Get Started", "https://wa.me/60176454151", "Our Works", "#works")
                      );

                      foreach($slides as $slide)
                      {
                          $image      = !empty($slide[0]) ? $slide[0] : "";
                          $sm_title   = !empty($slide[1]) ? $slide[1] : "";
                          $bg_title   = !empty($slide[2]) ? $slide[2] : "";
                          $btn_one    = !empty($slide[3]) ? '<a href="'.$slide[4].'" class="btn btn-brand" target="_blank">'.$slide[3].'</a>' : "";
                          $btn_two    = !empty($slide[5]) ? '<a href="'.$slide[6].'" class="btn btn-outline-light ms-3">'.$slide[5].'</a>' : "";

                          echo '<div class="slide" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('.$image.'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-12 text-center text-white">
                                              <h1 class="display-1 text-white">'.$sm_title.'</h1>
                                              <h2 class="text-white text-uppercase my-4">'.$bg_title.'</h2>
                                              '.$btn_one.'
                                              '.$btn_two.'
                                          </div>
                                      </div>
                                  </div>
                              </div>';
                      }
                  ?>
              </div>
                <h1 class="mb-5" style="font-size: 3em;">COMPANY BACKGROUND</h1>
                <p class="text-justify">
                    EAST HOUSE RESOURCES SDN BHD was incorporated in 2021 and located in Kuala Terengganu,
                    Terengganu. The company is wholly owned by Bumiputera and registered with Malaysia’s Ministry
                    of Finance (MoF). The Company was formerly known as THE SEVENTEEN MEDIA SDN BHD,
                    established on 15 July 2019. With our experience and growth, it is now known as East House
                    Resources Sdn Bhd.
                </p>  
                <p class="mb-5 text-justify">
                    The company is to engage in the business of research and development, additive manufacturing,
                    IoT development, robotic assembly, automation systems, maintenance, and the supply of goods
                    or services for all business sectors. It will also be involved in trading mechanical and electrical related products, as well as buying, selling, renting, and operating self-owned or leased real estate,
                    including land.
                </p>
            </div>

            <div class="col-lg-6 mb-lg-0 divider-right" data-aos="fade">
                <div class="testimonial p-lg-5">
                    <div class="testimonial-brand text-gray-600">
                        <h1><i class="fa fa-bullseye fa-2x"></i>&nbsp;&nbsp;<span>VISION</span></h1>
                    </div>
                    <p class="text-gray-800 text-justify">
                        Our organization will make an effort to find solutions related to mechanical,
                        electrical, and programming issues so that clients can raise their level of living and be
                        prepared to deal with difficulties posed by ever-more advanced technology.
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade" data-aos-delay="100">
                <div class="testimonial p-lg-5">
                    <div class="testimonial-brand text-gray-600">
                        <h1><i class="fa fa-hiking fa-2x"></i>&nbsp;&nbsp;<span>MISSION</span></h1>
                    </div>
                    <p class="text-gray-800 text-justify">
                        Enhancing people's lives using the most advanced technology.
                    </p>
                </div>
            </div>

            <div class="col-lg-12 mb-lg-0 divider-top" data-aos="fade">
                <div class="testimonial p-lg-5">
                    <div class="testimonial-brand text-gray-600">
                    <h1><i class="fa fa-crosshairs fa-2x"></i>&nbsp;&nbsp;<span>OBJECTIVE</span></h1>
                    </div>
                    <ul class="text-gray-800 text-justify">
                        <li>To develop and modify a new technology to make it easier for users.
                        </li>
                        <li>
                            To conduct business that involves purchasing, selling, reselling, importing, exporting,
                            transporting, storing, developing, promoting, marketing, or providing, trading, or
                            dealing in any other manner with any type of goods in Malaysia or overseas on a
                            retail or wholesale basis.
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

