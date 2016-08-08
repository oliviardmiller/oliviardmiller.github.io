
<?php session_start();?>
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

<script>
 
function printDate() {
    var d = new Date();
    var day = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    var hours = d.getHours();
    var minutes = d.getMinutes();
     
    if (minutes < 10) {
        minutes = "0" + minutes;
    }
 
    var suffix = "AM";
    if (hours >= 12) {
        suffix = "PM";
        hours = hours - 12;
    }
     
    if (hours == 0) {
        hours = 12;
    }
   document.write("It is " + hours + ":" + minutes + " " + suffix + " on " + month + "/" + day + "/" + year);
}
 
</script>

</head>

<body>

<div class="container">

<header class="topbanner">
<a href="http://senna.sjsu.edu/rdean/omiller/final/index.php"><img class="logo" src="images/logo2.jpg" alt="Click this logo to go home" width="175" height="172"></a>


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


<?php echo $_SESSION['statusMessage'];?> 
 
<?php echo $_SESSION['htmlOutput'];?>

<script> printDate(); </script>


</main>

<footer class="footer">

&copy; Olivia Miller 2016

</footer>


</div>
</body>
</html>