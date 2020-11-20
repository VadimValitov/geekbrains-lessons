<?php

class PingHandler implements Handler
{
    public function handle(Request $request)
    {
        echo 'Ping handler.' . PHP_EOL;
    }
}
