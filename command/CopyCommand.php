<?php

class CopyCommand implements Command
{
    private $start;
    private $end;
    private $text;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function execute()
    {
        $this->text = 'Copied text';
        echo sprintf('Copy from %s to %s', $this->start, $this->end) . PHP_EOL;

        return $this->text;
    }

    public function unExecute()
    {
        $this->text = '';
        echo sprintf('Undo copy from %s to %s', $this->start, $this->end) . PHP_EOL;
    }
}
