<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
      </div>
  </body>
</html><br><br>
<br>

<h3>Inschrijven</h3>

<p>Schrijf u in op onze website om gebruik te maken van alle features!</p>

<form action="<?php echo url("register.handle")?>" method="POST">
  <div class="form-group">
    <label for="email">Email</label><br>
    <input type="email" name="email" value="<?php echo input('email')?>" class="form-control" id="email" aria-describedby="emailHelp">
    <br><small id="emailHelp" class="form-text text-muted">We delen uw email met niemand!</small>
    <?php if (isset($errors['email'] ) ): ?>
      <?php echo $errors['email'] ?>
    <?php endif;?>
  </div>
  <div class="form-group"><br><br>
    <label for="wachtwoord">Wachtwoord</label><br>
    <input type="password" name="wachtwoord" class="form-control" id="wachtwoord"><br>
    <?php if (isset($errors['wachtwoord'] ) ): ?>
      <?php echo $errors['wachtwoord'] ?>
    <?php endif;?>
  </div><br><br>
  <button type="submit" class="btn btn-primary">Registreren</button>
</form>

<style>


      @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

      body{
        margin: 0;
        padding: 0;
        text-align: center;
        background-color: #000;
        color: white;
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

      input{
        border: none;
        background-color: #444;
        border-radius: 3px;
        color: white;
        width: 30%;
        outline: none;
        padding: 4px;
        font-size: 20px;
        text-align: center;
      }

      button{
        border: none;
        background-color: #444;
        border-radius: 3px;
        color: white;
        width: 20%;
        outline: none;
        padding: 4px;
        font-size: 20px;
        text-align: center;
        cursor: pointer;
      }

      form{
        font-size: 20px;
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


</style>
