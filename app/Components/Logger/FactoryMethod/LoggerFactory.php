<?php

namespace App\Components\Logger\FactoryMethod;

use App\Components\Logger\AbstractLogger;
use App\Components\Logger\DBLogger;
use App\Components\Logger\EmailLogger;
use App\Components\Logger\FileLogger;
use App\Components\Logger\LoggerInterface;

class LoggerFactory
{
    public static function createLogger(string $type): LoggerInterface
    {
//        return match ($type) {
//            'email' => new EmailLogger(),
//            'db' => new DbLogger(),
//            'file' => new FileLogger(),
//            default => throw new \Exception("Logger type {$type} not supported."),
//        };

        return match ($type) {
            'email' => new AbstractLogger(new EmailLogger()),
            'db' => new AbstractLogger(new DbLogger()),
            'file' => new AbstractLogger(new FileLogger()),
            default => throw new \Exception("Logger type {$type} not supported."),
        };
    }
}
