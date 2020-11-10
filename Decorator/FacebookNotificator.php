<?php

class FacebookNotificator extends BaseDecorator
{
    public function notify(string $message)
    {
        parent::notify($message);

        echo 'Notification to Facebook: ' . $message . PHP_EOL;
    }
}
