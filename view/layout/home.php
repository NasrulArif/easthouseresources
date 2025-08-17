<style>
  #scroll-container {
    overflow: hidden;
  }

  #scroll-text {
    /* animation properties */
    -moz-transform: translateX(100%);
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
    
    -moz-animation: my-animation 30s linear infinite;
    -webkit-animation: my-animation 30s linear infinite;
    animation: my-animation 30s linear infinite;
  }

  /* for Firefox */
  @-moz-keyframes my-animation {
    from { -moz-transform: translateX(100%); }
    to { -moz-transform: translateX(-100%); }
  }

  /* for Chrome */
  @-webkit-keyframes my-animation {
    from { -webkit-transform: translateX(100%); }
    to { -webkit-transform: translateX(-100%); }
  }

  @keyframes my-animation {
    from {
        -moz-transform: translateX(100%);
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
      }
    to {
      -moz-transform: translateX(-100%);
      -webkit-transform: translateX(-100%);
      transform: translateX(-100%);
    }
  }
</style>

<header id="home" class="page-header page-header-dark bg-img-cover overlay" style='background-image: URL(assets/img/oilrig_01_v1.jpg)'>

    <div class="page-header-content">
        <div class="container">
            <div class="row mb-10 mt-10">
                <div class="col-xl-12 col-lg-10 text-right my-5 d-none d-lg-block">
                    <h2 class="text-white text-muted">East House Resources Sdn. Bhd.</h2>
                    <h1 class="page-header-title mb-5" style="font-family: fantasy; font-size: 4.5em;">Shaping Tomorrow's Technology Today</h1>
                </div>
                <div class="col-12 text-center d-block d-lg-none">
                    <h4 class="text-white text-muted">East House Resources Sdn. Bhd.</h4>
                    <h1 class="page-header-title mb-5" style="font-family: fantasy; font-size: 3.5em; text-shadow: 5px 5px 10px rgba(0, 0, 0, 0.9);">Shaping Tomorrow's Technology Today</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="svg-border-waves text-white pb-0 mb-0">
        <svg class="wave pb-0 mb-0" style="pointer-events: none" fill="currentColor" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
            <defs>
                <style>
                    .a {
                        fill: none;
                    }
                    .b {
                        clip-path: url(#a);
                    }
                    .d {
                        opacity: 0.5;
                        isolation: isolate;
                    }
                </style>
                <clippath id="a"><rect class="a" width="1920" height="75"></rect></clippath>
            </defs>
            <title>wave</title>
            <g class="b"><path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path></g>
            <g class="b"><path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path></g>
            <g class="b"><path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path></g>
            <g class="b"><path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path></g>
        </svg>
        <div id="scroll-container" class="p-0 text-muted m-0">
          <div id="scroll-text" style="font-family: fantasy; font-size: 9em; opacity: 0.5; white-space: nowrap;">EAST HOUSE RESOURCES SDN. BHD.<div>
        </div>
    </div>
</header>

<header class="page-header page-header-dark bg-img-cover py-10" style="min-height: 720px;" style='background-image: url("assets/img/home/1.jpeg");'  id="carou">
    <div class="my-15 py-lg-10"></div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>