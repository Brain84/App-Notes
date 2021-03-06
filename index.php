<?php

declare(strict_types=1);

spl_autoload_register(function (string $classNamespace) {
  $path = str_replace(['\\', 'App/'], ['/', ''], $classNamespace);
  $path = "src/$path.php";
  require_once($path);
});

require_once("src/Utils/debug.php");
$configuration = require_once("config/config.php");

use App\Controller\AbstractController;
use App\Controller\NoteController;
use App\Request;
use App\Exception\AppException;
use App\Exception\ConfigurationException;

$request = new Request($_GET, $_POST, $_SERVER);

try {
  AbstractController::initConfiguration($configuration);
  (new NoteController($request))->run();
} catch (ConfigurationException $e) {
  echo '<h1>An Application Error Has Occurred</h1>';
  echo 'An application error has occurred. Please try again later';
} catch (AppException $e) {
  echo '<h1>An Application Error Has Occurred</h1>';
  echo '<h3>' . $e->getMessage() . '</h3>';
} catch (\Throwable $e) {
  echo '<h1>An Application Error Has Occurred</h1>';
  dump($e);
}
