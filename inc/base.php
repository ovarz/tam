<!DOCTYPE html>
<html lang="id">
<base href="/tam/" />
<?php 
  $_SERVER['TAM'] = $_SERVER['DOCUMENT_ROOT'] . '/tam/'; 
  $anticache = date ('s'.'i'.'H'.'d'.'m'.'Y');



  return[
    'Dashboard' => [
      'icon' => 'home',
      'label' => 'Dashboard',
      'link' => 'home.php',
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
    'Master' => [
      'icon' => 'master',
      'label' => 'Master',
      'link' => 'master/',
      'parent' => 'yes',
      'subnav' => [
        [
		  'icon' => 'sub',
		  'label' => 'Dashboard - Banner',
		  'link' => 'master/dashboard-banner/',
          'parent' => 'no'
		],
        [
		  'icon' => 'sub',
		  'label' => 'Dashboard - Running Text',
		  'link' => 'master/dashboard-running-text/',
          'parent' => 'no'
		],
        [
		  'icon' => 'sub',
		  'label' => 'Dashboard - F.A.Q',
		  'link' => 'master/dashboard-faq/',
          'parent' => 'no'
		],
        [
		  'icon' => 'sub',
		  'label' => 'Email Recipient',
		  'link' => 'master/email-recipient/',
          'parent' => 'no'
		],
        [
		  'icon' => 'sub',
		  'label' => 'Vehicle Model',
		  'link' => 'master/vehicle-model/',
          'parent' => 'no'
		],
        [
		  'icon' => 'sub',
		  'label' => 'Vehicle Brand',
		  'link' => 'master/vehicle-brand/',
          'parent' => 'no'
		],
      ]
    ],
    'System' => [
      'icon' => 'system',
      'label' => 'System',
      'link' => 'system/',
      'parent' => 'yes',
      'subnav' => [
        [
		  'icon' => 'sub',
		  'label' => 'Users',
		  'link' => 'system/users/',
          'parent' => 'no'
		],
        [
		  'icon' => 'sub',
		  'label' => 'Roles',
		  'link' => 'system/roles/',
          'parent' => 'no'
		],
        [
		  'icon' => 'sub',
		  'label' => 'General Configuration',
		  'link' => 'system/general-configuration/',
          'parent' => 'no'
		],
        [
		  'icon' => 'sub',
		  'label' => 'Alert Management',
		  'link' => 'system/alert-management/',
          'parent' => 'no'
		],
      ]
    ],
    'G-Fleet' => [
      'icon' => 'gfleet',
      'label' => 'G-Fleet',
      'link' => 'gfleet/',
      'parent' => 'no',
      'subnav' => []
    ],
    'Universal Log' => [
      'icon' => 'log',
      'label' => 'Universal Log',
      'link' => 'log/',
      'parent' => 'no',
      'subnav' => []
    ],
  ];
?>