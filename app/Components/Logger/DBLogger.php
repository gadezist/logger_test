<?php

namespace App\Components\Logger;

class DBLogger extends AbstractLogger
{
    protected string $type = 'db';

    public function __construct() {
        parent::__construct(new self);
    }
    function send(string $message): void
    {
        echo "{$message} was sent via db" . PHP_EOL . '---------------------';
    }
}
