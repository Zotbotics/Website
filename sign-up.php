<!DOCTYPE html>
<html lang="en">
<title>Zotbotics | Sign Up</title>
<?php include("common/header.html"); ?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
.bgimg-summer {
  background-image: url('/assets/images/zooters.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  background-blend-mode: multiply;
  background-color: rgb(70,70,70); // Tint color
}
.bgimg-gears {
  background-image: url('/assets/images/gears.jpg');
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  background-blend-mode: multiply;
  background-color: rgb(150,150,150); // Tint color
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
  margin-left: 23%;
  width: 54%;
  margin-right: 23%
  background-color: #0064a4
}
.mc-field-group{
  margin-left: 10%;
  width: 80%;
  margin-right: 10%
}
.birthday{
  width: 10%
}
/* #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; } */
/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */

</style>

<?php include("common/navbar.html"); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-1">.col-md-1</div>
    <div class="col-md-1">.col-md-1</div>
    <div class="col-md-1">.col-md-1</div>
    <div class="col-md-1">.col-md-1</div>
    <div class="col-md-1">.col-md-1</div>
    <div class="col-md-1">.col-md-1</div>
    <div class="col-md-1">.col-md-1</div>
    <div class="col-md-1">.col-md-1</div>
    <div class="col-md-1">.col-md-1</div>
    <div class="col-md-1">.col-md-1</div>
    <div class="col-md-1">.col-md-1</div>
    <div class="col-md-1">.col-md-1</div>
  </div>
</div>
<!-- Header with full-height image -->
<div class="bgimg-summer w3-display-container w3-center w3-padding-64" id="home">
  <!-- <div class="w3-display-middle" style="width:90%">


    <p class="w3-jumbo">Sign up for our newsletter!</p>
      <span class="w3-xlarge">Sign up for our newsletter!</span>
      <div class="row">
        <div class="w3-card-4 w3-sand card">
          <form class="w3-container" action="/action_page.php" target="_blank">
            <p><input class="form w3-input w3-border w3-hover-border-gray" type="text" placeholder="Name" required name="Name"></p>
            <p><input class="form w3-input w3-border w3-hover-border-gray" type="text" placeholder="Email" required name="Email"></p>
            <p><input class="form w3-input w3-border w3-hover-border-gray" type="text" placeholder="Subject" required name="Subject"></p>
            <p><input class="form w3-input w3-border w3-hover-border-gray" type="text" placeholder="Message" required name="Message"></p>
            <p>
              <button class="w3-button w3-black" type="submit">
                <i class="fa fa-paper-plane"></i> SEND MESSAGE
              </button>
            </p>
          </form>
        </div>
      </div>
  </div> -->
  <!-- Begin MailChimp Signup Form -->

  <!-- Begin MailChimp Signup Form -->
  <!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"> -->
  <!-- <style type="text/css">
  	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
  	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
  	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
  </style> -->
  <div class="w3-display-middle" style="width:90%">
    <p class="w3-jumbo">Sign up for our newsletter!</p>
    <div id="mc_embed_signup">
      <div class="w3-card-4 w3-sand card">
        <form action="https://zotbotics.us18.list-manage.com/subscribe/post?u=8193a74c89f2c1415b6168cb8&amp;id=3a7b6dadfd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
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
            <div class="mc-field-group size1of2">
            	<label for="mce-BIRTHDAY-month">Birthday </label>
            	<div class="datefield row">
                <div><span class="subfield monthfield"><input class="md-col-1 w3-input w3-border w3-hover-border-gray birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span></div> /
            		<div><span class="subfield dayfield"><input class="md-col-1 w3-input w3-border w3-hover-border-gray birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span></div>
            		<span class="small-meta nowrap">( mm / dd )</span>
            	</div>
            </div>
            <div class="mc-field-group">
            	<label for="mce-MMERGE6">Current Year </label>
            	<input type="text" value="" name="MMERGE6" class="w3-input w3-border w3-hover-border-gray" id="mce-MMERGE6">
            </div>
            <div class="mc-field-group">
            	<label for="mce-MMERGE7">Year </label>
            	<input type="text" value="" name="MMERGE7" class="w3-input w3-border w3-hover-border-gray" id="mce-MMERGE7">
            </div>
          	<div id="mce-responses" class="clear">
          		<div class="response" id="mce-error-response" style="display:none"></div>
          		<div class="response" id="mce-success-response" style="display:none"></div>
          	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8193a74c89f2c1415b6168cb8_3a7b6dadfd" tabindex="-1" value=""></div>
            <div class="clear"><br><button class="w3-button w3-black" type="submit">
                <i class="fa fa-paper-plane"></i> SEND MESSAGE
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
