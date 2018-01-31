<!doctype html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <title>HTML Reference | Innovation Lab</title>
  <meta name="description" content="HTML Reference for digital maker space projects.">

 <!-- CSS stylesheet for my responsive layout below -->
  <link rel="stylesheet" href="css/style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<div class="wrapper">

<header class="banner">
  <a href="index.php">
  <img src="images/HTML5_Logo_64.png" class="icon" alt="HTML5 icon">
  </a>
  <h2>Innovation Lab - HTML</h2>
  <?php include('includes/menu.php');?>
</header>

<main class="main">

  <div class="media-container">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/ItZN6o0ylao" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
  </div>

  <h2 id="intro">Introduction to HTML</h2>
  <p>HTML stands fot HyperText Markup Language, and it is used to create the structure of a web page.
  If you need a refresher, follow the link below to take a look at W3 Schools Intoduction to HTML.
  <p><a href="https://www.w3schools.com/html/html_intro.asp">HTML Introduction</a></p>
  <h2 id="details">HTML Practice Exercises</h2>
  <p>Follow the link below to practice HTML using exercises from W3 Schools.</p>
  <p><a href="https://www.w3schools.com/html/html_exercises.asp">HTML Practice Exercises</a></p>
  <h2 id="more_information">Reference Links</h2>
  <p><p><a href="https://www.w3schools.com/tags/default.asp">W3 Schools HTML Tags Reference</a></p>
</main>

<aside class="sidebar">

  <?php include('includes/side_menu.php');?>

  <h3>About</h3>
  <p>
    Welcome to the Innovation Lab Reference Site.
  </p>
  <p>
    Use the videos and links on this page to learn about HTML.
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
