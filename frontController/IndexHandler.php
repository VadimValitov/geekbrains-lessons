<?php

class IndexHandler implements Handler
{
    public function handle(Request $request)
    {
        echo 'Index handler.' . PHP_EOL;
    }
}
