<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <title>Covid-19</title>
    <link rel="stylesheet" href="css/winkels.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://kit.fontawesome.com/ef94280ced.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<script src="script.js"></script>

  </head>

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

  body{
    margin: 0;
    padding: 0;
    background-color: #111;
    -webkit-touch-callout: none; /* iOS Safari */
      -webkit-user-select: none; /* Safari */
       -khtml-user-select: none; /* Konqueror HTML */
         -moz-user-select: none; /* Old versions of Firefox */
          -ms-user-select: none; /* Internet Explorer/Edge */
              user-select: none; /* Non-prefixed version, currently
                                    supported by Chrome, Edge, Opera and Firefox */

  }

  /* nav */

  #navbar{
    transition: top 0.3s;
    z-index: 10;

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

  .logo{
    font-family: 'Righteous', cursive;
    float: left;
    text-transform: uppercase;
    margin-bottom: 100px;
    line-height: 40px;
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
  .image{
    width: 100%;
  }

  .gernetitle{
    color: white;
    font-family: 'Righteous', cursive;

  }



  .imageprofile{
    border-radius: 50%;
    width: 100%;
    height: 100%;
    transition: 0.3s;
  }

  .IconsForChanel{
    font-size: 30px;
    transition: 0.3s;
    margin-bottom: 10px;
  }

  .hovericon{
    color: #fff;
    transition: 0.3s;
  }

  .hovericon:hover{
    transition: 0.3s;
    color: #537859;
    transform: scale(1.3);
  }

  .testimonials{
    padding: 40px 0;
    background: #333;
    color: #537859;
    text-align: center;
  }
  .inner{
    max-width: 1200px;
    margin: auto;
    overflow: hidden;
    padding: 0 20px;
  }

  .border{
    width: 160px;
    height: 5px;
    background: #537859;
    margin: 26px auto;
  }

  .row{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .col{
    flex: 33.33%;
    max-width: 33.33%;
    box-sizing: border-box;
    padding: 15px;
    transition: 0.3s;
    margin-bottom: 11px;
    margin-top: 11px;
  }

  .col:hover{
    transition: 0.3s;
    transform: scale(1.1);
  }

  .testimonial{
    color: white;
    padding: 30px;
    min-height: 100%;
    max-height: 100%;
    background-color: #111 !important;
  }

  .testimonial:hover> .imageprofile{
    transition: 0.3s;
  }

  .testimonial img{
    width: 100px;
    height: 100px;
  }
  .name{
    font-size: 20px;
    text-transform: uppercase;
    margin: 20px 0;
  }
  .stars{
    color: #537859;
    margin-bottom: 20px;
  }


  @media screen and (max-width:960px) {
  .col{
    flex: 100%;
    max-width: 80%;
  }
  }

  @media screen and (max-width:600px) {
  .col{
    flex: 100%;
    max-width: 100%;
  }
  }

  .col{
    cursor: pointer;
  }

  </style>

  <body>

    <div class="header" id="navbar">
      <h2 class="logo">De co-winkel</h2>
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



<img class="image" src="https://kdvr.com/wp-content/uploads/sites/11/2020/03/GettyImages-1204696189.jpg?w=2560&h=1440&crop=1" >

<div class="testimonials">
  <div class="inner">
    <h1 class="gernetitle">Winkels</h1>
    <div class="border"></div>

    <div class="row">


      <div class="col" onclick="window.location='<?php echo url( 'winkel' ) ?>';">
        <div class="testimonial" data-aos="fade-up">
          <img class="imageprofile" src="https://werkenbij.hoogvliet.com/images/pub/afbeeldingen/Bakkerijwerkplek-klein.jpg">
          <div class="name">Bakkerij Van Hassel</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <p>Uw Warme Bakker van Hassel zorgt al sinds 1882 voor al uw Brood en Banket producten. 
          </p>

          <div class="IconsForChanel">
            <a href="#"><i class="fab fa-youtube hovericon"></i></a>
            <a href="#"><i class="fab fa-twitter-square hovericon"></i></a>
          </div>
        </div>
      </div>

      <div class="col" onclick="window.location='<?php echo url( 'winkel' ) ?>';">
        <div class="testimonial" data-aos="fade-up">
          <img class="imageprofile" src="https://werkenbij.hoogvliet.com/images/pub/afbeeldingen/Bakkerijwerkplek-klein.jpg">
          <div class="name">Bakkerij Van Hassel</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <p>Uw Warme Bakker van Hassel zorgt al sinds 1882 voor al uw Brood en Banket producten.
          </p>

          <div class="IconsForChanel">
            <a href="#"><i class="fab fa-youtube hovericon"></i></a>
            <a href="#"><i class="fab fa-twitter-square hovericon"></i></a>
          </div>
        </div>
      </div>

      <div class="col" onclick="window.location='<?php echo url( 'winkel' ) ?>';">
        <div class="testimonial" data-aos="fade-up">
          <img class="imageprofile" src="https://werkenbij.hoogvliet.com/images/pub/afbeeldingen/Bakkerijwerkplek-klein.jpg">
          <div class="name">Bakkerij Van Hassel</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <p>Uw Warme Bakker van Hassel zorgt al sinds 1882 voor al uw Brood en Banket producten.
          </p>

          <div class="IconsForChanel">
            <a href="#"><i class="fab fa-youtube hovericon"></i></a>
            <a href="#"><i class="fab fa-twitter-square hovericon"></i></a>
          </div>
        </div>
      </div>

      <div class="col" onclick="window.location='<?php echo url( 'winkel' ) ?>';">
        <div class="testimonial" data-aos="fade-up">
          <img class="imageprofile" src="https://werkenbij.hoogvliet.com/images/pub/afbeeldingen/Bakkerijwerkplek-klein.jpg">
          <div class="name">Bakkerij Van Hassel</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <p>Uw Warme Bakker van Hassel zorgt al sinds 1882 voor al uw Brood en Banket producten.
          </p>

          <div class="IconsForChanel">
            <a href="#"><i class="fab fa-youtube hovericon"></i></a>
            <a href="#"><i class="fab fa-twitter-square hovericon"></i></a>
          </div>
        </div>
      </div>

      <div class="col" onclick="window.location='<?php echo url( 'winkel' ) ?>';">
        <div class="testimonial" data-aos="fade-up">
          <img class="imageprofile" src="https://werkenbij.hoogvliet.com/images/pub/afbeeldingen/Bakkerijwerkplek-klein.jpg">
          <div class="name">Bakkerij Van Hassel</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <p>Uw Warme Bakker van Hassel zorgt al sinds 1882 voor al uw Brood en Banket producten.
          </p>

          <div class="IconsForChanel">
            <a href="#"><i class="fab fa-youtube hovericon"></i></a>
            <a href="#"><i class="fab fa-twitter-square hovericon"></i></a>
          </div>
        </div>
      </div>

      <div class="col" onclick="window.location='<?php echo url( 'winkel' ) ?>';">
        <div class="testimonial" data-aos="fade-up">
          <img class="imageprofile" src="https://werkenbij.hoogvliet.com/images/pub/afbeeldingen/Bakkerijwerkplek-klein.jpg">
          <div class="name">Bakkerij Van Hassel</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <p>Uw Warme Bakker van Hassel zorgt al sinds 1882 voor al uw Brood en Banket producten.
          </p>

          <div class="IconsForChanel">
            <a href="#"><i class="fab fa-youtube hovericon"></i></a>
            <a href="#"><i class="fab fa-twitter-square hovericon"></i></a>
          </div>
        </div>
      </div>

      <div class="col" onclick="window.location='<?php echo url( 'winkel' ) ?>';">
        <div class="testimonial" data-aos="fade-up">
          <img class="imageprofile" src="https://werkenbij.hoogvliet.com/images/pub/afbeeldingen/Bakkerijwerkplek-klein.jpg">
          <div class="name">Bakkerij Van Hassel</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <p>Uw Warme Bakker van Hassel zorgt al sinds 1882 voor al uw Brood en Banket producten.
          </p>

          <div class="IconsForChanel">
            <a href="#"><i class="fab fa-youtube hovericon"></i></a>
            <a href="#"><i class="fab fa-twitter-square hovericon"></i></a>
          </div>
        </div>
      </div>

      <div class="col" onclick="window.location='<?php echo url( 'winkel' ) ?>';">
        <div class="testimonial" data-aos="fade-up">
          <img class="imageprofile" src="https://werkenbij.hoogvliet.com/images/pub/afbeeldingen/Bakkerijwerkplek-klein.jpg">
          <div class="name">Bakkerij Van Hassel</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <p>Uw Warme Bakker van Hassel zorgt al sinds 1882 voor al uw Brood en Banket producten.
          </p>

          <div class="IconsForChanel">
            <a href="#"><i class="fab fa-youtube hovericon"></i></a>
            <a href="#"><i class="fab fa-twitter-square hovericon"></i></a>
          </div>
        </div>
      </div>

      <div class="col" onclick="window.location='<?php echo url( 'winkel' ) ?>';">
        <div class="testimonial" data-aos="fade-up">
          <img class="imageprofile" src="https://werkenbij.hoogvliet.com/images/pub/afbeeldingen/Bakkerijwerkplek-klein.jpg">
          <div class="name">Bakkerij Van Hassel</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <p>Uw Warme Bakker van Hassel zorgt al sinds 1882 voor al uw Brood en Banket producten.
          </p>

          <div class="IconsForChanel">
            <a href="#"><i class="fab fa-youtube hovericon"></i></a>
            <a href="#"><i class="fab fa-twitter-square hovericon"></i></a>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>

<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>





  <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
  <script>



  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-60px";
    }
    prevScrollpos = currentScrollPos;
  }

  AOS.init();
</script>
</html>
