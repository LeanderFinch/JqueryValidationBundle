<?php

use Symfony\Component\HttpFoundation\Request;

$loader = require_once __DIR__.'/../../bootstrap.php';

require_once __DIR__.'/../app/AppKernel.php';

$kernel = new AppKernel('dev', true);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
