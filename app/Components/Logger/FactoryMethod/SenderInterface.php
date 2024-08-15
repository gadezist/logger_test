<?php

namespace App\Components\Logger\FactoryMethod;

use App\Components\Logger\LoggerInterface;

interface SenderInterface
{
    public function send(string $message): void;

    public function createLogger(): LoggerInterface;
}


