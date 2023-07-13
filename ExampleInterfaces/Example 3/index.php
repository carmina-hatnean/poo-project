<?php

require_once 'Application.php';
require_once 'FileLog.php';
require_once 'DbLog.php';

$app = new Application(
  //  new FileLog(),
    new DbLog()

);

$app->logger->error("Error Message");
$app->logger->success("Success Message");
$app->logger->warning("Warning Message");
$app->logger->info("Info Message");
$app->logger->log("DEBUG", "Debug Message");