<?php

require_once 'AbstractLogger.php';

class DbLog extends AbstractLogger
{

    public function log(string $level, string $logMessage)
    {
       echo "Calling method" . $level. ' '. __METHOD__ . PHP_EOL;
    }
}