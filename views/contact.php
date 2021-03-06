<!DOCTYPE html>
<html>

<?php require('./views/components/head.html'); ?>

<body class="body">
    <div class="project__fixed-overlay">
        <?php require('./views/components/topmenu.html'); ?>
        </div>
        <div class="contact-wrapper">
            <div class="heading">Contact</div>
            <div class="contact-info">
                <div>production &amp; postproduction</div>
                <div class="contact-info-block">
                    <div><a href="tel:418-817-3341" class="link">418-817-3341</a></div>
                    <div class="div-separator"></div>
                    <div><a href="mailto:samuel@studiopulpe.com?subject=Pulpe%20-%20" class="link">info@studiopulpe.com</a></div>
                    <div class="div-separator"></div>
                    <div>montréal</div>
                </div>
                <div class="socials"><a href="https://www.facebook.com/studiopulpe/" target="_blank" class="social__fa w-inline-block"></a><a href="https://www.instagram.com/studiopulpe/" target="_blank" class="social__insta w-inline-block"></a></div>
            </div>
            <div style="width:50%">
                <form id="wf-form-Pulpe-Form" name="wf-form-Pulpe-Form" data-name="Pulpe Form" method="post" redirect="/merci" data-redirect="/merci">
                    <div class="form-container">
                        <div class="form-row">
                            <input type="text" class="text-field w-input" maxlength="256" name="prenom" data-name="Prenom" placeholder="Prénom" id="prenom" required="">
                            <input type="text" class="text-field w-input" maxlength="256" name="nom" data-name="Nom" placeholder="Nom" id="nom" required="">
                        </div>
                        <div class="form-row">
                            <input type="email" class="text-field w-input" maxlength="256" name="email" data-name="Email" placeholder="Courriel" id="email" required="">
                            <input type="tel" class="text-field w-input" maxlength="256" name="telephone" data-name="Telephone" placeholder="Téléphone" id="telephone">
                        </div>
                        <textarea id="message" name="message" placeholder="Message" maxlength="5000" data-name="Message" class="textarea w-input"></textarea>
                    </div><input type="submit" value="Soumettre" data-wait="Veuillez patienter..." class="submit-button w-button">
                </form>
                <br />
            </div>
        </div>
    </div>
</body>

</html>