<?php

namespace App\Components\Logger;

class FileLogger extends AbstractLogger
{
    protected string $type = 'file';

    public function sendCurrent(string $message): void
    {
        echo "{$message} was sent via file" . PHP_EOL . '----------------------';
    }
}
