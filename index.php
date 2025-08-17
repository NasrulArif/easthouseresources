<!DOCTYPE html>
<html lang="en">
    <?php include_once "view/layout/head.php"; ?>
    <body>
        <div id="layoutDefault">
            <div id="layoutDefault_content">
                <main>
                    <?php include_once "view/layout/nav.php"; ?>
                    
                    <?php include_once "view/layout/home.php"; ?>

                    <?php include_once "view/layout/about.php"; ?>

                    <?php include_once "view/layout/services.php"; ?>

                    <?php include_once "view/layout/products.php"; ?>

                    <?php include_once "view/layout/works.php"; ?>

                    <?php include_once "view/layout/team.php"; ?>

                    <?php include_once "view/layout/clients.php"; ?>
                    
                </main>
            </div>
            <?php include_once "view/layout/footer.php"; ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script>
            $(document).ready(function() {
                AOS.init({
                    disable: 'mobile',
                    duration: 600,
                    once: true
                });

                document.addEventListener("contextmenu", function (e){
                    e.preventDefault();
                }, false);

                $(document).on("click",".anch",function(e){
                    console.log("TEst");
                    e.preventDefault();
                    var id = $(this).attr("href"),
                        topSpace = 10;
                    $('html, body').animate({
                    scrollTop: $(id).offset().top - (topSpace + 100)
                    }, 800);
                });

                $('#projects-slider2').owlCarousel({
                    loop: true,
                    nav: false,
                    items: 2,
                    dots: true,
                    smartSpeed: 600,
                    center: true,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2,
                            margin: 8,
                        }
                    }
                })

                $('#projects-slider3').owlCarousel({
                    loop: true,
                    nav: false,
                    items: 2,
                    dots: true,
                    smartSpeed: 600,
                    center: true,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2,
                            margin: 8,
                        }
                    }
                })
            });

            var images = [];
            // images[0] = "assets/img/home/1.jpeg";
            // images[1] = "assets/img/home/2.jpeg";
            images[0] = "assets/img/home/1a.JPG";
            images[1] = "assets/img/home/2a.JPG";
            images[2] = "assets/img/home/3.JPG";
            // images[3] = "assets/img/home/4.jpeg";
            images[3] = "assets/img/home/11.JPG";
            images[4] = "assets/img/home/12.JPG";
            images[5] = "assets/img/home/13.JPG";
            images[6] = "assets/img/home/14.JPG";
            images[7] = "assets/img/home/5.JPG";
            images[8] = "assets/img/home/6.JPG";
            images[9] = "assets/img/home/7.JPG";
            images[10] = "assets/img/home/8.JPG";
            images[11] = "assets/img/home/9.JPG";
            // images[12] = "assets/img/home/10.jpeg";
            images[12] = "assets/img/home/13a.JPG";

            var i = 0;
            setInterval(fadeDivs, 2500);

            function fadeDivs() {
                i = i < images.length ? i : 0;
                console.log(i)
                $('#carou').fadeOut(0, function(){
                    $(this).attr('style', "background-image: url(" + images[i] + "); background-size: cover; no-repeat; transition: background 0.5s linear; -moz-transition: background 0.5s linear; -webkit-transition: background 0.5s linear; -o-transition: background 0.5s linear;").fadeIn(1000);
                })
                i++;
            }
        </script>
    </body>
</html>
