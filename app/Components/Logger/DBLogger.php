<?php

namespace App\Components\Logger;

use App\Components\Logger\FactoryMethod\LoggerFactory;

class DBLogger extends AbstractLogger
{
    protected string $type = 'db';

    public function sendCurrent(string $message): void
    {
        echo "{$message} was sent via db" . PHP_EOL . '---------------------';
    }
}
