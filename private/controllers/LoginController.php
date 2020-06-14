<?php

namespace Website\Controllers;

/**
 * Class RegistrationController
 *
 * Inloggen gebruikers
 *
 */
 class LoginController {

   public function loginForm() {

     $template_engine = get_template_engine();
     echo $template_engine->render('login_form');

   }

   public function handleLoginForm() {

     $result = validateRegistrationData($_POST);

     if(userNotRegistered($result['data']['email'])) {
       $result['errors']['email'] = 'Deze gebruiker is niet bekend';
     } else {

       $gebruiker = getUserByEmail( $result['data']['email'] );

       if(password_verify($result['data']['wachtwoord'], $gebruiker['wachtwoord'])){

       } else {

       }
       $result['errors']['wachtwoord'] = 'Wachtwoord klopt niet!';
     }


     $template_engine = get_template_engine();
     echo $template_engine->render('login_form', ['errors' => $result['errors']] );

   }

   public function userDashboard(){
     echo "Ingelogd";
   }

 }
