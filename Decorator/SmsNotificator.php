<?php

class SmsNotificator extends BaseDecorator
{
    public function notify(string $message)
    {
        parent::notify($message);

        echo 'Notification by sms: ' . $message . PHP_EOL;
    }
}
