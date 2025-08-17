<section class="bg-white py-10" id="products">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="text-2xl text-uppercase-expanded text-primary mb-2">Products</h1>
                    <h3 class="text-muted mb-5">While our services excel at addressing complex challenges, let's now shift our focus to the impressive array of products we have to offer.</h3>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
              <iframe style="width: 100%; height: 300px;" class="responsive-iframe" src="https://www.youtube.com/embed/kmT7PCA8cLY" title="EAST" allowfullscreen></iframe>        
            </div>
            <div class="col-lg-6" data-aos="fade-up">
              <iframe style="width: 100%; height: 300px;" class="responsive-iframe" src="https://www.youtube.com/embed/TetOdmJr7PE" title="EAST" allowfullscreen></iframe>        
            </div>
            <div class="col-lg-6" data-aos="fade-up">
              <iframe style="width: 100%; height: 300px;" class="responsive-iframe" src="https://www.youtube.com/embed/bFSv83vJYhA" title="EAST" allowfullscreen></iframe>        
            </div>
            <div class="col-lg-6" data-aos="fade-up">
              <iframe style="width: 100%; height: 300px;" class="responsive-iframe" src="https://www.youtube.com/embed/-d4hA_vVjio" title="EAST" allowfullscreen></iframe>        
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-6" data-aos="fade-up">
              <iframe style="width: 100%; height: 300px;" class="responsive-iframe" src="https://www.youtube.com/embed/pcH5x0T83X0" title="EAST" allowfullscreen></iframe>        
            </div>
            <div class="col-lg-3"></div>

            <div class="col-lg-12 mt-10 mb-3">
                <div class="text-center">
                  <h3 class="text-primary">SHOWCASE OF OUR ACCOMPLISHED PRODUCTS</h3>
                </div>                
            </div>

            <div class="col-lg-12">
              <div id="projects-slider3" class="owl-theme owl-carousel">
                <?php
                    $clients = array(
                        //array(image, small title, big title) - leave empty "" if not applicable
                        array("assets/img/products/1.jpeg", "Products Showcase", "EAST"),
                        array("assets/img/products/2.jpeg", "Products Showcase", "EAST"),
                        array("assets/img/products/3.jpeg", "Products Showcase", "EAST"),
                        array("assets/img/products/4.jpeg", "Products Showcase", "EAST"),
                        array("assets/img/products/5.jpeg", "Products Showcase", "EAST"),
                        array("assets/img/products/6.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/7.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/8.jpg", "Products Showcase", "EAST"),
                        array("assets/img/products/9.jpg", "Products Showcase", "EAST"),
                        array("assets/img/products/10.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/11.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/12.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/13.jpeg", "Products Showcase", "EAST"),
                        array("assets/img/products/14.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/15.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/16.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/17.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/18.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/19.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/20.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/21.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/22.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/22a.jpg", "Products Showcase", "EAST"),
                        array("assets/img/products/23.jpeg", "Products Showcase", "EAST"),
                        array("assets/img/products/24.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/25.jpeg", "Products Showcase", "EAST"),
                        array("assets/img/products/26.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/27.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/28.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/29.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/30.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/31.jpeg", "Products Showcase", "EAST"),
                        array("assets/img/products/32.jpeg", "Products Showcase", "EAST"),
                        array("assets/img/products/33.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/34.JPG", "Products Showcase", "EAST"),
                        array("assets/img/products/35.JPG", "Products Showcase", "EAST")
                    );

                    foreach($clients as $client)
                    {
                        $image      = !empty($client[0]) ? $client[0] : "";
                        $sm_title   = !empty($client[1]) ? $client[1] : "";
                        $bg_title   = !empty($client[2]) ? $client[2] : "";

                        echo '<div class="project" style="max-height: 600px; ">
                                <div class="overlay"></div>
                                <div class="image-container" style="max-height: 450px; overflow: hidden; display: inline-block;">
                                    <img src="'.$image.'" alt="" style="height: 100%;">
                                </div>
                                <div class="content">
                                    <h2>'.$bg_title.'</h2>
                                    <h6>'.$sm_title.'</h6>
                                </div>
                            </div>';
                    }
                ?>
              </div>
            </div>

            <div class="col-lg-12 my-5">
              <div class="text-center">
                <h5 class="text-dark mb-3">Refer the product datasheet for more information</h5>
                <a class="btn-dark btn rounded-pill px-4 ml-lg-4 mb-3" href="MSSQ_Monitoring_System.pdf" download style="font-size: 0.8em">
                  MSSQ Monitoring System Datasheet <i class="fa fa-download"></i> 
                </a>
                <a class="btn-dark btn rounded-pill px-4 ml-lg-4 mb-3" href="Gas_Detector_Casing.pdf" download style="font-size: 0.8em">
                Gas Detector Casing Datasheet <i class="fa fa-download"></i> 
                </a>
              </div>
            </div>
        </div>
    </div>
    
</section>