<!--

Tasks:

1. Make the page responsive.
2. Replace image clicks with a popover lightbox.
3. Replace images with dynamic content retrieved from web. (Optional - Mandatory to be consider for web services developer position)

-->
<?php date_default_timezone_set("Europe/London"); ?>
<!DOCTYPE html>
<html>
<head>
  <link href="css/screen.css" media="screen, projection" rel="stylesheet">
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/jquery.jcarousel.min.js"></script>
  <script src="js/ui/jquery-ui-1.10.4.min.js"></script>
  <script src="js/script.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width:960px;">
  <meta name="copyright" content="Copyright © <?php echo date("Y"); ?>">
  <link rel="icon" href="favicon.ico">
  <link rel="shortcut icon" href="favicon.ico">
  <title>Schools and Centres | City University London</title>
</head>
<body id="schoolspage">
  <article>
    <header>
      <img src="i/cityuniversitylondonlogo.png" width="320" height="100" alt="City University London" title="City University London Logo">
      <h1>Schools and Centres</h1>
    </header>
  
    <section id="schools">
      <nav>
        <ul>
          <li><a href="#sass">School of Arts and Social Sciences</a></li>
          <li><a href="#sems">School of Engineering and Mathematical Sciences</a></li>
          <li><a href="#shs">School of Health Sciences</a></li>
          <li><a href="#soi">School of Informatics</a></li>
        </ul>
      </nav>

      <section class="school" id="sass">
        <ul class="gallery">
          <li>
          <figure>
            <a href="i/sass/01_2048x1396.jpg"><img class="thumbnail" src="i/sass/01_tn.jpg" alt="School of Arts and Social Sciences 1" title="School of Arts and Social Sciences 1" width="600" height="409"></a>
            <figcaption>
              School of Arts and Social Sciences 1
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/sass/02_2048x1152.jpg"><img class="thumbnail" src="i/sass/02_tn.jpg" alt="School of Arts and Social Sciences 2" title="School of Arts and Social Sciences 2" width="600" height="337"></a>
            <figcaption>
              School of Arts and Social Sciences 2
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/sass/03_2048x1437.jpg"><img class="thumbnail" src="i/sass/03_tn.jpg" alt="School of Arts and Social Sciences 3" title="School of Arts and Social Sciences 3" width="600" height="421"></a>
            <figcaption>
              School of Arts and Social Sciences 3
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/sass/04_2048x1536.jpg"><img class="thumbnail" src="i/sass/04_tn.jpg" alt="School of Arts and Social Sciences 4" title="School of Arts and Social Sciences 4" width="600" height="450"></a>
            <figcaption>
              School of Arts and Social Sciences 4
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/sass/05_2048x1536.jpg"><img class="thumbnail" src="i/sass/05_tn.jpg" alt="School of Arts and Social Sciences 5" title="School of Arts and Social Sciences 5" width="600" height="450"></a>
            <figcaption>
              School of Arts and Social Sciences 5
            </figcaption>
          </figure>
          </li>
        </ul>
        <a class="jcarousel-control-prev" href="#">‹</a>
        <a class="jcarousel-control-next" href="#">›</a>
        <div class="jcarousel-pagination"></div>
      </section>

      <section class="school" id="sems">
        <ul class="gallery">
          <li>
          <figure>
            <a href="i/sems/01_2048x1439.jpg"><img class="thumbnail" src="i/sems/01_tn.jpg" alt="School of Engineering and Mathematical Sciences 1" title="School of Engineering and Mathematical Sciences 1" width="600" height="421"></a>
            <figcaption>
              School of Engineering and Mathematical Sciences 1
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/sems/02_2048x1366.jpg"><img class="thumbnail" src="i/sems/02_tn.jpg" alt="School of Engineering and Mathematical Sciences 2" title="School of Engineering and Mathematical Sciences 2" width="600" height="400"></a>
            <figcaption>
              School of Engineering and Mathematical Sciences 2
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/sems/03_2048x1529.jpg"><img class="thumbnail" src="i/sems/03_tn.jpg" alt="School of Engineering and Mathematical Sciences 3" title="School of Engineering and Mathematical Sciences 3" width="600" height="448"></a>
            <figcaption>
              School of Engineering and Mathematical Sciences 3
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/sems/04_2048x1365.jpg"><img class="thumbnail" src="i/sems/04_tn.jpg" alt="School of Engineering and Mathematical Sciences 4" title="School of Engineering and Mathematical Sciences 4" width="600" height="400"></a>
            <figcaption>
              School of Engineering and Mathematical Sciences 4
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/sems/05_2048x1268.jpg"><img class="thumbnail" src="i/sems/05_tn.jpg" alt="School of Engineering and Mathematical Sciences 5" title="School of Engineering and Mathematical Sciences 5" width="600" height="371"></a>
            <figcaption>
              School of Engineering and Mathematical Sciences 5
            </figcaption>
          </figure>
          </li>
        </ul>
        <a class="jcarousel-control-prev" href="#">‹</a>
        <a class="jcarousel-control-next" href="#">›</a>
        <div class="jcarousel-pagination"></div>
      </section>

      <section class="school" id="shs">
        <ul class="gallery">
          <li>
          <figure>
            <a href="i/shs/01_2048x1362.jpg"><img class="thumbnail" src="i/shs/01_tn.jpg" alt="School of Health Sciences 1" title="School of Health Sciences 1" width="600" height="399"></a>
            <figcaption>
              School of Health Sciences 1
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/shs/02_2048x1365.jpg"><img class="thumbnail" src="i/shs/02_tn.jpg" alt="School of Health Sciences 2" title="School of Health Sciences 2" width="600" height="400"></a>
            <figcaption>
              School of Health Sciences 2
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/shs/03_2048x1368.jpg"><img class="thumbnail" src="i/shs/03_tn.jpg" alt="School of Health Sciences 3" title="School of Health Sciences 3" width="600" height="400"></a>
            <figcaption>
              School of Health Sciences 3
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/shs/04_2048x1368.jpg"><img class="thumbnail" src="i/shs/04_tn.jpg" alt="School of Health Sciences 4" title="School of Health Sciences 4" width="600" height="400"></a>
            <figcaption>
              School of Health Sciences 4
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/shs/05_2048x1368.jpg"><img class="thumbnail" src="i/shs/05_tn.jpg" alt="School of Health Sciences 5" title="School of Health Sciences 5" width="600" height="400"></a>
            <figcaption>
              School of Health Sciences 5
            </figcaption>
          </figure>
          </li>
        </ul>
        <a class="jcarousel-control-prev" href="#">‹</a>
        <a class="jcarousel-control-next" href="#">›</a>
        <div class="jcarousel-pagination"></div>
      </section>

      <section class="school" id="soi">
        <ul class="gallery">
          <li>
          <figure>
            <a href="i/soi/01_2048x1368.jpg"><img class="thumbnail" src="i/soi/01_tn.jpg" alt="School of Informatics 1" title="School of Informatics 1" width="600" height="400"></a>
            <figcaption>
              School of Informatics 1
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/soi/02_2048x1536.jpg"><img class="thumbnail" src="i/soi/02_tn.jpg" alt="School of Informatics 2" title="School of Informatics 2" width="600" height="450"></a>
            <figcaption>
              School of Informatics 2
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/soi/03_2048x1365.jpg"><img class="thumbnail" src="i/soi/03_tn.jpg" alt="School of Informatics 3" title="School of Informatics 3" width="600" height="400"></a>
            <figcaption>
              School of Informatics 3
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/soi/04_2048x1536.jpg"><img class="thumbnail" src="i/soi/04_tn.jpg" alt="School of Informatics 4" title="School of Informatics 4" width="600" height="450"></a>
            <figcaption>
              School of Informatics 4
            </figcaption>
          </figure>
          </li>
          <li>
          <figure>
            <a href="i/soi/05_2048x1259.jpg"><img class="thumbnail" src="i/soi/05_tn.jpg" alt="School of Informatics 5" title="School of Informatics 5" width="600" height="369"></a>
            <figcaption>
              School of Informatics 5
            </figcaption>
          </figure>
          </li>
        </ul>
        <a class="jcarousel-control-prev" href="#">‹</a>
        <a class="jcarousel-control-next" href="#">›</a>
        <div class="jcarousel-pagination"></div>
      </section>
    </section>

    <section id="sidebar">
      <h1>About City</h1>
      <p>City University London is a leading international University and the only university in London to be both committed to academic excellence and focused on business and the professions.</p>
      <p>City University London is a special place. With skill and dedication, we have been using education, research and enterprise to transform the lives of our students, our community and the world for over a hundred years.</p>
      <h2>Academic excellence for business and the professions</h2>
      <p>We are a leading international university and the only university in London to be both committed to academic excellence and focused on business and the professions.</p>
    </section>

    <footer>
      <p><a href="http://www.city.ac.uk/">City University London</a>, Northampton Square, London EC1V 0HB, United Kingdom | <a href="tel:+442070405060">+44 (0)20 7040 5060</a></p>
    </footer>
  </article>
</body>
</html>
