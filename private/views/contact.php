<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <title>Covid-19</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://kit.fontawesome.com/ef94280ced.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

      .maingradient{
        position: absolute;
        width: 100%;
        z-index: 0;
      }
      .image{
        width: 100%;
      }

      .contact-info{
        margin-top: 50px;
        margin-bottom: 50px;
        display: flex;
        width: 100%;
        max-width: 1550px;
        align-items: center;
        justify-content: center;
        padding: 0 20px;

      }


      .card{
        background: #333;
        padding: 0 20px;
        margin: 0 10px;
        width: calc(33% - 20px);
        height: 200px;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        cursor: pointer;
      }

      .card-icon{
        font-size: 28px;
        background: #333;
        width: 60px;
        height: 60px;
        text-align: center;
        line-height: 60px !important;
        border-radius: 50%;
        transition: 0.3s linear;
      }

      .card:hover .card-icon{
        background: none;
        color: #333;
        transform: scale(1.6);
      }

      .card p{
        margin-top: 20px;
        font-weight: 300;
        letter-spacing: 2px;
        max-height: 0;
        color: black;
        opacity: 0;
        transition: 0.3s linear;

      }

      .card:hover p{
        max-height: 40px;
        opacity: 1;
      }


      @media screen and (max-width:800px) {
        .contact-info{
          flex-direction: column;
        }
        .card{
          width: 100%;
          max-width: 300px;
          margin: 10px 0;
        }
      }



      .about-section{
          background: url("https://cdn.discordapp.com/attachments/694882531832758352/719166268527214622/image_virus.png") no-repeat left;
          background-size: 55%;
          background-color: #fdfdfd;
          overflow: hidden;
          padding: 100px 0;
      }

      .inner-container{
          width: 55%;
          float: right;
          background-color: #fdfdfd;
          padding: 150px;
      }

      .inner-container h1{
          margin-bottom: 30px;
          font-size: 30px;
          font-weight: 900;
      }

      .text{
          font-size: 13px;
          color: #545454;
          line-height: 30px;
          text-align: justify;
          margin-bottom: 40px;
      }

      .skills{
          display: flex;
          justify-content: space-between;
          font-weight: 700;
          font-size: 13px;
      }

      @media screen and (max-width:1200px){
          .inner-container{
              padding: 80px;
          }
      }

      @media screen and (max-width:1000px){
          .about-section{
              background-size: 100%;
              padding: 100px 40px;
          }
          .inner-container{
              width: 100%;
          }
      }

      @media screen and (max-width:600px){
          .about-section{
              padding: 0;
          }
          .inner-container{
              padding: 60px;
          }
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

<img class="maingradient" src="">
<img class="image" src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80">

  <div class="contact-info">

    <div class="card">
      <i class="card-icon far fa-envelope"></i>
      <p>29147@ma-web.nl<br>
        29215@ma-web.nl<br>
        28462@ma-web.nl </p>
    </div>

    <div class="card">
      <i class="card-icon fab fa-discord"></i>
      <p></p>
    </div>

    <div class="card">
      <i class="card-icon fas fa-map-marker-alt"></i>
      <p>Netherlands, Amsterdam</p>
    </div>
  </div>

  <div class="about-section">
      <div class="inner-container">
          <h1>Corona Virus</h1>
          <p class="text">
            Wij als bedrijf wounden voor de mensen die niet weten of de winkel open of veilig is een website maken om daarover Informatie te geven. Heeft u hier vragen over of wilt u meer informatie krijgen neem dan contact met ons op wij helpen u graag verder!
          </p>
          <div class="skills">
              <span>240+ Winkels</span>
              <span>1230+ Internationaal</span>
              <span>Winkel Toegang</span>
          </div>
      </div>
  </div>






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
