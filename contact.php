<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Olivia Miller | Contact </title>
  <meta name="author" content="OMiller">
  <meta name="description" content="Contact form to reach Olivia Miller">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link rel="stylesheet" href="styles/style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>

<div class="container">

<header class="topbanner">
<a href="index.php"><img class="logo" src="images/logo2.jpg" alt="Click this logo to go home" width="175" height="172"></a>


<h1> OLIVIA MILLER </h1>
<br>
<br>
<br>

<?php include('includes/menu.php');?>


</header>

<aside class="sidebar">

<h2> Find me! </h2>

<a href="https://twitter.com/oreedmiller" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @oreedmiller</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<br>
<br>
<br>

<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/oreedmiller" data-format="hover" data-related="false" data-text="Olivia R Miller"></script>

<br>

</aside>

<main class="maincolumn">

<h2> Contact Me </h2>


I'd love to hear from you!

<form class="contact-form" method="post" action="process.php">

<fieldset>

<div>
  <label for="name">Name<span class="required"> *</span></label>
  <input type="text" id="name" name="name">
  </div>
<div>
  <label for="email">Email<span class="required"> *</span></label>
  <input type="text" id="email" name="email">
  </div>
</fieldset>

<fieldset>
  <div>
  <label for="message">Write Me A Message</label>
  <br>
  <textarea name="message" id="message"></textarea>
  </div>


  <div>
  <label for="contactback">It's okay to send a reply back via the email above</label>
  <input type="checkbox" name="contactback[]" id="contactback" value="contactback">
  </div>
</fieldset>

<input type="submit" value="submit">

</main>

<footer class="footer">

&copy; Olivia Miller 2016

</footer>


</div>
</body>
</html>