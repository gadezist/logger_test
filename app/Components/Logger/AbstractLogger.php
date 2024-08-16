<?php

namespace App\Components\Logger;

use App\Components\Logger\FactoryMethod\LoggerFactory;

abstract class AbstractLogger implements LoggerInterface
{
    protected string $type;
    public ?LoggerInterface $logger = null;

    public function __construct() {
            $this->logger = $this;
    }

    abstract public function sendCurrent(string $message): void;
    public function send(string $message): void {
        $this->logger->sendCurrent($message);
    }

    public function sendByLogger(string $message, string $loggerType): void
    {
        LoggerFactory::createLogger($loggerType)->send($message);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
        $this->logger = LoggerFactory::createLogger($type);
    }
}
