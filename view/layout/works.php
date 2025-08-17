<style>
  .project {
    position: relative;
    overflow: hidden;
    z-index: 2;
  }

  .project h6 {
      font-weight: 400;
  }

  .project h6::before {
      content: "";
      height: 2px;
      width: 30px;
      display: inline-block;
      background: var(--brand);
      vertical-align: middle;
      margin-right: 10px;
  }


  .project .overlay {
      width: 100%;
      height: 1JPG20px;
      position: absolute;
      bottom: 0;
      left: 0;
      background: linear-gradient(180deg, rgba(255, 76, 41, 0) 0%, var(--dark) 100%);
  }

  .project .content {
      position: absolute;
      left: 10%;
      bottom: 10%
  }

  .project h2,
  .project h6 {
      color: #fff;
  }
</style>
<section class="bg-light py-10" id="works">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="text-2xl text-uppercase-expanded text-primary mb-2">Works</h1>
                    <h3 class="text-muted mb-5">Showcase of our accomplished projects.</h3>
                </div>
            </div>
            <div class="col-lg-12">
              <div id="projects-slider2" class="owl-theme owl-carousel">
                <?php
                    $clients = array(
                        //array(image, small title, big title) - leave empty "" if not applicable
                        array("assets/img/works/1.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/2.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/3.jpeg", "Works Showcase", "EAST"),
                        array("assets/img/works/4.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/5.JPG", "Works Showcase", "EAST"),
                        array("assets/img/works/6.JPG", "Works Showcase", "EAST"),
                        array("assets/img/works/7.JPG", "Works Showcase", "EAST"),
                        array("assets/img/works/8.JPG", "Works Showcase", "EAST"),
                        array("assets/img/works/8a.JPG", "Works Showcase", "EAST"),
                        array("assets/img/works/8b.JPG", "Works Showcase", "EAST"),
                        array("assets/img/works/8c.JPG", "Works Showcase", "EAST"),
                        array("assets/img/works/8d.JPG", "Works Showcase", "EAST"),
                        array("assets/img/works/9.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/10.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/11.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/12.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/13.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/14.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/15.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/16.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/17.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/18.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/19.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/20.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/21.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/22.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/23.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/24.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/25.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/26.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/27.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/28.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/29.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/30.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/31.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/32.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/33.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/34.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/35.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/36.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/37.jpg", "Works Showcase", "EAST"),
                        array("assets/img/works/38.jpg", "Works Showcase", "EAST")
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
        </div>
    </div>
</section>
