<?
// config
$conf = [
  'dev'   => true,        // development mode
  // 'pages' => 'pages/'  // optionally: pages directory
];

// route
$route = [
  'test'    => [
    'els'   => 'test/els',
    'icons' => 'test/icons',
    'mx' => 'test/mx',
  ],
];

require __DIR__ . '/sl/main.php';
