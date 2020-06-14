<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <title>Covid-19</title>
    <link rel="stylesheet" href="views/css/winkel.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  </head>

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

  body{
    margin: 0;
    padding: 0;
  }

  .imagemain{
    width: 100%;
    margin-bottom: 0px;
    padding-bottom: 0px;
  }

  .textmain{
    font-weight: 900;
    background-color: #222;
    color: white;
    padding-top: 50px;
    padding-bottom: 50px;
    margin-bottom: 0px;
    margin-top: 0px;
    font-size: 4em;
    font-family: 'Bebas Neue', cursive;
  }

  /* nav */

  #navbar{
    transition: top 0.3s;
    z-index: 10;
    padding-bottom: 25px;
  }

  .Contact{
    background-color: #537859;
    color: white !important;
    transition: 0.3s;
  }

  .Contact:hover{
    background-color: #333;
    transition: 0.3s;
    color: #537859 !important;
  }

  .header{
    background:#333;
    position: fixed;
    height: 60px;
    width: 100%;
    padding: 0 20px;
    color: #fff;
  }

  .logoss{
    font-family: 'Righteous', cursive;
    float: left;
    text-transform: uppercase;
    line-height: 55px;
    margin-top: -0px;
  }

  .menu{
    font-family: 'Righteous', cursive;
    float: right;
    line-height: 30px;
  }

  .menu a{
    border-radius: 10px;
    color: #537859;
    text-transform: uppercase;
    text-decoration: none;
    padding: 0 10px;
    transition: 0.4s;
  }
  .show-menu-btn,.hide-menu-btn{
    transition: 0.4s;
    font-size: 30px;
    cursor: pointer;
    display: none;
  }
  .show-menu-btn{
    float: right;
  }
  .show-menu-btn i{
    line-height: 60px;
  }

  .menu a:hover,
  .show-menu-btn:hover,
  .hide-menu-btn:hover{
    color: #fff;
    letter-spacing: 1px;
  }

  @media screen and (max-width:800px) {
    .show-menu-btn,.hide-menu-btn{
      display: block;
    }
    .menu{
      position: fixed;
      width: 100%;
      height: 100vh;
      background: #333;
      right: -100%;
      top: 0;
      text-align: center;
      padding: 80px 0;
      line-height: normal;
      transition: 0.7s;
    }
    .menu a{
      display: block;
      padding: 20px;
    }
    .hide-menu-btn{
      position: absolute;
      top: 40px;
      right: 40px;
    }
    #chk:checked ~ .menu{
      right: 0;
    }
  }

  /* end nav */

  .informatietext{
    font-family: 'Bebas Neue', cursive;
    font-size: 3em;
    border-bottom: 4px solid black;
    padding-bottom: 5px;
    margin-left: 100px;
    margin-right: 100px;
    margin-bottom: 0px;
  }

  .maintext{
    font-family: 'Montserrat', sans-serif;
    font-size: 2em;
    border-bottom: 4px solid black;
    padding-bottom: 5px;
    margin-left: 100px;
    margin-right: 100px;
    padding-bottom: 30px;
  }

  .map{
    width: 100%;
    cursor: pointer;
    transition: 0.3s;
    filter: grayscale(100%);
  }

  .map:hover{
      transition: 0.3s;
      filter: grayscale(0%);
     box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
  }

  </style>

  <body>

    <div class="header" id="navbar">
      <h2 class="logoss">De co-winkel</h2>
      <input type="checkbox" id="chk">
      <label for="chk" class="show-menu-btn">
        <i class="fas fa-ellipsis-h"></i>
      </label>

      <ul class="menu">
        <a class=" waves-effect waves-light" href="<?php echo url( 'home' ) ?>">Home</a>
        <a href="<?php echo url( 'winkels' ) ?>" class=" waves-effect waves-light" href="#">Winkels</a>
        <a href="<?php echo url( 'register.form' ) ?>" class=" waves-effect waves-light" >Register</a>
        <a href="<?php echo url( 'corona.index' ) ?>" class=" waves-effect waves-light" >Corona Info</a>
        <a class=" waves-effect waves-light Contact" href="<?php echo url( 'contact' ) ?>">Contact</a>
        <label for="chk" class="hide-menu-btn">
          <i class="fas fa-times"></i>
        </label>
      </ul>
    </div>

<br> <br>
    <div data-aos="flip-up">
      <h5 class="center-align textmain" data-aos-delay="100" data-aos="fade-up">Bakkerij Van Hassel</h5>
    </div>

    <img class="imagemain z-depth-5" data-aos-delay="300" data-aos="fade-up" src="https://www.redie.nl/projecten/fotos/bakkerij/bakkerij-van-hassel-01.jpg">

    <div class="textinformatie">
      <p data-aos="zoom-in-up" class="center-align informatietext">Informatie</p>
      <p data-aos="zoom-in-up" class="maintext center-align">
        Met gepaste trots presenteren wij u op deze site ons volledige assortiment, een stukje
        historie en onze contactgegevens. Uw Warme Bakker van Hassel zorgt al sinds 1882 voor al
        uw Brood en Banket producten. Dit doen we met vakmanschap en gaan daar bij altijd voor de
        beste kwaliteit. Wij presenteren deze producten dan ook met trots in onze winkel. Kom gerust
        eens even langs want we hebben voor iedereen wat lekkers.
        Graag tot ziens! Medewerkers Bakkerij van Hassel
      </p>
      <a href="https://www.google.com/maps/place/Bakkerij+Van+Hassel/@51.4544711,4.6409126,17z/data=!3m1!4b1!4m5!3m4!1s0x47c41cee2c9c5453:0x35385107a859e473!8m2!3d51.4544711!4d4.6431013">
        <img class="map" src="https://i.gyazo.com/d7d1de35ba5d8d269ab67b76f67a85bc.png" >
      </a>


    </div>


  </body>
  <script>
  AOS.init();
</script>
</html>
