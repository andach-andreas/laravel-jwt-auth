<?php

namespace Andach\LaravelJwtAuth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Andach\LaravelJwtAuth\LaravelJwtAuth
 */
class LaravelJwtAuth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Andach\LaravelJwtAuth\LaravelJwtAuth::class;
    }
}
