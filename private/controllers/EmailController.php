<?php

namespace Website\Controllers;

/**
 * Class CoronaController
 *
 *
 */
 class EmailController {

   public function sendTestEmail(){

     $mailer = getSwiftMailer();
     $message = createEmailMessage('29215@ma-web.nl', 'Registratie Email', 'Rick Vellinga', 'rickvellinga2408@gmail.com');
     $message->setBody('Uw account is succesvol geregistreerd');
     // $attachment = \Swift_Attachment::fromPath('my-document.pdf');
     // $message->attach($attachment);

     $aantal_verstuurd = $mailer->send($message);
     $template_engine = get_template_engine();
  		echo $template_engine->render('ontvangen');

   }

   public function viewTestEmail(){

     $mailer = getSwiftMailer();
     $message = createEmailMessage('29215@ma-web.nl', 'Test Email', 'Rick Vellinga', 'rickvellinga2408@gmail.com');

     $template_engine = get_template_engine();
  		echo $template_engine->render('email', ['message' => null]);

   }

 }
