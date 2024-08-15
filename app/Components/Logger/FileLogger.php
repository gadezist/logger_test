<?php

namespace App\Components\Logger;

class FileLogger extends AbstractLogger
{
    protected string $type = 'file';

    public function __construct() {
        parent::__construct(new self);
    }

    function send(string $message): void
    {
        echo "{$message} was sent via file" . PHP_EOL . '----------------------';
    }
}
