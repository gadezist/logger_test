<?php

namespace App\Components\Logger\FactoryMethod;

use App\Components\Logger\LoggerInterface;

abstract class AbstractSender implements SenderInterface
{
    private $logger;
    public function __construct() {
        $this->logger = $this->createLogger();
    }

    public function send(string $message): void
    {
        $this->logger->send($message);

    }

    abstract function createLogger(): LoggerInterface;
}
