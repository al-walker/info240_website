<?php include('includes/process.php');?>

<!doctype html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <title>About | Innovation Lab</title>
  <meta name="description" content="About the The Innovation Lab">
 <!-- CSS stylesheet for my responsive layout below -->
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<div class="wrapper">

<header class="banner">
  <a href="index.php">
  <img src="images/HTML5_Logo_64.png" class="icon" alt="HTML5 icon">
  </a>
  <h2>Innovation Lab - About</h2>
  <?php include('includes/menu.php');?>
</header>

<main class="main">

<h2>About</h2>
<p>The Innovation Lab is the digital learning lab for our maker space.  This website is here to help you start your own web development project.  Use this site as a reference site to help you remember or reinforce the information you will learn in class.  Making websites on your own is a great way to practice.  You will find basic information about HTML, CSS, and PHP on this site.
</p>
You can find links for more in-depth information in each section.  Use the form below to sign up for work time in the lab.  Sign up to work on your project before, during, or after school.

<?php print $formMessage;?>

<form class="form" method="post" action="about.php">

  <fieldset>

      <legend>Basic Information</legend>

      <label for="first-name">First Name</label>
			<input id="first-name" name="first-name" type="text">

      <label for="last-name">Last Name</label>
			<input id="last-name" name="last-name" type="text">

	</fieldset>

  <fieldset>

		<legend>Additional Information</legend>

		<label>Email<br>
    <input type="text" name="email" placeholder="email">
		</label>
    <br>
    <label>Favorite Programming Language</label> <br>
    <label for="javascript">Javascript <input type="radio" id="javascript" name="language" value="Javascript" checked></label>
	  <label for="php_radio">PHP <input type="radio" id="php_radio" name="language" value="PHP">
    </label>
    <br>
    <label>What are you using for your website?</label> <br>
    <label for="html">HTML</label><input id="html" type="checkbox" name="hobby[]" value="HTML">
    <label for="css">CSS</label><input type="checkbox" id="css" name="hobby[]" value="CSS">
    <label for="php">PHP</label><input type="checkbox" id="php" name="hobby[]" value="PHP">

	</fieldset>

  <fieldset>
    <legend>Project Topic</legend>
    <label for="topic">Topic: </label>
      <select id="topic" name="topic">
        <option value="sport">Sport</option>
        <option value="hobby">Hobby</option>
        <option value="subject">Academic Subject</option>
      </select>
  </fieldset>

  <fieldset>
    <legend>Add your Requested Days and Times</legend>
      <textarea name="message"></textarea>
  </fieldset>

  <input type="submit" value="submit">


</form>

</main>

<aside class="sidebar">

  <p>Welcome to the Innovation Lab Reference Site.</p>
  <p>Use the form to sign up for time to work on a project that interests you.  You will also be able to get help with your HTML, CSS, and PHP once you sign up!
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
