<!DOCTYPE html>
<html>
<title>Zotbotics</title>
<?php include("common/header.html"); ?>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-black {
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: black;
  background-blend-mode: multiply;
  background-color: rgb(0,0,0); // Tint color
}
.bgimg-1 {
  background-image: url('/assets/images/background.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  background-blend-mode: multiply;
  background-color: rgb(70,70,70); // Tint color
}
.bgimg-2 {
  background-image: url('/assets/images/summer.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  background-blend-mode: multiply;
  background-color: rgb(70,70,70); // Tint color
}
.bgimg-contact {
  background-image: url('/assets/images/contact.jpg');
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  background-blend-mode: multiply;
  background-color: rgb(70,70,70)!important; // Tint color
}
.bgimg-circuit {
  background-image: url('/assets/images/circuit2.jpg');
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  background-blend-mode: multiply;
  background-color: rgb(150,150,150)!important; // Tint color
}
.w3-bar .w3-button {
    padding: 16px;
}
input:invalid {
    border: 2px solid red;
}
</style>
<body>
<?php include("common/navbar.html"); ?>
<!-- Header with full-height image -->
<header class="bgimg-black w3-display-container" style="max-width:2500px; height:100%;" id="home">


      <!-- Automatic Slideshow Images -->
      <div class="bgimg-1 mySlides w3-animate-right w3-display-container w3-text-white w3-center">
        <div class="w3-display-middle w3-center" style="max-width:900px; width:100%;">
          <img src="/assets/images/textlogo.png" alt="ZOTBOTICS" style="width:90%;" class="w3-image">
          <br>
          <br>
          <span class="w3-xlarge">A student organization at UCI dedicated to all things robotics.
            <br>
              General Meetings Wednesday 8pm @ SSL 140
              <br>
              VEX U Tuesday 6pm @ ANTrepreneur Center
          </span>
          <p><a href="/join" class="w3-button w3-accent w3-text-white w3-padding-large w3-large w3-margin-top w3-transition-medium">
            Join Us
          </a></p>
        </div>
      </div>

      <div class="bgimg-2 mySlides w3-animate-right w3-display-container w3-text-white w3-center">
        <div class="w3-display-middle w3-center" style="max-width:900px; width:100%;">
          <p class="w3-jumbo">Summer Design Project</p>
          <span class="w3-xlarge">We put the Zot in ZotBuster this summer... Read about the process!</span>
          <p><a href="/blog" class="w3-button w3-accent w3-text-white w3-padding-large w3-large w3-margin-top w3-transition-medium">
            SDP Blog
          </a></p>
        </div>
      </div>


    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
  	  <?php include('common/social.html');?>
    </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:64px 16px" id="about">
  <h3 class="w3-center">ABOUT US</h3>
  <p class="w3-center w3-large">What makes Zotbotics unique?</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-third">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passionate</p>
      <p>We come from many backgrounds, from engineering to business, Asia to
         the US. But each and every team member shares one thing: <i>passion</i>. All of
         us at Zotbotics love what we do, which is why we set out to
         create a competetive robotics organization at UCI.</p>
    </div>
    <div class="w3-third">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Technical</p>
      <p>We don't just sit back and <i>talk</i> about robotics. We get out there
        and do it! We're involved in both teaching the student body
        industry-relevant skills, but also involved in intercollegiate
        competitions that show off UCI's engineering talent.</p>
    </div>
    <div class="w3-third">
      <i class="fa fa-gem w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Professional</p>
      <p>We love having fun, but as a college organization, we also believe in
         developing top-tier products with industry-level tools and procedures.
         From projects to organization structure, we strive to emulate
         industry practices.</p>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-accent w3-text-white w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">20+</span>
    <br>Members
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">13+</span>
    <br>Majors
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">10+</span>
    <br>Cultures
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">1</span>
    <br>Mission
  </div>
</div>

<!-- Join Section -->
<div class="w3-container w3-center w3-dark-grey bgimg-circuit" style="padding:128px 16px" id="join">
  <h3>GET INVOLVED</h3>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-hover-accent w3-hover-text-white w3-transition-medium w3-xlarge w3-padding-16">Competitions</li>
          <li class="w3-padding-16 autoflow" autoflowid=0>Face other universities in a fast-paced
          environment, tackling real-world engineering challenges.
          Competition provides a fantastic environment to let the skills we learn come to life.
          Fill out the interest form, join our <a href="http://zotbotics.slack.com/signup">Slack</a> or contact us for more information!</li>

            <li class="w3-dark-grey w3-padding"></li>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-hover-accent w3-hover-text-white w3-transition-medium w3-text-white w3-xlarge w3-padding-32">Workshops</li>
        <li class="w3-padding-16 autoflow" autoflowid=0>We will meet every week for workshops,
          recruitment events, or just social events. These events are open
          to everyone regardless of club membership status! Check out our
          <a href="https://www.facebook.com/zotbotics/">Facebook</a> page, sign up to our newsletter, or get on our <a href="http://zotbotics.slack.com/signup">Slack</a> to
          stay informed!
        </li>
          <li class="w3-grey w3-padding"></li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-hover-accent w3-hover-text-white w3-transition-medium w3-xlarge w3-padding-16">Projects</li>
        <li class="w3-padding-16 autoflow" autoflowid=0>
          We know people have their own ideas that don't fit inside
          the competition environment, so we're working on a way for people to
          propose projects using Zotbotics resources! Please contact us with all your best ideas!
        </li>
          <li class="w3-dark-grey w3-padding"></li>
      </ul>
    </div>
  </div>
  <br>
  <a class="w3-accent w3-shadow w3-large" href="/join">
    <button class="w3-button w3-text-white w3-transition-medium w3-padding-large">
      I'm Interested!
    </button></a>

</div>

<!-- Board Section -->
<div class="w3-container w3-light-grey" style="padding:64px 16px;" id="board">
  <h3 class="w3-center">THE BOARD</h3>
  <div class="w3-row-padding w3-left-align" style="margin-top:64px;">
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card w3-white">
        <img src="/assets/images/board/inkiad.jpg" alt="Inkiad" style="width:100%">
        <div class="w3-container"><div class="autoflow" autoflowid="1">
          <h3>Inkiad Ahmed</h3>
          <div class="w3-large">President</div>
          <div class="w3-opacity">Material Science and Engineering</div>
          <p><i>"The future belongs to those who prepare for it today"</i> - Malcolm X</p>
          <p>
            Inkiad is an FRC and VEX alumni from the San Fernando Valley.
            Despite having worked with Solidworks, machining, and design,
            his favorite part of robotics is data analysis!
          </p>
          </div><p><a href="mailto:inkiad@zotbotics.org" class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card w3-white">
        <img src="/assets/images/board/spencer.jpg" alt="Spencer" style="width:100%">
        <div class="w3-container"><div class="autoflow" autoflowid="1">
          <h3>Spencer Kammerman</h3>
          <div class="w3-large">President</div>
          <div class="w3-opacity">Computer Science and Engineering</div>
          <p><i>"If you want to grant your own wish, then you should clear your
            own path to it."</i> - Kyouma</i></p>
          <p>
            Spencer's goal is to achieve everlasting victory in competitive
            robotics. He looks forward to applying his FRC and project skills
            to a project that is both engaging and educational.
          </p>
          </div><p><a href="mailto:spencer@zotbotics.org" class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card w3-white">
        <img src="/assets/images/board/jessica.jpg" alt="Jessica" style="width:100%">
        <div class="w3-container"><div class="autoflow" autoflowid="1">
          <h3>Jessica Li</h3>
          <div class="w3-large">Head of Public Relations</div>
          <div class="w3-opacity">Prospective Mechanical Engineer</div>
          <p><i>"To live is the rarest thing in the world. Most people exist,
            that is all."</i> - Oscar Wilde</p>
          <p>
            Jessica enjoys playing volleyball and making videos in her free time.
            She is a beginner to robotics, but is excited to learn and grow with
            the club!
          </p>
          </div><p><a href="mailto:jessica@zotbotics.org" class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card w3-white">
        <img src="/assets/images/board/micah.jpg" alt="Micah" style="width:100%">
        <div class="w3-container"><div class="autoflow" autoflowid="1">
          <h3>Micah Raney</h3>
          <div class="w3-large">Competition Lead</div>
          <div class="w3-opacity">Electrical Engineering</div>
          <p><i>
            "Measure once, cut twice... or was it measure twice, cut once"
          </i></p>
          <p>
            Micah has robotics experience through FRC and the Northrop Grumman
            Innovation Challenge and is excited to jump into the college level
            of robotics competition!
          </p>
          </div><p><a href="mailto:micah@zotbotics.org" class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card w3-white">
          <img src="/assets/images/board/angela.jpg" alt="Angela" style="width:100%">
          <div class="w3-container"><div class="autoflow" autoflowid="1">
            <h3>Angela Li</h3>
            <div class="w3-large">Head of Operations</div>
            <div class="w3-opacity">Computer Science</div>
            <p><i>"Somewhere, something incredible is waiting to be known"</i>
                - Carl Sagan</p>
            <p>
              Angela loves anything bird related and has a passion for aerospace.
               She looks forward to helping the club grow and making an impact
               in the robotics scene.
            </p>
            </div><p><a href="mailto:angela@zotbotics.org" class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</a></p>
          </div>
        </div>
    </div>
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card w3-white">
              <img src="/assets/images/board/greta.jpg" alt="Greta" style="width:100%">
              <div class="w3-container"><div class="autoflow" autoflowid="1">
                <h3>Greta Yu</h3>
                <div class="w3-large">Head of Outreach</div>
                <div class="w3-opacity">Computer Science</div>
                <p><i>"Think it over, think it under"</i> - Winnie the Pooh</p>
                <p>
                  Greta is a First Tech Challenge (FTC) alum from San Jose and excited to continue
                  robotics at UCI. She likes night exploration and eating sweets.
                </p>
                </div><p><a href="mailto:greta@zotbotics.org" class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</a></p>
              </div>
            </div>
    </div>
  </div>
</div>


<!-- Contact Section -->
<div class="w3-center w3-container w3-text-white bgimg-contact" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Questions? Let's get in touch. Use the form
     below or email us at zotbotics@gmail.com</p>

   <center><div class="w3-row-padding" style="max-width:750px;">
     <div class="w3-margin-left w3-margin-right">
      <form method="post" action="/contact.php" target="print_popup"
               onsubmit="window.open('about:blank','print_popup','width=500,height=200');">
          <p><input class="w3-input w3-border" type="text" name="name" id="name" placeholder="Name" required name="Name"></p>
          <p><input class="w3-input w3-border" type="email" name="email" id="email" placeholder="Email" required name="Email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required></p>
          <p><textarea class="w3-input w3-border" rows="5" type="text" name="message" id="message" placeholder="Message" required name="Message"></textarea>
          <p>
             <button class="w3-button w3-black" type="submit">
               <i class="fa fa-paper-plane"></i> SEND MESSAGE
             </button>
         </p>
       </form>

     </div>
   </div></center>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <?php include("common/footer.html"); ?>
  <div>
    Cover Image: <a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@ethanrobertson?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Ethan Robertson"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Ethan Robertson</span></a>
  </div>
  <?php include("common/legal.html"); ?>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 6000);
}
</script>
</body>
</html>
