<?php

namespace App\Components\Logger;

class DBLogger extends AbstractLogger
{
    protected string $type = 'db';

    function send(string $message): void
    {
        echo "{$message} was sent via db" . PHP_EOL;
    }
}
