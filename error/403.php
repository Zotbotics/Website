<!DOCTYPE html>
<html>
<title>403 Forbidden</title>
<?php include("../common/header.html"); ?>

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
.bgimg-error {
  background-image: url('/assets/images/error/403.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  background-blend-mode: multiply;
  background-color: rgb(70,70,70); // Tint color
}
</style>

<?php include("../common/navbar.html"); ?>


<!-- Header with full-height image -->
<div class="bgimg-error w3-display-container w3-center w3-padding-64" id="home">
  <div class="w3-display-middle" style="width:90%">
    <p class="w3-jumbo">403 Forbidden</p>
      <span class="w3-xlarge">Hey! You can't go there!</span>
      <p><a href="/" class="w3-button w3-accent w3-text-white w3-padding-large w3-large w3-margin-top w3-transition-medium">
        Homepage
      </a></p>
  </div>
</div>

<footer class="w3-center w3-black w3-padding-64">
  Photo Credits:
  <a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@simonmigaj?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Simon Migaj"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Simon Migaj</span></a>
  <?php include("../common/legal.html"); ?>
</footer>

</html>
