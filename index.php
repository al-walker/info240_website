<?php include('includes/process.php');?>

<!doctype html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <title>Innovation Lab</title>
  <meta name="description" content="Web programming reference site for the Innovation Lab, a digital maker space">

	<meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- meta tag for responsive slides -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- css stylesheet for slideshow -->
  <link rel="stylesheet" href="css/responsiveslides.css">

  <!-- CSS stylesheet for my responsive layout below -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Javascript for the slideshow below -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

  <!-- a file named 'responsiveslides.min.js' is inside a directory named 'js' -->
  <script src="js/responsiveslides.min.js"></script>
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

 var weekday = new Array(7);
 weekday[0] = "Sunday";
 weekday[1] = "Monday";
 weekday[2] = "Tuesday";
 weekday[3] = "Wednesday";
 weekday[4] = "Thursday";
 weekday[5] = "Friday";
 weekday[6] = "Saturday";

 var n = weekday[d.getDay()];

   document.write("Today is " + n + ", " + month + "/" + day + "/" + year + " " + "(" + + hours + ":" + minutes + " " + suffix + ")" );
}

</script>

<script>
$(function() {
    $(".rslides").responsiveSlides({
       maxwidth: 300
    });
});
</script>

</head>

<div class="wrapper">

<header class="banner">
  <a href="index.php">
  <img src="images/HTML5_Logo_64.png" class="icon" alt="HTML5 icon">
  </a>
  <h2>Innovation Lab</h2>
  <?php include('includes/menu.php');?>
</header>

<main class="main">

<script> printDate(); </script>
<h2>Innovation Lab - HTML5 Project Reference Site</h2>
<!-- HTML for the slideshow below -->

    <ul class="rslides">
      <li><img src="images/html5_css3_styling.jpg" alt="HTML5 CSS3 Styling Icon" width="256" height="256"></li>
      <li><img src="images/html5_multimedia.jpg" alt="HTML5 Multimedia Icon" width="256" height="256"></li>
      <li><img src="images/html5_semantics.jpg" alt="HTML5 Semantics Icon" width="256" height="256"></li>
    </ul>
<br>
<p>Welcome to the Innovation Lab Reference Site. Use the table below to choose a project path.  Use the menu at the top of the page to navigate to specific information about each HTML5 project component.</p>
	<table class="main_table">
    <caption>Project Paths</caption>

    <thead>
       <tr>
           <th>Project</th>
           <th>Programming/Markup Languages</th>
           <th>Description</th>
       </tr>
    </thead>
    <tbody>
       <tr>
           <td>Basic Website</td>
           <td>HTML</td>
           <td>Make a basic website for your hobby or sport.</td>
       </tr>
     </tbody>
       <tr class = "even">
           <td>Website with CSS</td>
           <td>HTML, CSS</td>
           <td>Enhance the look of your Website.</td>
       </tr>
       <tr>
           <td>Multi-Page Website</td>
           <td>HTML, CSS</td>
           <td>Add additional pages to your website, and link to them.</td>
       </tr>
       <tr class = "even">
           <td>Multi-Page Website with External Links</td>
           <td>HTML, CSS</td>
           <td>Link to external sites that have information connected to the the topic of your website.</td>
       </tr>
       <tr>
           <td>Advanced Web Site</td>
           <td>HTML, CSS, PHP</td>
           <td>Add additional features to your website using PHP.</td>
       </tr>
      <tfoot>
        <tr>
           <td colspan="3">Source: <a href="https://www.w3.org/standards/">W3C Standards</a></td>
        </tr>
      </tfoot>
  </table>

</main>

<aside class="sidebar">
<h3>About</h3>
<p>Welcome to the Innovation Lab Reference Site.</p>
<p>
Here, you will find links to resources that will help you get started on your first, or next, project.  Making a basic web site? Check out the HTML page to get started.  Want to give your site a nicer style? Take a look at the CSS section. Want to add some additional features that require custom code?  Try the PHP tutorials.
<p>All of these pages contain information to help you review or build on information we cover in class.  The best way to become good at creating websites is to practice.  Have fun!</p>
</aside>

<footer class="site-footer">
  <?php include('includes/footer.php');?>
</footer>
</div><!-- end of wrapper -->
</body>
</html>
