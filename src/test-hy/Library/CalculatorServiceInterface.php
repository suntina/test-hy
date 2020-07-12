<?php
/**
 * Created by PhpStorm.
 * User: sun
 * Date: 2020/6/29
 * Time: 22:31
 */

namespace App\Rpc;

interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;

    public function minus(int $a, int $b): int;
}