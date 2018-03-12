<!doctype html>
<html lang="en">
    <head>
        <title>Gellinger</title>

        <!-- meta data -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="imagetoolbar" content="no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Web portfolio for Josh Gellinger">
        <meta name="keywords" content="web development, html, css, php, lassoscript, javascript, jquery, mysql, github, photoshop, illustrator, washington, state, university, vancouver, portfolio">
        <meta name="author" content="Josh Gellinger">

        <!--CSS links -->
        <link type="text/css" rel="stylesheet" href="josh_style.css">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">

        <!--fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    </head>
    <body>
      <div class="wrapper">
        <!--navigation div -->
          <div class="navigation">
              <span class="navSpan">Home</span>
              <span class="navSpan">Projects</span>
              <span class="navSpan">Skills</span>
              <span class="navSpan">Other</span>
          </div>
          <br>
          <div id="background" class="parallaxImg"></div>
          <div class="textDiv">
            <h3>Welcome</h3>
            <p>
              The resume, portfolio, and otherwise all-in-one website of Josh Gelllinger is currently under construction and will be up hopefully before the end of the year
            </p>
          </div>
          <div id="skills">
            <figure>
              <img src="img/animation.gif" class="imgRight">
              <figcaption class="captionLeft">
                Knows how to make .gifs
              </figcaption>
            </figure>
          </div>
      </div>
      <div id="footer">
        <span>propety of josh Gellinger</span><?php echo(date()); ?>
      </div>
    </body>
</html>
