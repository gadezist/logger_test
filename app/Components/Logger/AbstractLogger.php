<?php

namespace App\Components\Logger;

use App\Components\Logger\FactoryMethod\LoggerFactory;

class AbstractLogger implements LoggerInterface
{
    protected string $type;
    public LoggerInterface $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

//    abstract function send(string $message): void;
    public function send(string $message): void {
        static::send($message);
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
