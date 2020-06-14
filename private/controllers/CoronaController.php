<?php

namespace Website\Controllers;

/**
 * Class CoronaController
 *
 *
 */
 class CoronaController {

   public function index(){

     $url = 'https://api.covid19api.com/countries';

     $client = new \GuzzleHttp\Client();
     $response = $client->request('GET', $url);
     $json = $response->getBody();

     $countries = json_decode($json, true);

     $template_engine = get_template_engine();
     echo $template_engine->render('corona_index', ['countries' => $countries]);

   }

   public function countryDetails($country){


     $url = 'https://api.covid19api.com/live/country/'. $country . '/status/confirmed';

     $client = new \GuzzleHttp\Client();
     $response = $client->request('GET', $url);
     $json = $response->getBody();

     $data = json_decode($json, true);

     $template_engine = get_template_engine();
     echo $template_engine->render('corona_country_details', ['stats' => $data]);

   }

 }
