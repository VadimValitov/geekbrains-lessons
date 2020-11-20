<?php

class Registration
{
    public function checkEmail($email)
    {
        echo "Check email $email in db" . PHP_EOL;
    }

    public function createNewUser($email)
    {
        echo "Create new user in db" . PHP_EOL;
    }

    public function sendEmail()
    {
        echo "Send email to user" . PHP_EOL;
    }

    public function addStatistics()
    {
        echo "Add registration statistics" . PHP_EOL;
    }
}
