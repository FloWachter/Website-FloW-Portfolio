<?php

c::set('routes', array(
   array(
      'pattern' => 'home/modules/(:all)',
      'action'  => function($uid) {
         go($uid);
      }
   ),
   array(
      'pattern' => '(:any)(:all)',
      'action'  => function($u1,$u2) {
         $page = page($u1.$u2);

         if(!$page) $page = page('home/modules/' . $u1.$u2);
         if(!$page) $page = site()->errorPage();

         return site()->visit($page);
      }
   )
));