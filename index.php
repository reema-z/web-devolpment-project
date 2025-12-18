<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="43200">

    <title>Visit Saudi</title>
    <link rel="stylesheet" href="css/nav.css" >
    <link rel="stylesheet" href="css/homepage.css">  


    <style>
        df-messenger {
          position: fixed;
          bottom: 20px;
          left: 20px;
          z-index: 9999;
        }

        df-messenger .df-chat-wrapper {
          max-height: 500px;
        }
    </style>

    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
      intent="WELCOME"
      chat-title="VisitSaudiBot"
      agent-id="17bf1ddd-6741-46ee-8ee2-e66225527cf1"
      language-code="en"
    ></df-messenger>

</head>
<body>
  <?php
  include "navbar.php";
?>
  <header>
    <div class="top-bar">
    <a href="mailto:445001472@sm.edu.imamu.sa">Email: 445001472@sm.edu.imamu.sa</a> |
    <a href="tel:+966552616596">Phone: +966 552616596</a> |
    <a href="https://www.linkedin.com/in/reema-alzoman-6b30732a7?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank">LinkedIn</a> |
    <a href="https://github.com/reema-z/web-devolpment-project.git" target="_blank">GitHub</a>
  </header>

<?php
if (isset($_SESSION['user'])) {
    echo "<h2>Welcome, " . htmlspecialchars($_SESSION['user']) . "!</h2>";
}
?>

<div>
  <h1 id="top" > welcome to Saudi!! Where traditions meets modren adventure!</h1>
</div>
<section id="adventure" >
  <div>
    <h1>Book your next adventure! </h1>
    <figure>
      <img src="img/bayada.png" alt="bayada park" width="500" height="350">
      <figcaption> <h2 > Bayada Park</h2>
      Embark on an exciting mountain adventure in Al Bayda’a Park in Meadinah,
       one of the newest natural treasures in the Hijaz region. Discover remarkable geological 
       formations and the diverse flora and fauna alongside a certified mountain guide, experiencing a journey 
       that blends cultural richness with the beauty of nature in a breathtaking setting.</figcaption>
        <a href="https://www.google.com/maps/dir/?api=1&destination=24.461748,39.624043"> <h3><em>Get Directoins!</em></h3></a>
    </figure>
   <figure>
      <img src="img/qatt.png" alt="Al-Qatt Al-Aseeri " width="500" height="350">
      <figcaption> <h2 >  Discover Al-Qatt Al-Aseeri Art </h2>
    This vibrant female art tradition, inscribed on UNESCO's Intangible Cultural Heritage list in 2017,
     features geometric patterns and bright colors that have decorated Aseeri homes for generations.
      Created using natural pigments like gypsum, charcoal, and plant extracts, Al-Qatt was traditionally used 
      to showcase a family's wealth and status.
        <br>
        <ul>Where to see it:
          <li>  Fatimah's Museum of Aseeri Woman's Heritage - home to works by master artist Fatimah Faye</li>
          <li> Rijal Almaa Heritage Village - featuring preserved historical examples </li>
          <li>       Al-Muftaha Village - where contemporary artists continue the tradition</li>
        </ul>
</figcaption>
    </figure>
  </div>

</section>


<section id="map">
  <h2>Saudi Arabia on the Map </h2>

  <div class="map-container">
    <a href="https://www.google.com/maps/place/Saudi+Arabia/" target="_blank">
      <img src="img/mapKSA.png" alt="Map of Saudi Arabia">
    </a>
      <p>
    Saudi Arabia is a land of rich heritage and rapid modernization.  
    From the holy cities of Makkah and Madinah to futuristic projects like NEOM,  
    the Kingdom represents a blend of history, culture, and innovation.
  </p>
  </div>
</section>
<a href="#top" class="home-btn">
  <img src="img/home.png" alt="Home" width="60" height="60">
</a>
</body>


<footer>
  &copy;2025-26 / IMSIU /CCIS<sup>TM</sup>
</footer>
</html>