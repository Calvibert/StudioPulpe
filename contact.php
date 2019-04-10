<div data-w-id="e3fd8e36-ee0b-7f0c-465e-b83b7508f919" style="display:none;opacity:0" class="fixed-overlay__contact">
    <div class="close-contact">
        <div data-w-id="d4ab041d-8a4c-b797-c32a-d9ab2621c4de">x</div>
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
        <div class="form w-form">
            <form id="wf-form-Pulpe-Form" name="wf-form-Pulpe-Form" data-name="Pulpe Form" method="post" redirect="/merci" data-redirect="/merci">
                <div class="form-container">
                    <div class="form-row"><input type="text" class="text-field w-input" maxlength="256" name="Prenom-2" data-name="Prenom 2" placeholder="Prénom" id="Prenom-2" required=""><input type="text" class="text-field w-input" maxlength="256" name="Nom-2" data-name="Nom 2" placeholder="Nom" id="Nom-2" required=""></div>
                    <div class="form-row"><input type="email" class="text-field w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Courriel" id="email-2" required=""><input type="tel" class="text-field w-input" maxlength="256" name="Telephone-2" data-name="Telephone 2" placeholder="Téléphone" id="Telephone-2"></div><textarea id="Message-2" name="Message-2" placeholder="Message" maxlength="5000" data-name="Message 2" class="textarea w-input"></textarea>
                </div><input type="submit" value="Soumettre" data-wait="Veuillez patienter..." class="submit-button w-button">
            </form>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div>
    </div>
</div>
<script>
$("#wf-form-Pulpe-Form").submit(function(event) {
  $.ajax({
    url: "/api/getWeather",
    data: {
      zipcode: 97201
    },
    success: function( result ) {
      $( "#weather-temp" ).html( "<strong>" + result + "</strong> degrees" );
    }
  });
});
</script>
