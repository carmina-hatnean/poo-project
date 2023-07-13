<?php

require_once 'LoggerInterface.php';

class Application
{
    public $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger=$logger;
    }


}