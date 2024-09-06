<?php

namespace App;
use Str;

trait ModelTrait
{
    //  

    function uniqueSlugs(): string {
        return Str::slug('name');
    }

    function getRouteKeyName()
    {
        return 'slug';
    }
}
