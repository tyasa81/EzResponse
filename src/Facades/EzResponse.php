<?php

namespace tyasa81\EzResponse\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \tyasa81\EzResponse\EzResponse
 */
class EzResponse extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \tyasa81\EzResponse\EzResponse::class;
    }
}
