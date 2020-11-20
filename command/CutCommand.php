<?php

class CutCommand implements Command
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
        $this->text = 'Cut text';
        echo sprintf('Cut from %s to %s', $this->start, $this->end) . PHP_EOL;

        return $this->text;
    }

    public function unExecute()
    {
        echo sprintf('Undo cut. Insert back text "%s" from %s to %s', $this->text, $this->start, $this->end) . PHP_EOL;
    }
}
