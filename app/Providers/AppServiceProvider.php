<?php

namespace App\Providers;

use App\Http\Resources\VendorResource;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VendorResource::withoutWrapping();

        Model::shouldBeStrict(!app()->isProduction());
        // вызвать Exception, если идет сохрание поля, не указанного в модели $fillable = [....];
        Model::preventSilentlyDiscardingAttributes(!app()->isProduction());
    }
}
