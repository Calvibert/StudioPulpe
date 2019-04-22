<!DOCTYPE html>
<html>

<?php require('./views/components/head.html'); ?>

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
        <div style="display:none" class="letters-container">
          <img id="logo-p" style="opacity:0" src="/images/p_1_Default.png" alt="" class="letter-p1">
          <img id="logo-u" style="opacity:0" src="/images/u_Default.png" alt="" class="letter-u">
          <img id="logo-l" style="opacity:0" src="/images/l_Default.png" alt="" class="letter-l">
          <img id="logo-p2" style="opacity:0" src="/images/p_2_Default.png" alt="" class="letter-p2">
          <img id="logo-e" style="opacity:0" src="/images/e_Default.png" alt="" class="letter-e">
          <img id="logo-virgule" style="opacity:0" src="/images/_Default.png" alt="" class="coma">
        </div>
      </a>
      <nav role="navigation" class="nav-menu w-nav-menu">
        <a href="/a-propos" id="stopvideo-about" data-w-id="d7075c52-82ca-d741-0331-9c17b0ecac46" class="nav-link w-nav-link">à Propos</a>
        <a href="/contact" id="stopvideo-contact" data-w-id="d7075c52-82ca-d741-0331-9c17b0ecac48" class="nav-link w-nav-link">Contact</a>
      </nav>
      <div data-w-id="d7075c52-82ca-d741-0331-9c17b0ecac4a" class="menu-button w-nav-button" data-ix="menu-button">
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
        $("#preload").fadeTo(800, 0);
        // show main
        $("#home").fadeTo(5000, 1);
        $("#after-vid").fadeTo(5000, 1);
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
        setLogo()
        setTimeout(function() {
          $("#preload").hide();
        }, 700);
      })
    })
    $(document).ready(function() {
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
</body>

</html>