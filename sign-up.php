<!DOCTYPE html>
<html>
<title>Zotbotics | Sign Up</title>
<?php include("common/header.html"); ?>

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
  background-image: url('/assets/images/solder.jpg');
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
input[type=text]:focus {
    border: 3px solid #555;
}
.card{
  margin-left: 23%;
  width: 54%;
  margin-right: 23%
  background-color: #0064a4
}

</style>

<?php include("common/navbar.html"); ?>

<!-- Header with full-height image -->
<div class="bgimg-summer w3-display-container w3-center w3-padding-64" id="home">
  <div class="w3-display-middle" style="width:90%">
    <p class="w3-jumbo">Sign up for our newsletter!</p>
      <!-- <span class="w3-xlarge">Sign up for our newsletter!</span> -->
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
  </div>
</div>