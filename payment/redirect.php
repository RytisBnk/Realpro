<?php
 
 require_once('WebToPay.php');
  
 function get_self_url() {
     $s = substr(strtolower($_SERVER['SERVER_PROTOCOL']), 0,
                 strpos($_SERVER['SERVER_PROTOCOL'], '/'));
  
     if (!empty($_SERVER["HTTPS"])) {
         $s .= ($_SERVER["HTTPS"] == "on") ? "s" : "";
     }
  
     $s .= '://'.$_SERVER['HTTP_HOST'];
  
     if (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != '80') {
         $s .= ':'.$_SERVER['SERVER_PORT'];
     }
  
     $s .= dirname($_SERVER['SCRIPT_NAME']);
  
     return $s;
 }
  
 try {
     $self_url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  
     $request = WebToPay::redirectToPayment(array(
         'projectid'     => 0,
         'sign_password' => 'd41d8cd98f00b204e9800998ecf8427e',
         'orderid'       => 0,
         'amount'        => 1000,
         'currency'      => 'EUR',
         'country'       => 'LT',
         'accepturl'     => $self_url . '/accept',
         'cancelurl'     => $self_url . '/cancel',
         'callbackurl'   => $self_url . '/payment/callback.php',
         'test'          => 0,
     ));
 } catch (WebToPayException $e) {
     // handle exception
 } 