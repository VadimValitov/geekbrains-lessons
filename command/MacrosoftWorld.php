<?php

class MacrosoftWorld
{
    private $commands;
    private $currentCommandNumber;

    public function __construct()
    {
        $this->commands = [];
        $this->currentCommandNumber = 0;
    }

    public function action(Command $command)
    {
        $this->commands[] = $command;
        $this->currentCommandNumber++;

        return $command->execute();
    }

    public function undo($level)
    {
        echo "Undo $level operations" . PHP_EOL;

        for ($i = 0; $i < $level; $i++) {
            if ($this->currentCommandNumber > 0) {
                $this->commands[--$this->currentCommandNumber]->unExecute();
            }
        }
    }

    public function redo($level)
    {
        echo "Redo $level operations" . PHP_EOL;
        $start = max(0, $this->currentCommandNumber - $level);

        for ($i = $start; $i < $this->currentCommandNumber; $i++) {
            $this->commands[$i]->execute();
        }
    }
}
