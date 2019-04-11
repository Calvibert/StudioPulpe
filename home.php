<!DOCTYPE html>
<!--  Last Published: Mon Mar 25 2019 23:47:48 GMT+0000 (UTC)  -->
<html>

<head>
  <meta charset="utf-8">
  <title>Studio Pulpe</title>
  <meta content="Pulpe est une boîte de production audiovisuelle regroupant réalisateurs, monteurs et motion designers. Nous réalisons des productions vidéos clé en main dotées d&#x27;une facture visuelle singulière." name="description">
  <meta content="Studio Pulpe" property="og:title">
  <meta content="Pulpe est une boîte de production audiovisuelle regroupant réalisateurs, monteurs et motion designers. Nous réalisons des productions vidéos clé en main dotées d&#x27;une facture visuelle singulière." property="og:description">
  <meta content="https://i.ibb.co/xJPdZWh/51495299-612082629213756-1802479610990952448-n.png" property="og:image">
  <meta content="summary" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/studiopulpev3.webflow.css" rel="stylesheet" type="text/css">
  <style>
    @media (min-width:992px) {
      html.w-mod-js [data-w-id="01bf1bcf-4a00-a789-353e-d719c99a361b"] {
        opacity: 0;
      }

      html.w-mod-js [data-w-id="01bf1bcf-4a00-a789-353e-d719c99a364c"] {
        opacity: 0;
      }

      html.w-mod-js [data-w-id="01bf1bcf-4a00-a789-353e-d719c99a367d"] {
        opacity: 0;
      }

      html.w-mod-js [data-w-id="01bf1bcf-4a00-a789-353e-d719c99a36b1"] {
        opacity: 0;
      }
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Droid Sans:400,700", "PT Sans:400,400italic,700,700italic"]
      }
    });
  </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
    ! function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
  <link href="/images/pulpe_logo_v05.png" rel="shortcut icon" type="image/x-icon">
  <link href="/images/webclip.png" rel="apple-touch-icon">
  <style type="text/css">
    body {
      overflow-x: hidden;
    }

    .player .vp-video-wrapper {
      background-color: #fff;
    }
  </style>
</head>



<body class="body">
  <!-- video intro -->
  <div id="preload" class="preload-container">
    <div class="preload">
      <div class="w-embed w-iframe w-script">
        <script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>
        <iframe class="rock" id="vi-banner-video" src="https://player.vimeo.com/video/313657113?background=1&loop=0&api=1&player_id=vi-banner-video" style="position: absolute; top: 0; left: 0; z-index: 6;" width="100%" height="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" allow="autoplay"></iframe>
      </div>
      <div class="gif-preload"></div>
    </div>
    <div class="sound-m"></div>
    <div id="volume" class="div-sound">
      <div id="volume-off" class="volume-off"><img src="/images/Son.png" alt="" class="sound-speaker"><img src="/images/volume_rayon.png" alt="" class="sound-on hidden"></div>
      <div id="volume-on" class="volume-on"><img src="/images/Son.png" alt="" class="sound-speaker"><img src="/images/volume_rayon.png" alt="" class="sound-on"></div>
    </div>
    <div id="skip" class="button skip">
      <div>Passer</div>
    </div>
    <div class="div-loading"><img src="/images/dot.png" alt="" class="dot1"><img src="/images/dot.png" alt="" class="dot2 hidden"><img src="/images/dot.png" alt="" class="dot3 hidden"></div>
  </div>

  <!-- main site -->
  <div id="home" class="site-container">
    <div data-collapse="tiny" data-animation="default" data-duration="400" class="navbar w-nav">
      <a href="/" id="stopvideo" class="brand w-nav-brand w--current">
        <div style="-webkit-transform:translate3d(-100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="letters-container">
          <img src="/images/p_1_Default.png" style="-webkit-transform:translate3d(10PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(10PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(10PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(10PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="letter-p1">
          <img src="/images/u_Default.png" style="-webkit-transform:translate3d(20PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(20PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(20PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(20PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="letter-u">
          <img src="/images/l_Default.png" style="-webkit-transform:translate3d(30PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(30PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(30PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(30PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="letter-l">
          <img src="/images/p_2_Default.png" style="-webkit-transform:translate3d(40PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(40PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(40PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(40PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="letter-p2">
          <img src="/images/e_Default.png" style="-webkit-transform:translate3d(50PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(50PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(50PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(50PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="letter-e">
          <img src="/images/_Default.png" alt="" class="coma">
        </div>
      </a>
      <nav role="navigation" class="nav-menu w-nav-menu">
        <a href="/a-propos" id="stopvideo-about" class="nav-link w-nav-link">à Propos</a>
        <a href="/contact" id="stopvideo-contact" class="nav-link w-nav-link">Contact</a>
      </nav>
      <div class="menu-button w-nav-button" data-ix="menu-button">
        <div class="top-line"></div>
        <div class="middle-line"></div>
        <div class="bottom-line"></div>
      </div>
    </div>
    <div class="hero">
      <div class="div-projects-container">
        <div class="projects-header">
          <div class="text-block">Projets</div>
        </div>
        <div class="projects-listing">
          <div class="project">
            <div class="project__btn">
              <div class="project-name"><a href="/projet/1" style="text-decoration:none; color: #fff">Buck Fever</a></div>
              <div class="project-image"><img src="/images/buck_feve-copy.jpg" srcset="/images/buck_feve-copy-p-500.jpeg 500w, /images/buck_feve-copy-p-800.jpeg 800w, /images/buck_feve-copy-p-1600.jpeg 1600w, /images/buck_feve-copy.jpg 1920w" sizes="(max-width: 479px) 81vw, (max-width: 991px) 80vw, (max-width: 3840px) 50vw, 1920px" alt=""></div>
            </div>
          </div>
          <div class="project">
            <div class="project__btn">
              <div class="project-name"><a href="/projet/2" style="text-decoration:none; color: #fff">Gala FCSQ 2017</a></div>
              <div class="project-image"><img src="/images/Intro-Cuisine-Collective_00161.jpg" srcset="/images/Intro-Cuisine-Collective_00161-p-500.jpeg 500w, /images/Intro-Cuisine-Collective_00161-p-800.jpeg 800w, /images/Intro-Cuisine-Collective_00161-p-1600.jpeg 1600w, /images/Intro-Cuisine-Collective_00161.jpg 1920w" sizes="(max-width: 479px) 81vw, (max-width: 991px) 80vw, (max-width: 3840px) 50vw, 1920px" alt=""></div>
            </div>
            <div style="display:none;" class="project__fixed-overlay">
              <div class="close-project">
                <div>x</div>
              </div>
            </div>
          </div>
          <div class="project">
            <div class="project__btn">
              <div class="project-name"><a href="/projet/3" style="text-decoration:none; color: #fff">DR. CHANDRA</a></div>
              <div class="project-image"><img src="/images/thumbnail-inde-copy.jpg" srcset="/images/thumbnail-inde-copy-p-500.jpeg 500w, /images/thumbnail-inde-copy-p-800.jpeg 800w, /images/thumbnail-inde-copy-p-1600.jpeg 1600w, /images/thumbnail-inde-copy.jpg 1920w" sizes="(max-width: 479px) 81vw, (max-width: 991px) 80vw, (max-width: 3840px) 50vw, 1920px" alt=""></div>
            </div>
            <div style="display:none;" class="project__fixed-overlay">
              <div class="close-project">
                <div>x</div>
              </div>
            </div>
          </div>
          <div class="project">
            <div class="project__btn">
              <div class="project-name"><a href="/projet/4" style="text-decoration:none; color: #fff">Ultramarathon</a></div>
              <div class="project-image"><img src="/images/matathon-copy.jpg" srcset="/images/matathon-copy-p-800.jpeg 800w, /images/matathon-copy-p-1600.jpeg 1600w, /images/matathon-copy.jpg 1920w" sizes="(max-width: 479px) 81vw, (max-width: 991px) 80vw, (max-width: 3840px) 50vw, 1920px" alt=""></div>
            </div>
            <div style="display:none;" class="project__fixed-overlay">
              <div class="close-project">
                <div>x</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="display:none" class="black-mask"></div>
      <div style="" class="social-footer"><a href="https://www.facebook.com/studiopulpe/" target="_blank" class="social__fa w-inline-block"></a><a href="https://www.instagram.com/studiopulpe/" target="_blank" class="social__insta w-inline-block"></a></div>
    </div>
  </div>
  <div id="after-vid" class="after-vid"></div>
  <script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="/js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <!-- <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script> -->
  <script>
    $(function() {
      var iframe = $('#vi-banner-video')[0];
      var player = $f(iframe);
      player.addEvent('ready', function() {
        player.addEvent('finish', onFinish);
        player.api('setVolume', 0);
      });
      $('#skip').on('click', function() {
        player.api('pause');
        document.getElementById('after-vid').click();
      });
      $('#volume-off').on('click', function() {
        player.api('setVolume', 1);
        $("#volume-off").css({
          display: "none"
        });
        $("#volume-on").css({
          display: "block"
        });
      });
      $('#volume-on').on('click', function() {
        player.api('setVolume', 0);
        $("#volume-off").css({
          display: "block"
        });
        $("#volume-on").css({
          display: "none"
        });
      });

      function onFinish() {
        // hide intro
        $("#preload").fadeTo(500, 0);
        // show main
        $("#home").fadeTo(500, 1);
        $("#after-vid").fadeTo(500, 1);
        $("#preload").hide();
      }
    });
  </script>
  <script>
    $(document).ready(function() {
      $("#skip").on('click', function() {
        // hide intro
        $("#preload").fadeTo(500, 0);
        // show main
        $("#home").fadeTo(500, 1);
        $("#after-vid").fadeTo(500, 1);
        $("#preload").hide();
      })
    })
    //Close project videos
    // COPIER CETTE FONCTION POUR CHAQUE VIDÉO
    // $(document).ready(function() {
    //   // set unique id to videoplayer for the Webflow video element
    //   var src = $('#video').children('iframe').attr('src');
    //   $('.project').click(function(e) {
    //     e.preventDefault();
    //     $('#video').children('iframe').attr('src', src);
    //   });
    //   $('.close-project').click(function(e) {
    //     e.preventDefault();
    //     $('#video').children('iframe').attr('src', '');
    //   });
    //   $('#stopvideo-about').click(function(e) {
    //     e.preventDefault();
    //     $('#video').children('iframe').attr('src', '');
    //   });
    //   $('#stopvideo-contact').click(function(e) {
    //     e.preventDefault();
    //     $('#video').children('iframe').attr('src', '');
    //   });
    // });
    //*****************************************
    // $(document).ready(function() {
    //   var src = $('#video1').children('iframe').attr('src');
    //   $('.project').click(function(e) {
    //     e.preventDefault();
    //     $('#video1').children('iframe').attr('src', src);
    //   });
    //   $('.close-project').click(function(e) {
    //     e.preventDefault();
    //     $('#video1').children('iframe').attr('src', '');
    //   });
    //   $('#stopvideo-about').click(function(e) {
    //     e.preventDefault();
    //     $('#video1').children('iframe').attr('src', '');
    //   });
    //   $('#stopvideo-contact').click(function(e) {
    //     e.preventDefault();
    //     $('#video1').children('iframe').attr('src', '');
    //   });
    // });
    // $(document).ready(function() {
    //   var src = $('#video2').children('iframe').attr('src');
    //   $('.project').click(function(e) {
    //     e.preventDefault();
    //     $('#video2').children('iframe').attr('src', src);
    //   });
    //   $('.close-project').click(function(e) {
    //     e.preventDefault();
    //     $('#video2').children('iframe').attr('src', '');
    //   });
    //   $('#stopvideo-about').click(function(e) {
    //     e.preventDefault();
    //     $('#video2').children('iframe').attr('src', '');
    //   });
    //   $('#stopvideo-contact').click(function(e) {
    //     e.preventDefault();
    //     $('#video2').children('iframe').attr('src', '');
    //   });
    // });
    // $(document).ready(function() {
    //   // set unique id to videoplayer for the Webflow video element
    //   var src = $('#video3').children('iframe').attr('src');
    //   $('.project').click(function(e) {
    //     e.preventDefault();
    //     $('#video3').children('iframe').attr('src', src);
    //   });
    //   $('.close-project').click(function(e) {
    //     e.preventDefault();
    //     $('#video3').children('iframe').attr('src', '');
    //   });
    //   $('#stopvideo-about').click(function(e) {
    //     e.preventDefault();
    //     $('#video3').children('iframe').attr('src', '');
    //   });
    //   $('#stopvideo-contact').click(function(e) {
    //     e.preventDefault();
    //     $('#video3').children('iframe').attr('src', '');
    //   });
    // });
    // $(document).ready(function() {
    //   // set unique id to videoplayer for the Webflow video element
    //   var src = $('#video4').children('iframe').attr('src');
    //   $('.project').click(function(e) {
    //     e.preventDefault();
    //     $('#video4').children('iframe').attr('src', src);
    //   });
    //   $('.close-project').click(function(e) {
    //     e.preventDefault();
    //     $('#video4').children('iframe').attr('src', '');
    //   });
    //   $('#stopvideo-about').click(function(e) {
    //     e.preventDefault();
    //     $('#video4').children('iframe').attr('src', '');
    //   });
    //   $('#stopvideo-contact').click(function(e) {
    //     e.preventDefault();
    //     $('#video4').children('iframe').attr('src', '');
    //   });
    // });
  </script>
</body>

</html>