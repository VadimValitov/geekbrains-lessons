<?php

class BaseDecorator implements Notificator
{
    private $notificator;

    public function __construct(Notificator $notificator)
    {
        $this->notificator = $notificator;
    }

    public function notify(string $message)
    {
        $this->notificator->notify($message);
    }
}
