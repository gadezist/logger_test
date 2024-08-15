<?php

namespace App\Components\Logger\FactoryMethod;

use App\Components\Logger\FileLogger;
use App\Components\Logger\LoggerInterface;

class FileSender extends AbstractSender
{
    function createLogger(): LoggerInterface
    {
        return new FileLogger();
    }
}
