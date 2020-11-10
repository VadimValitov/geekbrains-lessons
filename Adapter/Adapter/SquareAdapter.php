<?php

namespace Adapter;

use ISquare;
use Lib\SquareAreaLib;

class SquareAdapter implements ISquare
{
    private $squareAreaLib;

    public function __construct(SquareAreaLib $squareAreaLib)
    {
        $this->squareAreaLib = $squareAreaLib;
    }

    public function squareArea(float $sideSquare)
    {
        $d = sqrt(($sideSquare ** 2) * 2);

        return $this->squareAreaLib->getSquareArea($d);
    }
}
