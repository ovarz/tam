<!DOCTYPE html>
<html lang="id">
<base href="/tam/" />
<?php 
  $_SERVER['TAM'] = $_SERVER['DOCUMENT_ROOT'] . '/tam/'; 
  $anticache = date ('s'.'i'.'H'.'d'.'m'.'Y');
?>

<?php
  return[
    'Dashboard' => [
      'icon' => 'home',
      'label' => 'Dashboard',
      'link' => '',
      'parent' => 'no',
      'subnav' => []
    ],
    'FAQ' => [
      'icon' => 'faq',
      'label' => 'F.A.Q',
      'link' => 'faq/',
      'parent' => 'no',
      'subnav' => []
    ],
    'L-Fleet' => [
      'icon' => 'lfleet',
      'label' => 'L-Fleet',
      'link' => 'lfleet/',
      'parent' => 'yes',
      'subnav' => [
        [
		  'icon' => 'sub',
		  'label' => 'Vehicle Monitoring',
		  'link' => 'lfleet/vehicle-monitoring/',
          'parent' => 'no'
		],
        [
		  'icon' => 'sub',
		  'label' => 'Vehicle Management',
		  'link' => 'lfleet/vehicle-management/',
          'parent' => 'no'
		],
        [
		  'icon' => 'sub',
		  'label' => 'Booking Service Request',
		  'link' => 'lfleet/booking-service-request/',
          'parent' => 'no'
		],
        [
		  'icon' => 'sub',
		  'label' => 'ODO Update History',
		  'link' => 'lfleet/odo-update-history/',
          'parent' => 'no'
		],
        [
		  'icon' => 'sub',
		  'label' => 'Alert',
		  'link' => 'lfleet/alert/',
          'parent' => 'no'
		],
      ]
    ],
    'Request Support' => [
      'icon' => 'request-support',
      'label' => 'Request Support',
      'link' => 'request-support/',
      'parent' => 'no',
      'subnav' => []
    ],
  ];
?>