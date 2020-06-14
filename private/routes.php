<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

    // START: Zet hier al eigen routes
    // Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

    SimpleRouter::get( '/winkelview', 'WebsiteController@winkel' )->name( 'winkel' );
		SimpleRouter::get( '/winkels', 'WebsiteController@winkels' )->name( 'winkels' );
    SimpleRouter::get( '/contact', 'WebsiteController@contact' )->name( 'contact' );
    SimpleRouter::get( '/', 'WebsiteController@home' )->name( 'home' );


    SimpleRouter::get( '/registreren', 'RegistrationController@registrationForm' )->name( 'register.form' );
    SimpleRouter::post( '/registreren/verwerken', 'RegistrationController@handleRegistrationForm' )->name( 'register.handle' );
    SimpleRouter::get( '/registreren/bedankt', 'RegistrationController@registrationThankYou' )->name( 'register.thankyou' );

    SimpleRouter::get( '/login', 'LoginController@loginForm' )->name( 'login.form' );
    SimpleRouter::post( '/login/verwerken', 'LoginController@handleLoginForm' )->name( 'login.handle' );
    SimpleRouter::get( '/ingelogd/dashboard', 'LoginController@userDashboard' )->name( 'login.dashboard' );


    SimpleRouter::get( '/corona', 'CoronaController@index' )->name( 'corona.index' );
    SimpleRouter::get( '/corona/{country}', 'CoronaController@countryDetails' )->name( 'corona.details' )->where(['country' => '[A-Za-z0-9\-]+']);

    SimpleRouter::get( '/email', 'EmailController@sendTestEmail' )->name( 'email.test' );
    SimpleRouter::get( '/bekijk-email', 'EmailController@viewTestEmail' )->name( 'email.view' );





    // STOP: Tot hier al je eigen URL's zetten
    SimpleRouter::get( '/not-found', function () {
        http_response_code( 404 );

        return '404 Page not Found';
    } );

} );


// Dit zorgt er voor dat bij een niet bestaande route, de 404 pagina wordt getoond
SimpleRouter::error( function ( Request $request, \Exception $exception ) {
    if ( $exception instanceof NotFoundHttpException && $exception->getCode() === 404 ) {
        response()->redirect( site_url() . '/not-found' );
    }

} );
