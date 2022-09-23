<?php

namespace Riclep\LaravelStoryblokTypography;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Riclep\LaravelStoryblokTypography\Skeleton\SkeletonClass
 */
class LaravelStoryblokTypographyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-storyblok-typography';
    }
}
