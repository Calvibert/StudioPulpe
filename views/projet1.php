<!DOCTYPE html>
<html>

<?php require('./views/components/head.html'); ?>

<body>
    <div class="project__fixed-overlay">
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
        <div class="project-wrapper">
            <div class="div-tile full">
                <div class="scroll-indicator-block-anim" data-ix="scroll-indicator"></div>
                <div id="video1" class="project-lightbox-content _60vh w-embed w-iframe"><iframe style="position: absolute; top: 0; left: 0;" src="https://player.vimeo.com/video/313669341" width="100%" height="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe></div>
                <div class="scroll-indicator" data-ix="scroll-indicator">
                    <div class="scroll-indicator-dot"></div>
                </div>
            </div>
            <div class="div-tile texte">
                <h1>Buck Fever</h1>
            </div>
            <div class="div-tile texte">
                <div class="div-project-info-container">
                    <div class="div-project-info">
                        <div class="info-label">Type</div>
                        <div>Documentaire</div>
                    </div>
                    <div class="div-project-info">
                        <div class="info-label">Client</div>
                        <div>Pulpe</div>
                    </div>
                    <div class="div-project-info">
                        <div class="info-label">Industrie</div>
                        <div>Cinéma</div>
                    </div>
                    <div class="div-project-info no-border">
                        <div class="info-label">Année</div>
                        <div>2019</div>
                    </div>
                </div>
            </div>
            <div class="div-tile texte">
                <div class="div-text">
                    <div class="text-block-4">Buck Fever est un court-métrage documentaire sʼinterrogeant sur la place de la mémoire et du lègue dans les relations père-fils. Au cœur dʼun paysage régional, le film accompagne un jeune adulte et son paternel, tous deux chasseurs, à travers une tracte de gibier. Cependant, derrière la tradition familiale se cache un traumatisme qui distancie les deux hommes.<br></div>
                </div>
            </div>
            <div class="div-tile"><a href="#" class="project-lightbox-content w-inline-block w-lightbox"><img src="/images/1.png" srcset="/images/1-p-500.png 500w, /images/1-p-800.png 800w, /images/1-p-1080.png 1080w, /images/1-p-1600.png 1600w, /images/1.png 1920w" sizes="100vw" alt="" class="lightbox-image-thumbnail">
                    <script type="application/json" class="w-json">
                        {
                            "items": [{
                                "type": "image",
                                "_id": "5c4f5211a29a8f6fbcf25060",
                                "fileName": "1.png",
                                "origFileName": "1.png",
                                "width": 1920,
                                "height": 964,
                                "fileSize": 3262882,
                                "url": "/images/1.png"
                            }]
                        }
                    </script>
                </a>
            </div>
            <div class="div-tile"><a href="#" class="project-lightbox-content w-inline-block w-lightbox"><img src="/images/buckfeverjimmy-copy.jpg" srcset="/images/buckfeverjimmy-copy-p-500.jpeg 500w, /images/buckfeverjimmy-copy-p-800.jpeg 800w, /images/buckfeverjimmy-copy.jpg 1668w" sizes="100vw" alt="" class="lightbox-image-thumbnail">
                    <script type="application/json" class="w-json">
                        {
                            "items": [{
                                "type": "image",
                                "_id": "5c4f5211e97f839ec03dcf43",
                                "fileName": "3.jpg",
                                "origFileName": "3.jpg",
                                "width": 1920,
                                "height": 1070,
                                "fileSize": 257499,
                                "url": "/images/3.jpg"
                            }]
                        }
                    </script>
                </a>
            </div>
            <div class="div-spacer"></div>
        </div>
    </div>
</body>

</html>