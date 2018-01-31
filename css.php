<!doctype html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <title>CSS Reference | Innovation Lab</title>
  <meta name="description" content="CSS Reference for digital maker space projects.">
 <!-- CSS stylesheet for my responsive layout below -->
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<div class="wrapper">

<header class="banner">
  <a href="index.php">
  <img src="images/HTML5_Logo_64.png" class="icon" alt="HTML5 icon">
  </a>
  <h2>Innovation Lab - CSS</h2>
  <?php include('includes/menu.php');?>
</header>

<main class="main">
<div class="media-container">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/dC34rfY8Eyk" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
</div>

  <h2 id="intro">Introduction to CSS</h2>
  <p>CSS stands for Cascading Style Sheets.  CSS is used to style websites. Tables, forms, images, fonts and colors can be fine tuned using CSS.
  </p>
  If you need a refresher, follow the link below to take a look at W3 Schools Intoduction to CSS.
  <p><a href="https://www.w3schools.com/css/css_intro.asp">CSS Introduction</a></p>
  <h2 id="details">CSS Exercises</h2>
  <p>Follow the link below to practice CSS with exercises from W3 Schools.
  </p>
  <p><a href="https://www.w3schools.com/css/css_exercises.asp">CSS Practice Exercises</a></p>
  <h2 id="more_information">Reference Links</h2>
  <p><a href= "https://www.w3schools.com/cssref/default.asp">W3 Schools CSS Properties Reference</a>
  </p>
  </main>

<aside class="sidebar">
  <?php include('includes/side_menu.php');?>
  <h3>About</h3>
  <p>
    Welcome to the Innovation Lab Reference Site.
  </p>
  <p>
    Use the videos and links on this page to learn about CSS.
  </p>
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
