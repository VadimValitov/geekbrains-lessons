<?php

namespace Adapter;

use ICircle;
use Lib\CircleAreaLib;

class CircleAdapter implements ICircle
{
    private $circleAreaLib;

    public function __construct(CircleAreaLib $circleAreaLib)
    {
        $this->circleAreaLib = $circleAreaLib;
    }

    public function circleArea(float $circumference)
    {
        $d = $circumference / M_PI;
        return $this->circleAreaLib->getCircleArea($d);
    }
}
