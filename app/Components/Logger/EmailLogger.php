<?php

namespace App\Components\Logger;

class EmailLogger extends AbstractLogger
{
    protected string $type = 'email';

    public function sendCurrent(string $message): void
    {
        echo "Hello " . config('custom-logger.email') . PHP_EOL . "{$message} was sent via email" . PHP_EOL . '-------email-------';
    }
}
