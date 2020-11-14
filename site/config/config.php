<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PERSONAL-202107aad3dbbeeeb1d2e710c440d80a');

c::set('panel.stylesheet', 'assets/css/panel.css');



//thumb::$defaults['bin'] = '/usr/local/bin/convert';
c::set('thumbs.driver', 'im');



c::set('debug',true);

c::set('cache', false);

//c::set('home', 'home');

c::set('scssNestedCheck', true); 


c::set('routes', array(
  
  array(
    'pattern' => 'home/modules/(:all)',
    'action'  => function($uid) {
      go($uid);
    }
  ),
  array(
    'pattern' => 'case-studies/modules/(:all)',
    'action'  => function($uid) {
      go($uid);
    }
  ),
  array(
    'pattern' => 'work/modules/(:all)',
    'action'  => function($uid) {
      go($uid);
    }
  ),
  array(
    'pattern' => 'agency/modules/(:all)',
    'action'  => function($uid) {
      go($uid);
    }
  ),
  array(
    'pattern' => 'news/modules/(:all)',
    'action'  => function($uid) {
      go($uid);
    }
  ),
  array(
    'pattern' => '(:any)(:all)',
    'action'  => function($u1,$u2) {

      $page = page($u1.$u2);

      if(!$page) $page = page('home/modules/' . $u1.$u2);
      if(!$page) $page = page('work/modules/' . $u1.$u2);
      if(!$page) $page = page('agency/modules/' . $u1.$u2);
      if(!$page) $page = page('news/modules/' . $u1.$u2);
      if(!$page) $page = page('case-studies/modules/' . $u1.$u2);
      if(!$page) $page = site()->errorPage();

      return site()->visit($page);

    }
  ),
));





 
/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
