<?php


namespace App\Classes\Gorlabs\Themes\Facades;


use Illuminate\Support\Facades\Facade as Facade;

/**
 * @method static init(string $frontendPath)
 */
class Theme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'theme'; }
}
