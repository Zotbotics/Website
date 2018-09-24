<!DOCTYPE html>
<html lang="en">
<title>Zotbotics | Join</title>
<?php include("common/header.html"); ?>
<head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
.w3-bar .w3-button {
    padding: 16px;
}
input:invalid {
    border: 2px solid red;
}
.bgimg {
  background-image: url('/assets/images/join.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  background-blend-mode: multiply;
  background-color: rgb(70,70,70); // Tint color
}
.form {
  margin-left: 24%;
  width: 52%;
  margin-right: 24%
}
input:focus {
    border: 3px solid #555;
}
.card{
  background-color: #0064A4AA;
}
.mc-field-group{
  margin-left: 10%;
  width: 80%;
  margin-right: 10%;
}
/* .birthday{
  width: 45px;
  display: inline;
} */
.indicates-required{
  float: right;
}
.w3-jumbo{
  margin-bottom: 10px;
}


/* #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; } */
/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */

</style>
</head>


<?php include("common/navbar.html"); ?>

<!-- Header with full-height image -->
<div class="bgimg w3-display-container w3-center w3-padding-64" id="home">

  <div class="w3-display-middle" style="width:90%; max-width:750px;">
    <p class="w3-center w3-xxlarge">Sign up for our newsletter!</p>
    <div id="mc_embed_signup">
      <div class="w3-panel w3-card-4 card">
        <form action="https://zotbotics.us18.list-manage.com/subscribe/post?u=8193a74c89f2c1415b6168cb8&amp;id=3a7b6dadfd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div class="w3-padding" id="mc_embed_signup_scroll">
            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div><br>
              <div class="mc-field-group">
              	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                </label>
              	<input type="email" value="" name="EMAIL" class="w3-input w3-border w3-hover-border-gray required email" id="mce-EMAIL">
              </div>
            <div class="mc-field-group">
            	<label for="mce-FNAME">First Name </label>
            	<input type="text" value="" name="FNAME" class="w3-input w3-border w3-hover-border-gray" id="mce-FNAME">
            </div>
            <div class="mc-field-group">
            	<label for="mce-LNAME">Last Name </label>
            	<input type="text" value="" name="LNAME" class="w3-input w3-border w3-hover-border-gray" id="mce-LNAME">
            </div>
            <div class="mc-field-group">
              <label for="mce-PHONE">Phone Number </label>
              <input type="tel" value="" name="PHONE" class="w3-input w3-border w3-hover-border-gray" id="mce-PHONE">
            </div>
            <div class="mc-field-group">
            	<label for="mce-MMERGE6">Current Year </label>
            	<input type="text" value="" name="MMERGE6" class="w3-input w3-border w3-hover-border-gray" id="mce-MMERGE6">
              </div>
          	<div id="mce-responses" class="clear">
          		<div class="response" id="mce-error-response" style="display:none"></div>
          		<div class="response" id="mce-success-response" style="display:none"></div>
          	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8193a74c89f2c1415b6168cb8_3a7b6dadfd" tabindex="-1" value=""></div>
            <div class="clear"><br><button class="w3-button w3-text-color-white w3-color-grey" type="submit">
                <i class="fa fa-paper-plane"></i> SUBSCRIBE
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';fnames[6]='MMERGE6';ftypes[6]='text';fnames[7]='MMERGE7';ftypes[7]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <?php include("common/legal.html"); ?>
</footer>
