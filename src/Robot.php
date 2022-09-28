<?php

namespace Raybon\LaravelRebot;

use Illuminate\Support\Facades\Facade;
use Mitoop\Robot\Robot as IRobot;

class Robot extends Facade
{
    protected static function getFacadeAccessor()
    {
        return IRobot::class;
    }
}
