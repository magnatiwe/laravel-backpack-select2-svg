<?php


namespace Magnatiwe\Laravel\Backpack\SelectSvgField;

use Illuminate\Support\ServiceProvider;

class SelectSvgFieldServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->loadViewsFrom(realpath(__DIR__ . '/../resources/views'), 'webfactor');

        // publish fields
        $this->publishes([__DIR__ . 'resources/views/fields' => resource_path('views/vendor/backpack/crud/fields')], 'select2_svg.blade.php');
    }

}