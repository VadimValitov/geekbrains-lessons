<?php

class PasteCommand implements Command
{
    private $start;
    private $text;

    public function __construct($start, $text)
    {
        $this->start = $start;
        $this->text = $text;
    }

    public function execute()
    {
        echo sprintf('Paste text "%s" to %s', $this->text, $this->start) . PHP_EOL;
    }

    public function unExecute()
    {
        echo sprintf('Undo paste. Remove text from %s, length %d', $this->start, strlen($this->text)) . PHP_EOL;
    }
}
