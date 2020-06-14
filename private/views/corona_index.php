<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Corona</title>
  </head>
  <body>
    <div class="header" id="navbar">
      <h2 class="logo">De co-winkel</h2>
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
    </div><br><br><br>
    <h3 class="mid">Corona Landen Overzicht</h3>
    <p class="mid">Kies het land waarover u informatie wilt.</p>

    <section class="corona_stats">
      <?php foreach ($countries as $country): ?>
        <a class="corona-stats__country" href="http://localhost/covid/bap/MVC/public/corona/<?php echo $country['Slug']?>"><?php echo $country['Country'] ?> (<?php echo $country['ISO2']?>)</a>
      <?php endforeach;?>
    </section>
    <br><br><br>

  </body>



<style>


      @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

      body{
        margin: 0;
        padding: 0;
        background-color: #fff;
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Old versions of Firefox */
        font-family: 'Righteous';

        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none; /* Non-prefixed version, currently
        supported by Chrome, Edge, Opera and Firefox */
      }

.mid{
  text-align: center;
}

      .country{
        margin-left: 23px;
      }

      /* nav */

      #navbar{
        transition: top 0.3s;
        z-index: 10;
        margin: 0;
        padding: 0;
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
        top: 0px;
        width: 100%;
        color: #fff;
      }

      .logo{
        font-family: 'Righteous', cursive;
        float: left;
        margin-left: 10px;
        text-transform: uppercase;
        margin-bottom: 100px;
        line-height: 20px;
      }

      .menu{
        font-family: 'Righteous', cursive;
        float: right;
        margin-right: 10px;
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

        .country{
          padding:
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

  .corona_stats{
    display: grid;
    padding: 10px;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
  }

  .corona-stats__country{
    background-color: #333;
    padding: 8px 10px;
    text-align: center;
    border-radius: 10px;

    text-decoration: none;
    display: block;
    color: #fff;
  }

  .corona-stats__country:hover{
    color: #fff;
    text-decoration: none;
    background: #224aa3;
  }

  .corona-stats__stat{
    background: #5d89f1;
    padding: 5px 10px;
    border-radius: 18px;
    display: block;
  }
</style>
