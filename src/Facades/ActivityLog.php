<?php

namespace Foxen\ActivityLog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Foxen\ActivityLog\ActivityLog
 */
class ActivityLog extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Foxen\ActivityLog\ActivityLog::class;
    }
}
