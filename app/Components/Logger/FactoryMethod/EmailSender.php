<?php

namespace App\Components\Logger\FactoryMethod;

use App\Components\Logger\EmailLogger;
use App\Components\Logger\LoggerInterface;
use FactoryMethod;

class EmailSender extends AbstractSender
{
    function createLogger(): LoggerInterface
    {
        return new EmailLogger();
    }
}
