<?php

class SlackNotificator implements Notificator
{
    public function notify(string $message)
    {
        echo 'Notification to slack: ' . $message . PHP_EOL;
    }
}
