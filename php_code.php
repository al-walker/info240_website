<!doctype html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <title>PHP Reference | Innovation Lab</title>
  <meta name="description" content="PHP Reference for digital maker space projects.">
 <!-- CSS stylesheet for my responsive layout below -->
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<div class="wrapper">

<header class="banner">
  <a href="index.php">
  <img src="images/HTML5_Logo_64.png" class="icon" alt="HTML5 icon">
  </a>
  <h2>Innovation Lab - PHP</h2>
  <?php include('includes/menu.php');?>
</header>

<main class="main">

  <div class="media-container">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/7TF00hJI78Y" frameborder="0" gesture="media" scrolling="no" allow="encrypted-media" allowfullscreen></iframe>
  </div>

<h2 id="intro">Introduction to PHP</h2>
<p>PHP is one of the most popular programming languages for web develpment.  It is a server side language that is used for many web sites. Learning PHP will allow you to add a great deal of functionality to your websites.  See the links below to start learning PHP.
</p>
If you need a refresher, follow the link below to take a look at W3 Schools Intoduction to PHP.
<p><a href="https://www.w3schools.com/php/php_intro.asp">PHP Introduction</a></p>
<h2 id="details">PHP Practice Exercises</h2>
<p>Follow the link below to practice PHP using exercises from W3 Schools.</p>
<p><a href="https://www.w3schools.com/php/php_examples.asp">PHP Practice Exercises</a></p>
<h2 id="more_information">Reference Links</h2>
<p><p><a href="https://www.w3schools.com/php/php_ref_array.asp">W3 Schools PHP Array Reference</a></p>
</main>

<aside class="sidebar">
  <?php include('includes/side_menu.php');?>

  <h3>About</h3>
  <p>
    Welcome to the Innovation Lab Reference Site.
  </p>
  <p>
    Use the videos and links on this page to learn about PHP, a popular server-side scripting language.
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
