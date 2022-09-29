<?php

namespace RaybonLee\LaravelRebot;

use Closure;
use Illuminate\Support\Facades\Facade;
use Mitoop\Robot\Robot as IRobot;
/**
 * @method $this group($group)
 * @method sendTextMsg($title, $content, $at = [])
 * @method sendMarkdownMsg($content, $at = [])
 * @method $this extend($name, Closure $closure)
 */
class Robot extends Facade
{
    protected static function getFacadeAccessor()
    {
        return IRobot::class;
    }
}
