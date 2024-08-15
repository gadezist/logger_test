<?php

namespace App\Components\Logger;

abstract class AbstractLogger implements LoggerInterface
{
    protected string $type;

    abstract function send(string $message): void;

    public function sendByLogger(string $message, string $loggerType): void
    {
        if ($this->getType() === $loggerType) {
            $this->send($message);
        }
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
