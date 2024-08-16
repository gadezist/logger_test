<?php

namespace App\Http\Controllers;

use App\Components\Logger\FactoryMethod\LoggerFactory;
use App\Components\Logger\LoggerInterface;

class LoggerController extends Controller
{
    private LoggerInterface $logger;
    private string $message = 'test log';

    public function __construct()
    {
        $this->logger = LoggerFactory::createLogger(config('custom-logger.default'));
    }

    public function log(): void
    {
        $this->logger->send($this->message);
        $this->logger->setType('email');
        $this->logger->send($this->message);
    }

    public function logTo(string $type): void
    {
        $this->logger->sendByLogger($this->message, $type);
    }

    public function logToAll(): void
    {
        $loggers = config('custom-logger.all_loggers');

        foreach ($loggers as $type) {
            $this->logger->sendByLogger($this->message, $type);
        }
    }
}
