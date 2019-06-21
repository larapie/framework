<?php


namespace App\Foundation\Abstracts;

use App\Foundation\Traits\CreatesApplication;
use Illuminate\Foundation\Testing\TestCase;

abstract class Test extends TestCase
{
    use CreatesApplication;
}