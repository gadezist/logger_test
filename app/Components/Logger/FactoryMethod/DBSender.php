<?php

namespace App\Components\Logger\FactoryMethod;

use App\Components\Logger\DBLogger;
use App\Components\Logger\LoggerInterface;

class DBSender extends AbstractSender
{

    function createLogger(): LoggerInterface
    {
        return new DBLogger();
    }
}
