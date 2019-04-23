<!DOCTYPE html>
<html>

<?php require('./views/components/head.html'); ?>

<body class="body">
    <div class="project-wrapper">
        <div data-collapse="tiny" data-animation="default" data-duration="400" class="navbar w-nav">
            <a href="/" id="stopvideo" class="brand w-nav-brand w--current">
                <?php require("./views/components/logo.html") ?>
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
        <div class="div-tile full">
            <div class="scroll-indicator-block-anim" data-ix="scroll-indicator"></div>
            <div id="video" class="project-lightbox-content _60vh w-embed w-iframe"><iframe style="position: absolute; top: 0; left: 0;" src="https://player.vimeo.com/video/313539330" width="100%" height="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe></div>
            <div class="scroll-indicator" data-ix="scroll-indicator">
                <div class="scroll-indicator-dot"></div>
            </div>
        </div>
        <div class="div-tile texte">
            <h1>Gala FSCQ 2017</h1>
        </div>
        <div class="div-tile texte">
            <div class="div-project-info-container">
                <div class="div-project-info">
                    <div class="info-label">Type</div>
                    <div>Animation 2D</div>
                </div>
                <div class="div-project-info">
                    <div class="info-label">Client</div>
                    <div>FCSQ</div>
                </div>
                <div class="div-project-info">
                    <div class="info-label">Industrie</div>
                    <div>Éducation</div>
                </div>
                <div class="div-project-info no-border">
                    <div class="info-label">Année</div>
                    <div>2017</div>
                </div>
            </div>
        </div>
        <div class="div-tile texte">
            <div class="div-text">
                <div>La FCSQ regroupe la vaste majorité des commissions scolaires francophones du Québec ainsi que la Commission scolaire du Littoral. Les commissions scolaires sont des gouvernements locaux qui veillent à la réussite scolaire de plus dʼun million dʼélèves en assurant des services éducatifs au primaire, au secondaire, en formation professionnelle et à lʼéducation des adultes grâce à lʼengagement de quelques 120 000 employés.<br></div>
            </div>
        </div>
        <div class="div-tile"><a href="#" class="project-lightbox-content w-inline-block w-lightbox"><img src="/images/fcsq-copy.jpg" srcset="/images/fcsq-copy-p-800.jpeg 800w, /images/fcsq-copy.jpg 1099w" sizes="100vw" alt="" class="lightbox-image-thumbnail">
                <script type="application/json" class="w-json">
                    {
                        "items": [{
                            "width": 1600,
                            "caption": "",
                            "height": 900,
                            "fileName": "5c773d68a943c35bc78e91c0_5.png",
                            "origFileName": "5.png",
                            "url": "/images/5.png",
                            "_id": "5c51fb358077b43035a7053b",
                            "type": "image",
                            "fileSize": 920452
                        }]
                    }
                </script>
            </a>
        </div>
        <div class="div-tile"><a href="#" class="project-lightbox-content w-inline-block w-lightbox"><img src="/images/josée-copy.jpg" srcset="/images/josée-copy-p-500.jpeg 500w, /images/josée-copy-p-800.jpeg 800w, /images/josée-copy-p-1080.jpeg 1080w, /images/josée-copy.jpg 1586w" sizes="100vw" alt="" class="lightbox-image-thumbnail">
                <script type="application/json" class="w-json">
                    {
                        "items": [{
                            "width": 1586,
                            "caption": "",
                            "height": 900,
                            "fileName": "fsc.png",
                            "origFileName": "fsc.png",
                            "url": "/images/fsc.png",
                            "_id": "5c5238db0faac5858fc59c3d",
                            "type": "image",
                            "fileSize": 740894
                        }]
                    }
                </script>
            </a>
        </div>
        <div class="div-spacer"></div>
    </div>
</body>

</html>