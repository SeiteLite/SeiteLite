<?
// config
$conf = [
  'dev'   => true,    // development mode
  'pages' => 'pages/' // pages directory
];

// route
$route = [
  'test'    => [
    'els'   => 'test/els',
    'icons' => 'test/icons',
    'mx' => 'test/mx',
  ],
];

// Xdebug test
echo "Xdebug loaded: " . (extension_loaded('xdebug') ? 'Yes' : 'No') . "<br>";
echo "Xdebug mode: " . ini_get('xdebug.mode') . "<br>";
echo "Client host: " . ini_get('xdebug.client_host') . "<br>";
echo "Client port: " . ini_get('xdebug.client_port') . "<br>";

$test_var = "This is a test variable";
var_dump($test_var); // Set a breakpoint here

// require __DIR__ . '/sl/main.php';
