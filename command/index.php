<?php

spl_autoload_register(function ($name) {
    include $name . '.php';
});

$world = new MacrosoftWorld();
$text = $world->action(new CopyCommand(10, 15));
$world->action(new PasteCommand(20, $text));
$text = $world->action(new CutCommand(20, 25));
$world->action(new PasteCommand(1, $text));


$world->redo(1);
$world->undo(2);
