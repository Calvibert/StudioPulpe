<!DOCTYPE html>
<html>

<?php require('./views/components/head.html'); ?>

<body class="body" style="overflow:hidden">
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

    <script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <style>
      .bar {
        width: 35px;
        height: 5px;
        background-color: black;
        margin: 6px 0;
      }

      .menu-elements-mb {
        display: inline-block;
        cursor: pointer;
      }

      .bar1,
      .bar2,
      .bar3 {
        width: 35px;
        height: 5px;
        background-color: #333;
        margin: 6px 0;
        transition: 0.4s;
      }

      /* Rotate first bar */
      .change .bar1 {
        -webkit-transform: rotate(-45deg) translate(-9px, 6px);
        transform: rotate(-45deg) translate(-9px, 6px);
      }

      /* Fade out the second bar */
      .change .bar2 {
        opacity: 0;
      }

      /* Rotate last bar */
      .change .bar3 {
        -webkit-transform: rotate(45deg) translate(-8px, -8px);
        transform: rotate(45deg) translate(-8px, -8px);
      }
    </style>
    <div class="navbar-navbaryo" style="position:relative; z-index:100">
      <div class="logo" style="float:left; margin-top:15px; margin-left: 15px">
        <a href="/">
          <div style="display:none" class="letters-container">
            <img id="logo-p" style="opacity:0" src="/images/p_1_Default.png" alt="" class="letter-p1">
            <img id="logo-u" style="opacity:0" src="/images/u_Default.png" alt="" class="letter-u">
            <img id="logo-l" style="opacity:0" src="/images/l_Default.png" alt="" class="letter-l">
            <img id="logo-p2" style="opacity:0" src="/images/p_2_Default.png" alt="" class="letter-p2">
            <img id="logo-e" style="opacity:0" src="/images/e_Default.png" alt="" class="letter-e">
            <img id="logo-virgule" style="opacity:0" src="/images/_Default.png" alt="" class="coma">
          </div>
        </a>
      </div>
      <div class="menu-elements" style="float:right; padding-top: 15px; padding-right: 15px">
        <table>
          <tr>
            <td><a href="/contact" class="nav-link">Contact</a></td>
            <td><a href="/a-propos" class="nav-link">À propos</a></td>
          </tr>
        </table>
      </div>
      <div class="menu-elements-mb" style="float:right; margin-top: 15px; margin-right: 15px">
        <div class="bar1" style="background-color: #979797"></div>
        <div class="bar2" style="background-color: #979797"></div>
        <div class="bar3" style="background-color: #979797"></div>
      </div>
      <div class="menu-elements-mb-dropdown" style="float: right; margin-top: 10px; margin-right: -25px; background: #000; width: 120%; opacity: 0;">
        <table>
          <tr>
            <div class="menu-item" style="color: #fff; float: right; padding-right: 50px; position: relative; padding: 10px 50px"><a href="/contact" class="nav-link">Contact</a></div>
            <br><br><br>
          </tr>
          <tr>
            <div class="menu-item" style="color: #fff; float: right; padding-right: 50px; position: relative; padding: 10px 50px"><a href="/a-propos" class="nav-link">À propos</a></div>
          </tr>
        </table>
      </div>
    </div>

    <div class="hero" style="">
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
  <script>
    $(function() {
      var iframe = $('#vi-banner-video')[0];
      var player = $(iframe);
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
        $("#preload").fadeTo(800, 0);
        // show main
        $("#home").fadeTo(500, 1);
        $("#after-vid").fadeTo(5000, 1);
        setLogo();
        setTimeout(function() {
          $("#preload").hide();
        }, 700);
      }
    });
    $(document).ready(function() {

      $("#skip").on('click', function() {
        // hide intro
        $("#preload").fadeTo(800, 0);
        // show main
        $("#home").fadeTo(500, 1);
        $("#after-vid").fadeTo(5000, 1);
        setLogo();
        setTimeout(function() {
          $("#preload").hide();
        }, 700);
      })
    })
    $(document).ready(function() {
      if (window.innerWidth > 766) {
        $(".project").hover(function() {
          var project = this.innerText;
          project = project.split(" ").join("_");
          project = project.split(".").join("");
          $(".div-projects-container").addClass('with-image-' + project);
        }, function() {
          var project = this.innerText;
          project = project.split(" ").join("_");
          project = project.split(".").join("");
          $(".div-projects-container").removeClass('with-image-' + project);
        })
      }
    })

    function setLogo() {
      $(".letters-container").show();
      $("#logo-p").fadeTo(500, 1);
      $("#logo-u").fadeTo(750, 1);
      $("#logo-l").fadeTo(1000, 1);
      $("#logo-p2").fadeTo(1250, 1);
      $("#logo-e").fadeTo(1500, 1);
      $("#logo-virgule").fadeTo(1600, 1);
    }
  </script>
  <script>
    $(document).ready(function() {
      if (window.innerWidth < 600) {
        $(".menu-elements").hide();
        $(".menu-elements-mb-dropdown").hide();
        $(".menu-elements-mb").show();
      } else {
        $(".menu-elements").show();
        $(".menu-elements-mb-dropdown").hide();
        $(".menu-elements-mb").hide();
      }

      $(".menu-elements-mb").on('click', function() {
        if ($(".menu-elements-mb-dropdown").css("opacity") < 1) {
          // appear
          $(".menu-elements-mb").addClass("change");
          $(".menu-elements-mb-dropdown").fadeTo(500, 1);
        } else {
          // disappear
          $(".menu-elements-mb").removeClass("change");
          $(".menu-elements-mb-dropdown").fadeTo(500, 0);
          $(".menu-elements-mb-dropdown").hide();
        }

      });
    });
  </script>

</body>

</html>