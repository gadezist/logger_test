<?php

namespace App\Http\Controllers;

use App\Components\Logger\FactoryMethod\LoggerFactory;
use App\Components\Logger\LoggerInterface;

class LoggerController extends Controller
{
    private LoggerInterface $logger;
    private string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
        $this->logger = LoggerFactory::createLogger(config('custom-logger.default'));
    }

    public function log(): void
    {
        $this->logger->send($this->message);
    }

    public function logTo(string $type): void
    {
        $logger = LoggerFactory::createLogger($type);
        $logger->send($this->message);
    }

    public function logToAll(): void
    {
        $loggers = ['email', 'db', 'file'];
        foreach ($loggers as $type) {
            $logger = LoggerFactory::createLogger($type);
            $logger->send($this->message);
        }
    }
}
