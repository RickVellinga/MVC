<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <title>Covid-19</title>
    <link rel="stylesheet" href="../css/home.css">
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

    .aboutsection{
      color: white;
      margin-top: 50px;
      margin-bottom: 50px;
      font-family: 'Bree Serif', serif;
    }

    .aboutplet{
      transition: 0.3s;
    }

    .aboutplet:hover{
      transition: 0.3s;
      transform: scale(1.1);
    }

    .abouticon{
      transition: 0.3s;
    }

    .aboutplet:hover > .abouticon{
      transition: 0.3s;
      color: #537859;
    }



    .whitestyle{
      color: white;
      font-family: 'Bree Serif', serif;
    }

    .teammain{
      color: white;
      transition: 0.3s;
    }

    .imageteam{
    width: 100%;
    min-height: 200px;
    max-height: 200px;
    transition: 0.3s;
    filter: grayscale(1);
    border-radius: 5px;

    }

    .hoverimage{
      transition: 0.3s;
    }

    .hidetest{
     margin-top: 15px;
    }

    .hoverimage:hover> .imageteam{
      transition: 0.3s;
      filter: grayscale(0);
    }







    .image{
      width: 100%;
    }

    .imagedexus{
      width: 25%;
    }

    .w3-row{
      background-color: #222;
      color: white;
      font-family: 'Anton', sans-serif;
      margin-bottom: 0px;
    }

    .Goodat{
      background-color: #222;
      margin-top: 0px;
      color: #fff;
      padding-bottom: 50px;
    }

    .margingootat{
      margin-left: 50px;
      margin-right: 50px;
      transition: 0.3s;
    }

    .margingootat:hover{
      transform: scale(1.02);
      transition: 0.3s;
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


<img class="image" src="https://blog.hdwallsource.com/wp-content/uploads/2016/04/awesome-store-wallpaper-41971-42959-hd-wallpapers.jpg" >

<div class="w3-container aboutsection" id="about">
  <h3 class="w3-center" data-aos="fade-up">Over</h3>
  <p class="w3-center w3-large" data-aos="fade-up">Straks</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
  <div data-aos="fade-up" data-aos-delay="50">
    <div class="w3-quarter aboutplet">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center abouticon"></i>
      <p class="w3-large">Project</p>
      <p>Wij als team hebben dit project gekregen voor een opdracht van de school Media College Amsterdam. </p>
    </div>
  </div>
  <div data-aos="fade-up" data-aos-delay="100">
    <div class="w3-quarter aboutplet">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center abouticon"></i>
      <p class="w3-large">Tijd</p>
      <p>We hebben ongeveer 5 weken de tijd gehad voor het maken van dit project en hebben die tijd goed gebruikt. </p>
    </div>
  </div>
  <div data-aos="fade-up" data-aos-delay="150">
    <div class="w3-quarter aboutplet">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center abouticon"></i>
      <p class="w3-large">Team</p>
      <p>De mensen uit het team waren Milo Dijkman, Rick Vellinga & Daan Carstens. </p>
    </div>
  </div>
  <div data-aos="fade-up" data-aos-delay="200">
    <div class="w3-quarter aboutplet">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center abouticon"></i>
      <p class="w3-large">Taken</p>
      <p>De backend van het project hebben we vooral te danken aan Rick Vellinga en het grootste deel van de front end aan Milo Dijkman en Daan Carstens.</p>
    </div>
  </div>

  </div>
</div>

<div class="w3-container" id="team">
  <h3 class="w3-center whitestyle">Makers</h3>
  <p class="w3-center w3-large whitestyle">Deze Mensen</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">

    <div class="w3-col l3 m6 w3-margin-bottom teammain" data-aos="fade-up">
      <div class="w3-card hoverimage">
        <img class="imageteam" src="https://images.unsplash.com/photo-1541423408854-5df732b6f6d1?ixlib=rb-1.2.1&w=1000&q=80" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3 class="hidetest">Daan Carstens</h3>
          <p class="w3-opacity">Hij heeft voor de website veel Front end gedaan en de designs gemaakt.</p>
          <p>Front End Developer</p>
        </div>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom teammain" data-aos="fade-up">
      <div class="w3-card hoverimage">
        <img class="imageteam" src="https://lh3.googleusercontent.com/proxy/oiKxOwTYlSMiQe7aBahuag2XJbjbbC5UvsOCKOkhu2KR8VTXx4nul5wm76GqK7h6Q0LbDmNRyLCG-h6BqbhxCMvQO1lPKlBPnFSO-qT7_EP_rr0JUvbK" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3 class="hidetest">Milo Dijkman</h3>
          <p class="w3-opacity">Hij heeft veel Front end gedaan en ook soms geholpen met het Backend</p>
          <p>Front / Back End Developer</p>
        </div>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom teammain" data-aos="fade-up">
      <div class="w3-card hoverimage">
        <img class="imageteam" src="https://3.bp.blogspot.com/-3mBBwa52z5c/Xd2y5dLAkaI/AAAAAAAARv8/yMOILu2HPtAy4Kl0C3bYyRS8tSFIl8z9QCLcBGAsYHQ/w914-h514-p-k-no-nu/mountain-landscape-digital-art-uhdpaper.com-4K-4.1994-wp.thumbnail.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3 class="hidetest">Rick Vellinga</h3>
          <p class="w3-opacity">Hij heeft het meeste back end gedaan en soms ook geholpen met het Front end.</p>
          <p>Back / Front End Developer</p>
        </div>
      </div>
    </div>

  </div>
</div>


<div class="w3-row w3-center w3-padding-16">
  <div class="w3-quarter w3-section" data-aos="fade-up">
    <span class="w3-xlarge">50+</span><br>
    Winkels
  </div>
  <div class="w3-quarter w3-section" data-aos="fade-up">
    <span class="w3-xlarge">275+</span><br>
    Landen
  </div>
  <div class="w3-quarter w3-section" data-aos="fade-up">
    <span class="w3-xlarge">300</span><br>
    Aanmeldingen
  </div>
  <div class="w3-quarter w3-section" data-aos="fade-up">
    <span class="w3-xlarge">3</span><br>
    Developers
  </div>
</div>

<div class="Goodat">
  <p class="w3-large w3-center w3-padding-16">Statistieken</p>
  <div class="margingootat">
    <p class="w3-wide"><i class="far fa-building"></i>Development</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" data-aos-offset="50" data-aos="fade-right" style="width:60%">60%</div>
    </div>
  </div>
  <div class="margingootat">
    <p class="w3-wide"><i class="fab fa-css3"></i>Back End</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" data-aos-offset="50" data-aos="fade-right" style="width:70%">70%</div>
    </div>
  </div>
  <div class="margingootat">
    <p class="w3-wide"><i class="fas fa-shapes"></i>Algemene Info</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" data-aos-offset="50" data-aos="fade-right" style="width:45%">45%</div>
    </div>
  </div>


</div>






  <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
  <script>
  AOS.init();
</script>
</html>
