<?php

interface LoggerInterface
{
    public function info(string $logMessage);
    public function error(string $logMessage);
    public function warning(string $logMessage);
    public function success(string $logMessage);
    public function log(string $level, string $logMessage);
}