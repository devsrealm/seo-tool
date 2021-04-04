<?php

namespace Devsrealm\SeoTool;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Devsrealm\SeoTool\SeoTool
 */
class SeoToolFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'seo_tool';
    }
}
