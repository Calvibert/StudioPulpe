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
  <style>@media (min-width:992px) {html.w-mod-js [data-w-id="01bf1bcf-4a00-a789-353e-d719c99a361b"] {opacity:0;}html.w-mod-js [data-w-id="01bf1bcf-4a00-a789-353e-d719c99a364c"] {opacity:0;}html.w-mod-js [data-w-id="01bf1bcf-4a00-a789-353e-d719c99a367d"] {opacity:0;}html.w-mod-js [data-w-id="01bf1bcf-4a00-a789-353e-d719c99a36b1"] {opacity:0;}}</style>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Droid Sans:400,700","PT Sans:400,400italic,700,700italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/pulpe_logo_v05.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <style type="text/css">

</style>
</head>


<div class="fixed-overlay__contact">
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
        <div>
            <form id="wf-form-Pulpe-Form" name="wf-form-Pulpe-Form" data-name="Pulpe Form" method="post" redirect="/merci" data-redirect="/merci">
                <div class="form-container">
                    <div class="form-row"><input type="text" class="text-field w-input" maxlength="256" name="Prenom-2" data-name="Prenom 2" placeholder="Prénom" id="Prenom-2" required=""><input type="text" class="text-field w-input" maxlength="256" name="Nom-2" data-name="Nom 2" placeholder="Nom" id="Nom-2" required=""></div>
                    <div class="form-row"><input type="email" class="text-field w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Courriel" id="email-2" required=""><input type="tel" class="text-field w-input" maxlength="256" name="Telephone-2" data-name="Telephone 2" placeholder="Téléphone" id="Telephone-2"></div><textarea id="Message-2" name="Message-2" placeholder="Message" maxlength="5000" data-name="Message 2" class="textarea w-input"></textarea>
                </div><input type="submit" value="Soumettre" data-wait="Veuillez patienter..." class="submit-button w-button">
            </form>
            <div>
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div>
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
