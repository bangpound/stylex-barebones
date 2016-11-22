<?php
require_once __DIR__ . '/vendor/autoload.php';

$app = new Stylex\Application([
  'templates' => 'templates',
  'data' => 'data',
  'content' => 'content',
  'debug' => TRUE,
]);
$app->run();
