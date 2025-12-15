<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="43200">

    <title>Gallery</title>
    <link rel="stylesheet" href="css/nav.css" >
    <link rel="stylesheet" href="css/gallery.css">
</head>
<body>
   <?php
  include "navbar.php";
?>

<section id="gallery figure">

    <div>
<div class="video-wrapper">
  <iframe
    src="https://www.youtube.com/embed/om8opAhsxPI?si=2tfy7NaTGLVVg6Rf"
    title="Visit Saudi"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen>
  </iframe>
</div>

        <div>
        <figure>
        <figcaption><h2>Al-Sadu</h2></figcaption>
      <img src="img/Sadu.jpg" alt="Al-Sadu">
      <a href="https://www.youtube.com/watch?v=JZwZfNUpAVQ"><h3><strong>Click here</strong> to watch a video on how Al-Sadu is made</h3></a>
      </figure>
    </div>

    <div>
        <figure>
        <figcaption><h2>Riyadh Metro</h2></figcaption>
      <img src="img/Rmetro.jpg" alt="Riyadh Metro">
      <a href="https://youtu.be/KHmX8WipcIw"><strong><h3>Click here</strong> to watch a video about the Riyadh Metro</h3></a>
      </figure>
    </div>

    <div>
        <figure>
        <figcaption><h2>Najdi Ardah<h2></figcaption>
      <img src="img/Nardah.jpg" alt="Najdi Ardah">
      <a href="https://www.youtube.com/watch?v=TiKsts5xJR8&list=RDTiKsts5xJR8&start_radio=1"><h3><strong>Click here</strong> to watch a video on how the Najdi Ardah is performed</h3></a>
      </figure>
    </div>
    
  </div>
</section>
    

</body>

<footer>
 &copy;2025-26 / IMSIU /CCIS<sup>TM</sup>
</footer>
</html>
